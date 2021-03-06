<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Toko Buku</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
<div class="container-fluid" style="padding: 0px !important; width: 100% !important; margin: 0px !important;">
  <header>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="<?php echo base_url()?>">Toko Buku Saya</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo base_url()?>">Home</a></li>
          <li><a href="<?php echo base_url().'home/about';?>">About Us</a></li>
          <li><a href="<?php echo base_url().'home/contact'; ?>">Contact Us</a></li>
          <li><a href="<?php echo base_url().'home/chart'; ?>">Chart</a></li>
          <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>

        </ul>
      </div>
    </nav>
  </header>
</div>

<?php $this->load->view($content); ?>
