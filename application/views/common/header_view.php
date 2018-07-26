<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><? echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap-grid.css">   
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap-grid.css.map">   
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap-grid.min.css">   
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap-grid.min.css.map">   
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap-reboot.css"> 
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap-reboot.css.map"> 
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap-reboot.min.css"> 
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap-reboot.min.css.map"> 
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap.css">    
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap.css.map">    
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap.min.css">    
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/fontawesome.css">
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/css/fontawesome.min.css">
    <link rel="icon" type="image/gif" href="<? echo base_url();?>assets/images/logo.png" /> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/solid.css" integrity="sha384-g2aKxiZcFezoVOq4MsjaxuBbSxSlXD/NRQ5GaPLfvCtcTLgP3fYZKKAGxCM/wMfe" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/regular.css" integrity="sha384-nM5tBytXTc1HDZ/A3My2gNT2TxLk/M/5yFi0QrOxaZjBi7QpKUfA2QqT+fcSxSlg" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/brands.css" integrity="sha384-1beec9tTZuu+KrTudmvRnGpK81r78DKCAXdphCvdG+PR+n/WCczsYPqTBTvYsM7z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.4/css/fontawesome.css" integrity="sha384-xdTUmhbcetyLRVL4PAriRajOve+/5pjOiy5sJABnhXMcRMVc9HI9s2KmOCjjDK/P" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/js/bootstrap.bundle.js.map">  
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/js/bootstrap.bundle.min.js.map">   
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/js/bootstrap.js.map">  
    <link rel="stylesheet" type="text/css" href="<? echo base_url();?>assets/js/bootstrap.min.js.map">   -->

    
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img src="<? echo base_url();?>assets/images/logo.png" width="150" height="30"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

<? if($this->session->userdata('username') != ''): ?>
<? echo '<div class="collapse navbar-collapse" id="navbarSupportedContent">'; ?>
    <? echo '<ul class="navbar-nav mr-auto">'; ?>
    <? echo    '<li class="nav-item active">'; ?>
            <? echo '<a class="nav-link" href="#">Welcome '.$this->session->userdata('username').'</a>'; ?>
        <? echo '</li>'; ?>
    <? echo '</ul>'; ?>
    
    <? echo '<form class="form-inline my-2 my-sm-0" action="'.base_url().'users/logout">'; ?>
        <? echo '<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>'; ?>
    <? echo '</form>'; ?>
<? echo '</div>'; ?>
<? endif; ?>
</nav>