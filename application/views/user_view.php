<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="<?php echo base_url() ?>assets/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/assets/css/custom.css" rel="stylesheet">
</head>
<style>
    .box{
    width:450px;
    height:150px;
    background:rgba(0,0,0,.4);
    padding:40px;
    text-align:center;
    margin-left: 300px;
    color:white;
    font-family:'Century Gothic',sans-serif;
}
#box2{
    position: absolute;
    top: 25vh;
}
</style>
<body>
    <nav class="navbar navbar-inverse navbar-static-top">

        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            </button>
        </div>


    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="<?=base_url('index.php/Home/Utama')?>">HOME<span class="sr-only">(current)</span></a></li>
                <li class="active"><a  href="<?=base_url('index.php/Login/logout')?>">Log out</a></li>

                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <?php echo $_SESSION['username'];?><span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li role="separator" class="divider"></li>
                    <li><a href='#'>Profile</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href='<?php echo base_url(); ?>index.php/Login/logoutUser'>Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
<div class='container' style='margin-top: 40px;'>

    <!-- temporary message for a successful landing to the home page -->
    <?php if ($this->session->flashdata('success')) {?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php  } ?>
    <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>','</div>');
    ?>

    <div class="jumbotron">
    <img style="width:200px;border-radius:50%;" src="<?=base_url()?>assets/assets/css/g2.jpg" alt="">
        <p class="box" id="box2">"Everybody has a lot of chapter they don't read out loud"</p>
        <h2>Hello <?php echo $_SESSION['username'];?></h2>
    </div>

</div>


    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>
