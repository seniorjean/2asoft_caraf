<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Com_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function UPDATE($table = '', $where = array(), $data = array())
    {
        if (!empty($table)) {
            if (!empty($where) and !empty($data)) {
                $this->db->where($where)
                    ->update($table, $data);
                return "";
            }
        }
        else {
            $this->session->set_flashdata('message', 'invalid query');
            return false;
        }

    }

    public function INSERT($table = NULL, $data = array())
    {
        if (!empty($table) AND !empty($data)) {
            $this->db->insert($table, $data);
        }
    }

    public function DELETE($table = NULL, $where = array())
    {
        if (!empty($table) AND !empty($where)) {
            $this->db->delete($table, $where);
        }
    }

    public function GET_DATA($table = NULL, $where = array(), $order_by_column = NULL, $order_direction = 'DESC')
    {
        if (!empty($table)) {
            if (empty($order_by_column)) {
                return $this->db->where($where)
                    ->get($table);
            } else {
                return $this->db->where($where)
                    ->order_by($order_by_column, $order_direction)
                    ->get($table);
            }
        }
    }

    public function GET_COLUMNS($table = NULL, $columns = array(), $where = array(), $order_direction = '')
    {
        if (!empty($table)) {
            if (empty($order_direction)) {
                return $this->db->where($where)
                    ->select(implode(',', $columns))
                    ->get($table);
            } else {
                return $this->db->where($where)
                    ->select(implode(',', $columns))
                    ->order_by($order_direction)
                    ->get($table);
            }
        }
    }

    public function GET_COLUMNS_LIKE($table = NULL, $columns = array(), $where = array(),$where_not_in = array(), $order_direction = '' , $where_col = array())
    {
        if (!empty($table))
        {
            //order by statement is missing
            if (empty($order_direction))
            {
                //where not in statement available
                if(!empty($where_not_in[0] AND !empty($where_not_in[1])))
                {
                    return $this->db->like($where)
                                    ->where($where_col)
                                    ->select(implode(',', $columns))
                                    ->where_not_in($where_not_in[0],$where_not_in[1])
                                    ->get($table);
                }
                //where not in statement missing
                else
                {
                    return $this->db->like($where)
                                    ->where($where_col)
                                    ->select(implode(',', $columns))
                                    ->get($table);
                }
            }
            //order by statement is available
            else
            {
                //where not in statement is available
                if(!empty($where_not_in[0] AND !empty($where_not_in[1])))
                {
                    return $this->db->like($where)
                        ->select(implode(',', $columns))
                        ->where($where_col)
                        ->where_not_in($where_not_in[0],$where_not_in[1])
                        ->order_by($order_direction)
                        ->get($table);
                }
                //where not in statement is missing
                else
                {
                    return $this->db->like($where)
                        ->select(implode(',', $columns))
                        ->where($where_col)
                        ->order_by($order_direction)
                        ->get($table);
                }


            }
        }
    }

    public function QUERY($request)
    {
        if(!empty($request))
        {
            $this->db->query($request);
        }
        else return false;
    }

    public function user_head_privilege($gp_id)
    {
        $this->db->select('*');
        $this->db->from('groups');
        $this->db->join('group_perm', 'group_perm.group_id = groups.id');
        $this->db->join('permissions', 'permissions.perm_id = group_perm.perm_id');
        $this->db->where('permissions.level', 0);
        $this->db->group_by('permissions.order');
        $this->db->where('group_perm.group_id',$gp_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function user_sub_privilege($gp_id,$perm_id)
    {
        $this->db->select('*');
        $this->db->from('groups');
        $this->db->join('group_perm', 'group_perm.group_id = groups.id');
        $this->db->join('permissions', 'permissions.perm_id = group_perm.perm_id');
        $this->db->where('permissions.parent_id', $perm_id);
        $this->db->where('permissions.level', 1);
        $this->db->group_by('permissions.order');
        $this->db->where('group_perm.group_id',$gp_id);
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * @param array $tables
     * @param array $cond
     * @param array $columns
     * @param array $where
     * @param string $order_direction
     *
     * GET_COLUMNS_JOIN([table1 , table2],[user_id , user_id] , ['username','email','table1.user_id] , ['user_name'=>'john'])
     * produce : select(username , email , table1.user_id) from table1 join table2 on table1.user_id = table2.user_id
     */
    public function GET_COLUMNS_JOIN($tables = [], $cond = [], $columns = array(), $where = array(), $order_by = '')
    {
        if(empty($order_by))
        {
            return $this->db->select(implode(',', $columns))
                ->where($where)
                ->join($tables[0],"{$tables[0]}.{$cond[0]} = {$tables[1]}.{$cond[1]}")
                ->get($tables[1]);
        }
        else
        {
            return $this->db->select(implode(',', $columns))
                ->where($where)
                ->join($tables[0],"{$tables[0]}.{$cond[0]} = {$tables[1]}.{$cond[1]}")
                ->order_by($order_by)
                ->get($tables[1]);
        }
    }

    public function IS_UNIQUE($table = '', $where_unique = array())
    {
        if (!empty($table) && !empty($where_unique)) {

            $request = $this->db->where($where_unique)
                                ->get($table);
            return ($request->num_rows()> 0)?false : true;
        }


    }

    public function get_members_in_group($where = [] , $limit = '' , $return_type = 'result'){
        if(!empty($limit)){$this->db->limit($limit);}
        return $this->db->select('users.id as user_id , users.status , username , email, first_name,last_name,phone,picture,city,active,available,groups.name, groups.id as group_id , users.about , users.designation')
            ->join('users_groups','users_groups.user_id = users.id')
            ->join('groups','groups.id = users_groups.group_id')
            ->where($where)
            ->get('users')->$return_type();
    }

    public function count_rows($table_name , $where = [])
    {
        if(!empty($table_name))
        {
            if(!empty($where)){
                $this->db->where($where);
            }
            return (int) $this->db->get($table_name)->num_rows();
        }
    }




}
