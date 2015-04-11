<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Toge - Control Panel</title>
        <!-- Bootstrap core CSS -->
<!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="<?php echo base_url('asset/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('asset/fonts/css/font-awesome.min.css'); ?>">
        
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url('asset/css/dashboard.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('asset/css/jquery.datetimepicker.css'); ?>" rel="stylesheet">
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head><!-- Latest compiled and minified CSS -->
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">                
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Toge - CMS</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Settings</a></li>
                    <li><a href="#">Logout</a></li>
                </ul>
<!--                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>-->
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="text-center"> <i class="fa fa-send fa-4x" style="color:#0D8FDB"></i></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Reports</a></li>
                    <li><a href="#">Analytics</a></li>                    
                </ul>
                <div class="divider"></div>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Blogs <span class="sr-only">(current)</span></a></li>
                    <li><a href="<?php echo site_url('setmenu'); ?>">Create Menus</a></li>
                    <li><a href="<?php echo site_url('postpage/list'); ?>">Create Pages</a></li>
                    <li><a href="<?php echo site_url('upload'); ?>">Upload Media</a></li>
                    <li><a href="<?php echo site_url('comment/list'); ?>">Approve Comments</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Themes</a></li>
                    <li><a href="">Setup Themes</a></li>                                        
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="#">Settings</a></li>
                    <li><a href="<?php echo site_url('account/list'); ?>">Users Setup</a></li>
                    <li><a href="<?php echo site_url('config'); ?>">Blog Settings</a></li>                    
                </ul>
            </div>