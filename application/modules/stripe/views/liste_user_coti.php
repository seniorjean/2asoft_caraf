<!-- Main content start -->

<section id="main-content">
    <section class="wrapper">
        <!-- page start-->
        <div class="row">
            <div class="col-sm-12">
                <section class="panel">
                    <header class="panel-heading">
                        <i class="fa fa-money"></i> Tableau des cotisations
<!--                        <a href="--><?//= bs('users/print_with_dompdf') ?><!--">-->
<!--                            <i class="fa fa-print" style="padding-left: 1%;color: black"></i>-->
<!--                        </a>-->
				     <span class="tools pull-right">
				        <a href="javascript:;" class="fa fa-chevron-down"></a>
				        <a href="javascript:;" class="fa fa-times"></a>
				     </span>
                    </header>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="display table table-bordered table-striped table-responsive" id="dynamic-table">
                                <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>date</th>
                                    <th class="hidden-sm">Payeur</th>
                                    <th data-visible="false">Montant</th>
                                    <th>Dévise</th>
                                    <th></th>

                                    <?php

                                    //var_dump($cotis);
                                    //If user is Admin
                                    if ($this->session->userdata("group_id") == 1):
                                        ?>

                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>

                                    <?php endif ?>
                                </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($cotis as $user):?>
                                    <tr>
                                        <td>
                                            <?php echo htmlspecialchars($user->id,ENT_QUOTES,'UTF-8');?>
                                        </td>
                                        <td class="hidden-sm">
                                            <?php echo htmlspecialchars($user->created,ENT_QUOTES,'UTF-8');?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($user->name,ENT_QUOTES,'UTF-8');?>
                                        </td>
                                        <td>
                                            <?php echo htmlspecialchars($user->item_price,ENT_QUOTES,'UTF-8');?>
                                        </td>
                                        <td><?php echo htmlspecialchars($user->item_price_currency,ENT_QUOTES,'UTF-8');?>

                                        </td>

                                         <td><?php if ($this->session->userdata("group_id") == 1): ?></td>

                                            <td>
                                                <?php echo ($user->active) ? anchor("users/auth/deactivate/".$user->id, lang('index_active_link'),array('class' => 'btn btn-primary btn-sm')) : anchor("users/activate/". $user->id, lang('index_inactive_link'),array('class' => 'btn btn-default btn-sm'));?>
                                                </a>
                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="<?= base_url('users/edit_user')?>/<?= $user->id ?>"><i class="fa fa-pencil"></i></a>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="<?= base_url('users/delete_user')?>/<?= $user->id ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                                            </td>

                                        <?php endif ?>

                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- page end-->
    </section>
</section>

<!-- Main Content Ends -->
