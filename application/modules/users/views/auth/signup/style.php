<?php /** Created by PhpStorm. User: JOHN Date: 5/16/2021 Time: 12:43 PM */?>

<style type="text/css">
    .form-signin p {
        text-align: left !important;
        color: inherit !important;
    }
    body {
        margin-top:40px;
    }
    .stepwizard-step p {
        margin-top: 10px;
    }
    .stepwizard-row {
        display: table-row;
    }
    .stepwizard {
        display: table;
        width:100%;
        position: relative;
    }
    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }
    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;
    }
    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }
    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
</style>

<style type="text/css" media="screen">
    .noty-color {
        background-color: #ca5654;
        border: 0px;
        color: white;

    }

    .success-noty {
        background-color: #72b373;
        color: white;
    }

    .error {
        color: #ca5654;
    }

    .col-sm-6, .col-sm-4 {
        position: relative
    }

    .feedback {
        position: absolute;
        text-align: left !important;
        bottom: 2px;
        right: 18px;
    }

    .datepicker {
        opacity: 1 !important;
    }
</style>

<style>
    .stepwizard-step a{color: White !important;}
    .stripe_form{
        max-width:30em !important;
        margin-top:9%;
    }
    .alert-info {
        color: white !important;
        background-color: #ff5722eb !important;
        border-color: #009688;
    }
    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0px solid transparent;
        border-radius: 0px;
    }
    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem;
    }
    .mbot90{margin-bottom: 120px}

    .ui-widget-content {
        background-color: white !important;
        border: solid thin #e6e6e6 !important;
        border-radius: 0px 0px 9px 9px !important;
    }

    #code_postaux_id{
        border-radius: 9px 9px 0px 0px !important;
    }
    .swal2-popup.swal2-toast .swal2-title , .swal2-icon{font-size: 1.7em !important;}
</style>
