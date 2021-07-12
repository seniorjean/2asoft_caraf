<?php /** Created by PhpStorm. User: JOHN Date: 5/16/2021 Time: 1:02 AM */

class MY_Email extends CI_Email {

    public function valid_email($address)
    {
        return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $address)) ? FALSE : TRUE;
    }

}