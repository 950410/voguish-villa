<html>
<head>
    <!-- <title><?php /*echo $title */ ?> </title>-->
    <link rel="stylesheet" href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('owl_carousel/owl-carousel/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('owl_carousel/owl-carousel/owl.theme.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('owl_carousel/owl-carousel/owl.transitions.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('fancybox/jquery.fancybox.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('fancybox/helpers/jquery.fancybox-buttons.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('fancybox/helpers/jquery.fancybox-thumbs.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('css/prestyle.css') ?>">

</head>
<body style="background-color:#666666">
<div class="container">
    <div class="row" >
        <ul class="top">
            <li >
                <a class=" top_header_icon" href="<?php echo base_url('front_controller') ?>"><span>
                        <img src="<?php echo base_url('images/' . $setting['logo']) ?>" style="height:70px; border-radius: 20%"></span>
                </a>
            </li>
            <?php foreach ($header_news as $news) { ?>
                <li>
                    <a class=" btn btn-warning top_header_icon" href="<?php echo base_url('front_controller/view_news_details/'.$news['slug'])?>"><?php echo $news['title']?></a>
                </li>
            <?php } ?>
            <li  style="float: right;">
                <a class=" btn btn-warning top_header_icon" href="<?php echo base_url('front_controller/contact') ?>"> CONTACT US</a>
            </li>
        </ul>
    </div>
</div>

