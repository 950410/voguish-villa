<div class="nivo">
    <div class="slider-wrapper">
        <div id="slider" class="nivoSlider" style="height: 443px; width: 1349px; overflow: hidden;">
            <?php foreach ($banner_images as $images) { ?>
            <a href="http://dev7studios.com">
                <img src="<?php echo base_url('images/' . $images['images']) ?>" alt=""
                     title="#<?php echo($images['id']) ?>">

                <?php } ?>
        </div>
        <div class="wrap_caption">
            <?php foreach ($banner_images as $images) { ?>
                <div id="<?php echo($images['id']) ?>" class="nivo-html-caption">
                    <h3>Title</h3>

                    <p><?php echo($images['description']) ?></p>
                    <a href="#" class="more-btn">Read More</a></div>
            <?php } ?>
            <div></div>
        </div>
    </div>
</div>
<!-- Contain starts Here -->
<div id="container">
    <div id="wrapper1">
        <div class="container_1 fl">
            <div class="container_2 fl">
                <div class="upper_grid fl">
                    <?php foreach ($featured_news as $news) { ?>
                        <div class="grid_3 alpha fl">
                            <div class="item1 fl">
                                <h2 class="title1">
                                    <?php echo $news['title'] ?>
                                </h2>

                                <div class="hr"></div>
                                <?php foreach ($content_images as $images) {
                                    if ($images['news_id'] == $news['id']) { ?>
                                        <div class="block_img1 fl">
                                            <img src="<?php echo base_url('images/' . $images['images']) ?>"/>
                                        </div>
                                    <?php }
                                } ?>
                                <div class="description_block fl">
                                    <div class="article">
                                        <?php echo substr($news['details'], 0, 108);
                                        echo "...." ?>
                                    </div>
                                    <div></div>
                                    <div class="show_all">
                                        <a class="more-btn" href="<?php echo base_url('portalnews/news-details/'.$news['slug'])?>" title="Show all"> Show all </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
                <div class="lower_grid fl">
                    <div class="grid_3 alpha fl">
                        <div class="item3 blue_light">
                            <h4>e-Brochure</h4>

                            <p><a href="<?php echo base_url('portalnews/product_services')?>" class="more-btn">Click here to view our brochure</a></p>
                        </div>
                    </div>
                    <div class="grid_3 alpha omega fl">
                        <div class="item3 blue_tata">
                            <h4>Customer Support</h4>

                            <p> Call 1800 209 7979 for any assistance</p>
                            <a href="#" class="more-btn">Know more</a></div>
                    </div>
                </div>
            </div>
            <div class="grid_4 omega fl">
                <div class="item2 fl">
                    <div class="upper_spot fl">
                        <h2 class="title2">What's New</h2>
                        <?php $i=0;?>
                        <div class="hr"></div>
                        <ul class="blog">
                            <?php foreach ($content_news as $new) {
                                if ($new['type'] == "news" && $i<2) { ?>
                                    <li class="post">
                                        <ul class="date_box">
                                            <li class="date">
                                                <div class="value"><?php echo date("M d",$new['time'])?></div>
                                                <div class="arrow_date"></div>
                                            </li>
                                        </ul>
                                        <div class="post_content">
                                            <h4><a href="<?php echo base_url('portalnews/news-details/'.$new['slug'])?>"> <?php echo($new['heading'])?>
                                                </a></h4>
                                        </div>
                                    </li>
                                <?php $i++; }
                            } ?>
                            </li>
                        </ul>
                        <div class=" show_all"><a class="more-btn" href="<?php echo base_url('portalnews/all-news/')?>" title="Show all"> Show all </a></div>
                    </div>
                    <div class="lower_spot fl">
                        <h2 class="title2">Our Map</h2>

                        <div class="hr"></div>
                        <a href="https://www.google.com.np/maps?source=tldsi&hl=en" class="block_img2 fl"> <span class="item-on-hover"><span
                                    class="hover-link"></span></span> <img src="<?php echo base_url('images/map.jpg')?>"
                                                                           alt="Nepal Network" style="height:110px;width:315px"/> </a></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>


<!-- <h2><b>PORTAL NEWS.COM</b></h2>
    <div class="row banner" style="padding:30px;">

        <div id="owl-demo" class="owl-carousel" style="width:100%; margin:0 auto;">
            <?php /*foreach ($banner_images as $images) { */ ?>
                <div class="item">
                    <img src="<?php /*echo base_url('images/' . $images['images']) */ ?>">
                </div>
            <?php /*} */ ?>
        </div>
    </div>

    <div class="row">
        <h2><b>Featured News<b></h2>
        <div id="owl-demo-news" class="owl-carousel" style="width:100%; margin:0 auto;">
            <?php /*foreach ($featured_images as $images) { */ ?>
                <div class="item" style="padding: 20px">
                    <a href="<?php /*echo base_url('front_controller/view_news_details/'.$images['slug']) */ ?>"><img src="<?php /*echo base_url('images/' . $images['images']) */ ?>"
                         alt="<?php /*echo $images['title'] */ ?>">
                    <h3><b><?php /*echo $images['title'] */ ?></b></h3></a>
                </div>
            <?php /*} */ ?>
        </div>
    </div>

    <div class="row map">
        <iframe src="<?php /*echo $setting['map']*/ ?>" width="1130" height="445" frameborder="0" style="border:0; padding:20px;"></iframe>
    </div>
</div>-->