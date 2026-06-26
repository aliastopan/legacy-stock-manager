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
            animation: loginFade .7s ease;
        }

        @keyframes loginFade {
            from {
                opacity: 0;
                transform: translateY(24px) scale(.98);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
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

        .input-group{
            transition:.25s;
        }

        .input-group:hover{
            transform:translateY(-2px);
        }

        .input-group:focus-within{
            transform:translateY(-2px);
        }

        .form-control{
            transition:.25s;
        }

        .form-control:focus{
            box-shadow:
                0 0 0 4px rgba(37,99,235,.12),
                0 10px 25px rgba(37,99,235,.08);
        }

        .btn-success{
            position:relative;
            overflow:hidden;
            transition:.3s;
        }

        .btn-success:hover{
            transform:translateY(-2px);
            box-shadow:0 15px 30px rgba(37,99,235,.28);
        }

        .btn-success:active{
            transform:scale(.98);
        }

        .btn-success::before{
            content:"";
            position:absolute;
            inset:0;
            left:-120%;
            background:linear-gradient(
                90deg,
                transparent,
                rgba(255,255,255,.35),
                transparent
            );
            transition:.6s;
        }

        .btn-success:hover::before{
            left:120%;
        }

        .login-actions a{
            position:relative;
            transition:.25s;
        }

        .login-actions a::after{
            content:"";
            position:absolute;
            left:0;
            bottom:-3px;

            width:0;
            height:2px;

            background:#2563eb;

            transition:.25s;
        }

        .login-actions a:hover::after{
            width:100%;
        }

        .alert{
            animation:slideAlert .4s ease;
        }

        @keyframes slideAlert{
            from{
                opacity:0;
                transform:translateY(-10px);
            }
            to{
                opacity:1;
                transform:none;
            }
        }

        .alert {
            display: flex;
            align-items: flex-start;
            gap: 14px;

            padding: 16px 18px;
            margin-bottom: 20px;

            border: none;
            border-radius: 14px;

            box-shadow: 0 10px 25px rgba(15,23,42,.06);

            animation: alertIn .35s ease;
        }

        .alert::before{
            font-family: FontAwesome;
            font-size:20px;
            margin-top:2px;
        }

        .alert ul{
            margin:0;
            padding-left:18px;
        }

        .alert li{
            color:#374151;
        }

        .alert-success{
            background:#ecfdf5;
            border-left:4px solid #10b981;
        }

        .alert-success::before{
            content:"\f058";
            color:#10b981;
        }

        .alert-danger{
            background:#fef2f2;
            border-left:4px solid #ef4444;
        }

        .alert-danger::before{
            content:"\f057";
            color:#ef4444;
        }

        .alert-warning{
            background:#fff7ed;
            border-left:4px solid #f59e0b;
        }

        .alert-warning::before{
            content:"\f071";
            color:#f59e0b;
        }

        @keyframes alertIn{

            from{
                opacity:0;
                transform:translateY(-10px);
            }

            to{
                opacity:1;
                transform:none;
            }

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

                                    <div>
                                        <strong>Maintenance Mode</strong>

                                        <div style="margin-top:6px">
                                            <?= lang('site_offline') ?>
                                        </div>

                                    </div>

                                </div>
                            <?php endif; ?>

                            <?php if ($error): ?>
                                <div class="alert alert-danger">

                                    <div>
                                        <strong>Login Failed</strong>

                                        <ul class="list-unstyled" style="margin-top:6px;">
                                            <?= $error ?>
                                        </ul>
                                    </div>

                                </div>
                            <?php endif; ?>

                            <?php if ($message): ?>
                                <div class="alert alert-success">

                                    <div>
                                        <strong>Success</strong>

                                        <ul class="list-unstyled" style="margin-top:6px;">
                                            <?= $message ?>
                                        </ul>
                                    </div>

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

        $('form.login').on('submit', function () {

            var btn = $(this).find('button[type=submit]');

            btn
                .prop('disabled', true)
                .html(
                    '<i class="fa fa-spinner fa-spin"></i> Signing In...'
                );

        });
    </script>
</body>
</html>
