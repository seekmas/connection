<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo $template['title'];?></title>
		<link href="<?php echo base_url('public/bootstrap/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/bootstrap/css/bootstrap-responsive.css');?>" rel="stylesheet">
    <style>

    </style>
    <link rel="stylesheet" href="<?php echo base_url('public/grumble/css/grumble.css?v=5');?>">
    <link href="<?php echo base_url('public/fseditor/fseditor.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('public/mot/mot.css');?>" rel="stylesheet">
</head>

<body style="padding-top:55px;padding-bottom:60px;">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Z</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="<?php echo site_url('pills/index');?>">Home</a></li>
              <li><a href="<?php echo site_url('bookmarks/sheets');?>">Bookmark</a></li>
              <li><a href="<?php echo site_url('usefulbox/contacts');?>">Contacts</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Connection <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="<?php echo site_url('users/login');?>">Login</a></li>
                  <li><a href="<?php echo site_url('users/index');?>">Register</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header"></li>
                  <li><a href="<?php echo site_url('connection/share');?>">Share objects</a></li>
                  <li><a href="<?php echo site_url('connection/find');?>">Find People</a></li>
                  <li><a href="<?php echo site_url('connection/follow');?>">Follow People</a></li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="<?php echo site_url( 'users/tiktok');?>">tiktok</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>