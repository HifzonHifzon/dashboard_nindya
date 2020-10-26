<html>
<head>
<title> Dashboard - Nindya Karya </title>
<link rel="icon" href="<?php echo base_url().'asset/image/logo.png' ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- load css -->
<?php $this->load->view('template/css'); ?>

</head>
<body>

<!-- header -->
<div class="row">

        <!-- header (menu) -->
        <?php $this->load->view('template/header'); ?>


        <!-- add header news -->
        <?php $this->load->view('template/news_header'); ?>


        <!-- section content -->
        <div class="container-fluid">
            <?php $this->load->view($data['konten']); ?>
        </div>
        

        <!-- section footer -->
        <?php $this->load->view('template/footer'); ?>


</div>

<!-- load js -->
<?php $this->load->view('template/js'); ?>