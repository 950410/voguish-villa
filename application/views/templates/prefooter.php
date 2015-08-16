<script src="<?php echo base_url('jquery/jquery-2.1.3.min.js') ?>"></script>
<script src="<?php echo base_url('bootstrap/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('owl_carousel/owl-carousel/owl.carousel.min.js') ?>"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>

<script type="text/javascript" src="<?php echo base_url('fancybox/jquery.fancybox.pack.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('fancybox/helpers/jquery.fancybox-buttons.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('fancybox/helpers/jquery.fancybox-media.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('fancybox/helpers/jquery.fancybox-thumbs.js')?>"></script>

<script src="<?php echo base_url('jquery/owl_carousel.js') ?>"></script>
<script>
    var baseurl = "<?php print base_url(); ?>";
</script>

<script src="<?php echo base_url('jquery/js.js') ?>"></script>
<script src="<?php echo base_url('jquery/fancybox.js') ?>"></script>
<script src="<?php echo base_url('bootstrap/js/bootstrap.min.js') ?>"></script>

<div class="container" style=" border-top: 1px solid #e7e7e7;">
    <div class="row ">
        <div class="col-lg-6">
            <ul class="top">
                <?php foreach ($footer_news as $news) { ?>
                    <li>
                        <a class=" btn btn-warning top_header_icon" href="<?php echo base_url('front_controller/view_news_details/'.$news['slug']) ?>">
                            <?php echo $news['title'] ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <div class="col-lg-2 social ">
            <h3>Social Media</h3>
            <ul style="list-style: disc;color:#EEA236 ">
                <li><a href="<?php echo $setting['facebook'] ?>"> Facebook </a></li>
                <li><a href="<?php echo $setting['twitter'] ?>"> Twitter </a></li>
            </ul>
        </div>

        <form>
        <div class="col-lg-4 input-group" style="padding: 15px;">
            <input id="subs" class="form-control " type="text" name="subscribers" placeholder="Email"/>
                <span class="input-group-btn">
                    <button class="btn btn-warning subscriber">Subscribe</button>
                </span>
        </div>
        </form>


    </div>
</div>
</body>
</html>