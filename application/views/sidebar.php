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
  <div class="col-lg-3" style="padding: 0px !important; margin: 0px !important;">
    <section id="sidebar">
      <ul>
        <li><h2> Welcome, <?php echo $this->session->userdata("nama"); ?></h2><li>
        <li><a href="<?php echo base_url('dashboard'); ?>">Data Buku</a></li>
        <li><a href="<?php echo base_url('dashboard/kategori'); ?>">Kategori Buku</a></li>
        <li><a href="<?php echo base_url('dashboard/list_user'); ?>">List User</a></li>
        <li><a href="<?php echo base_url('dashboard/list_pesanan'); ?>">Pesanan Buku</a></li>
        <li><a href="<?php echo base_url('dashboard/inbox'); ?>">Inbox</a></li>
        <li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
      </ul>
    </section>
  </div>

  <div class="col-lg-9">
    <?php $this->load->view($content); ?>
  </div>
</div>
