<html>
<head>
    <title> pdms
    </title>
    <!--    <link rel="stylesheet" href="https://bootswatch.com/cyborg/bootstrap.min.css">-->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <!--    <script src="http://cdn.ckeditor.com/4.7.2/basic/ckeditor.js"></script>-->
    <script src="http://cdn.ckeditor.com/4.7.2/full/ckeditor.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?php echo base_url();?>/">PDMS</a>
        </div>
        <div id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>/about">About</a></li>
                <li><a href="<?php echo base_url();?>/posts">Blogs</a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url();?>posts/create">login</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <?php  if ($this->session->flashdata('user_registered')):?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>';?>
    <?php endif; ?>

