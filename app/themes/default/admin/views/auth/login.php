<?php defined('BASEPATH') or exit('No direct script access allowed');
// $bgs = glob(VIEWPATH . 'default/admin/assets/images/login-bgs/*.jpg');
// foreach ($bgs as &$bg) {
//     $af = explode('assets/', $bg);
//     $bg = $assets . $af[1];
// }
// $this->sma->print_arrays($bgs);
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <script type="text/javascript">if (parent.frames.length !== 0) { top.location = '<?=admin_url()?>'; }</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?= $assets ?>images/icon.png"/>
    <link href="<?= $assets ?>styles/theme.css" rel="stylesheet"/>
    <link href="<?= $assets ?>styles/style.css" rel="stylesheet"/>
    <link href="<?= $assets ?>styles/helpers/login.css" rel="stylesheet"/>
    <script type="text/javascript" src="<?= $assets ?>js/jquery-2.0.3.min.js"></script>
    <!--[if lt IE 9]>
    <script src="<?= $assets ?>js/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            min-width: 350px;
            background: #f5f7fb;
        }

        .bblue {
            background: #fff !important;
        }

        .login-page .page-back {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 32px 16px;
            background: linear-gradient(180deg, #f8fafc 0%, #eef2f7 100%);
        }

        .contents {
            width: 100%;
            max-width: 440px;
            margin: 0 auto;
            padding: 0;
            background: transparent;
            border: none;
            border-radius: 0;
        }

        .login-content {
            margin-top: 0;
        }

        .login-page .login-form-links {
            margin-top: 16px;
        }

        .text-center img {
            max-width: 110px;
            margin-bottom: 24px !important;
        }

        .login-header{
            text-align:center;
            margin-bottom:32px;
        }

        .login-logo{
            width:72px;
            margin-bottom:20px;
        }

        .login-header h2{
            font-size:28px;
            font-weight:700;
            color:#111827;
            margin-bottom:8px;
        }

        .login-header p{
            color:#6b7280;
        }

        .form-group label{
            display:block;
            font-weight:600;
            margin-bottom:8px;
            color:#374151;
        }

        .login-actions{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin:24px 0;
        }

        .login-actions a{
            color:#2563eb;
            text-decoration:none;
        }

        .login-actions a:hover{
            text-decoration:underline;
        }

        .remember{
            display:flex;
            align-items:center;
            gap:8px;
            margin:0;
            cursor:pointer;
        }

        .remember span{
            font-weight:500;
            color: gray;
        }
    </style>

</head>

<body class="login-page">
    <noscript>
        <div class="global-site-notice noscript">
            <div class="notice-inner">
                <p>
                    <strong>JavaScript seems to be disabled in your browser.</strong><br>You must have JavaScript enabled in
                    your browser to utilize the functionality of this website.
                </p>
            </div>
        </div>
    </noscript>
    <div class="page-back">
        <div class="contents">
            <div id="login">
                <div class="container">

                    <div class="login-form-div">
                        <div class="login-content">

                            <div class="login-header">

                                <?php if ($Settings->logo2): ?>
                                    <img
                                        src="<?= base_url('assets/uploads/logos/' . $Settings->logo2) ?>"
                                        class="login-logo"
                                        alt="<?= $Settings->site_name ?>">
                                <?php endif; ?>

                                <h2>Welcome Back</h2>

                                <p>
                                    <?= lang('login_to_your_account') ?>
                                </p>

                            </div>

                            <?php if ($Settings->mmode): ?>
                                <div class="alert alert-warning">
                                    <?= lang('site_offline') ?>
                                </div>
                            <?php endif; ?>

                            <?php if ($error): ?>
                                <div class="alert alert-danger">
                                    <ul><?= $error ?></ul>
                                </div>
                            <?php endif; ?>

                            <?php if ($message): ?>
                                <div class="alert alert-success">
                                    <ul><?= $message ?></ul>
                                </div>
                            <?php endif; ?>

                            <?= admin_form_open('auth/login', 'class="login"') ?>

                            <div class="form-group">

                                <label>Username</label>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-user"></i>
                                    </span>

                                    <input
                                        class="form-control"
                                        name="identity"
                                        placeholder="<?= lang('username') ?>"
                                        required>
                                </div>

                            </div>

                            <div class="form-group">

                                <label>Password</label>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-lock"></i>
                                    </span>

                                    <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        placeholder="<?= lang('pw') ?>"
                                        required>

                                </div>

                            </div>

                            <div class="login-actions">

                                <label class="remember">

                                    <?= form_checkbox('remember','1',false) ?>

                                    <span><?= lang('remember_me') ?></span>

                                </label>

                                <a href="#forgot_password"
                                class="forgot_password_link">

                                    Forgot Password?

                                </a>

                            </div>

                            <button class="btn btn-success btn-block">

                                <i class="fa fa-sign-in"></i>

                                Sign In

                            </button>

                            <?= form_close(); ?>

                        </div>
                    </div>
                </div>
            </div>

            <div id="forgot_password" style="display: none;">
                <div class=" container">
                    <div class="login-form-div">
                        <div class="login-content">
                            <?php
                            if ($error) {
                                ?>
                                <div class="alert alert-danger">
                                    <button data-dismiss="alert" class="close" type="button">×</button>
                                    <ul class="list-group"><?= $error; ?></ul>
                                </div>
                                <?php
                            }
                            if ($message) {
                                ?>
                                <div class="alert alert-success">
                                    <button data-dismiss="alert" class="close" type="button">×</button>
                                    <ul class="list-group"><?= $message; ?></ul>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="div-title col-sm-12">
                                <h3 class="text-primary"><?= lang('forgot_password') ?></h3>
                            </div>
                            <?php echo admin_form_open('auth/forgot_password', 'class="login" data-toggle="validator"'); ?>
                            <div class="col-sm-12">
                                <p>
                                    <?= lang('type_email_to_reset'); ?>
                                </p>
                                <div class="textbox-wrap form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="forgot_email" class="form-control "
                                        placeholder="<?= lang('email_address') ?>" required="required"/>
                                    </div>
                                </div>
                                <div class="form-action">
                                    <a class="btn btn-success pull-left login_link" href="#login">
                                        <i class="fa fa-chevron-left"></i> <?= lang('back') ?>
                                    </a>
                                    <button type="submit" class="btn btn-primary pull-right">
                                        <?= lang('submit') ?> &nbsp;&nbsp; <i class="fa fa-envelope"></i>
                                    </button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if ($Settings->allow_reg) {
                ?>
                <div id="register">
                    <div class="container">
                        <div class="registration-form-div reg-content">
                            <?php echo admin_form_open('auth/register', 'class="login" data-toggle="validator"'); ?>
                            <div class="div-title col-sm-12">
                                <h3 class="text-primary"><?= lang('register_account_heading') ?></h3>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= lang('first_name', 'first_name'); ?>
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                        <input type="text" name="first_name" class="form-control " placeholder="<?= lang('first_name') ?>" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= lang('last_name', 'last_name'); ?>
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                        <input type="text" name="last_name" class="form-control " placeholder="<?= lang('last_name') ?>" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= lang('company', 'company'); ?>
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="fa fa-building"></i></span>
                                        <input type="text" name="company" class="form-control " placeholder="<?= lang('company') ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= lang('phone', 'phone'); ?>
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="fa fa-phone-square"></i></span>
                                        <input type="text" name="phone" class="form-control " placeholder="<?= lang('phone') ?>" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= lang('username', 'username'); ?>
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="fa fa-user"></i></span>
                                        <input type="text" name="username" class="form-control " placeholder="<?= lang('username') ?>" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?= lang('email', 'email'); ?>
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="email" class="form-control " placeholder="<?= lang('email_address') ?>" required="required"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?php echo lang('password', 'password1'); ?>
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                        <?php echo form_password('password', '', 'class="form-control tip" id="password1" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" data-bv-regexp-message="' . lang('pasword_hint') . '"'); ?>
                                    </div>
                                    <span class="help-block"><?= lang('pasword_hint') ?></span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?php echo lang('confirm_password', 'confirm_password'); ?>
                                    <div class="input-group">
                                        <span class="input-group-addon "><i class="fa fa-key"></i></span>
                                        <?php echo form_password('confirm_password', '', 'class="form-control" id="confirm_password" required="required" data-bv-identical="true" data-bv-identical-field="password" data-bv-identical-message="' . lang('pw_not_same') . '"'); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <a href="#login" class="btn btn-success pull-left login_link">
                                    <i class="fa fa-chevron-left"></i> <?= lang('back') ?>
                                </a>
                                <button type="submit" class="btn btn-primary pull-right">
                                    <?= lang('register_now') ?> <i class="fa fa-user"></i>
                                </button>
                            </div>

                            <?php echo form_close(); ?>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <script src="<?= $assets ?>js/jquery.js"></script>
    <script src="<?= $assets ?>js/bootstrap.min.js"></script>
    <script src="<?= $assets ?>js/jquery.cookie.js"></script>
    <script src="<?= $assets ?>js/login.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            localStorage.clear();
            var hash = window.location.hash;
            if (hash && hash != '') {
                $("#login").hide();
                $(hash).show();
            }
        });
    </script>
</body>
</html>
