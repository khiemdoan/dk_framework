<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Title -->
        <title>DK FW<?php if (isset($title)) echo ' | '.$title; ?></title>

        <link rel="icon" type="image/png" href="<?php echo base_url('public/favicon.png'); ?>">

        <!-- Bootstrap -->
        <link href="<?php echo base_url('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
 
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url('public/js/jquery.min.js'); ?>"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url('public/js/bootstrap.min.js'); ?>"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <div class="container">

            <!-- Navigation bar -->
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo base_url(); ?>">DK framework</a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">

                        <!-- Menu bên trái -->
                        <ul class="nav navbar-nav">
                            <li><a href=""><span class="glyphicon glyphicon-globe"></span> News</a></li>
                            <li><a href=""><span class="glyphicon glyphicon-facetime-video"></span> Clip</a></li>
                        </ul>

                        <!-- Menu bên phải -->
                        <ul class="nav navbar-nav navbar-right">
                            <?php if (check_login() == true) { ?>
                                <li><a href="<?php echo base_url('account/change_password'); ?>"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $this->session->get('username'); ?></a></li>
                                <li><a href="<?php echo base_url('account/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                            <?php } else { ?>
                                <li><a href="<?php echo base_url('account/signup'); ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                                <li><a href="<?php echo base_url('account/login'); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <?php } ?>
                        </ul>

                    </div>
                </div>
            </nav>
            <!-- End Navigation bar -->

            <div class="row">
