<div id="container">
    <div id="wrapper1">
        <div class="container_4 fl">
            <h2 class="page-title">Know Us</h2>
        </div>
        <div class="container_1 fl">
            <div class="grid_2 alpha fl">
                <div class="nav_sidebar fl">
                    <ul>
                        <?php foreach ($content_news as $news) {
                            if ($news['type'] == 'content') {
                                if ($news['slug'] == $details['slug']) { ?>
                                    <li class="selected"><a href="#"><?php echo $details['title'] ?></a></li>
                                <?php } else { ?>
                                    <li>
                                        <a href="<?php echo base_url('fportalnews/about_us/' . $news['slug']) ?>"><?php echo $news['title'] ?></a>
                                    </li>
                                <?php }
                            }
                        } ?>
                    </ul>
                </div>
                <div class="left_spot fl">
                    <div class="item3 blue_light">
                        <h4>e-Brochure</h4>

                        <p><a href="#" class="more-btn">Click here to view our brochure</a></p>
                    </div>
                </div>
                <div class="left_spot fl">
                    <div class="item3 blue_tata">
                        <h4>Customer Support</h4>

                        <p> Call 1800 209 7979 for any assistance</p>
                        <a href="#" class="more-btn">Know more</a></div>
                </div>
            </div>
            <div class="container_5 fl">
                <div class="upper_grid fl">
                    <h1 class="title2">Company Profile</h1>

                    <div class="hr"></div>
                    <div class="grid_7">
                        <p><?php echo $details['details']?></p>

                        <div id="container-slides">
                            <div id="slides">
                                <div class="slides_container">
                                    <?php foreach($images as $image) {?>
                                    <div class="slide">
                                        <a href="<?php echo base_url('images/'. $image['images'])?>" rel="prettyPhoto[pp_gal]"
                                           title="<?php echo $image['news_id']?>"><img src="<?php echo base_url('images/'. $image['images'])?>"
                                                                          alt=""></a>
                                    </div>
                                    <?php }?>
                                </div>
                                <a href="#" class="prev"><img src="<?php echo base_url('images/arrow-prev.png')?>" width="24" height="43"
                                                              alt="Arrow Prev"></a> <a href="#" class="next"><img
                                        src="<?php echo base_url('images/arrow-next.png')?>" width="24" height="43" alt="Arrow Next"></a></div>
                            <!--end slides-->
                        </div>
                        <div class="tabs-wrapper">
                            <ul class="tabs">
                                <li><a href="#tab1">OUR BUSINESSES</a></li>
                                <li><a href="#tab2">OUR MILESTONES</a></li>
                                <li><a href="#tab3">MISSION, VISION, VALUES</a></li>
                            </ul>
                            <div class="tabs-container">
                                <div id="tab1" class="tab-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book. </p>

                                    <p>It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently with desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.</p>
                                </div>
                                <div id="tab2" class="tab-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                        dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                        consequatur?</p>
                                </div>
                                <div id="tab3" class="tab-content">
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                        veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

                                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                        adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                        dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                                        exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
                                        consequatur?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower_grid fl"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>