<div class="container body" style="padding: 20px">
    <h2> <?php echo $details['title'] ?></h2>
    <hr>
    <div id="owl-demo-news" class="owl-carousel" style="width:100%; margin:0 auto;">
        <?php foreach ($images as $image) { ?>
            <div class="item" style="padding: 20px" >
                <a class="fancybox-thumb" rel="fancybox-thumb" href="<?php echo base_url('images/' . $image['images']) ?>">
                    <img src="<?php echo base_url('images/' . $image['images']) ?>" style="height: 55%;">
                </a>

            </div>
        <?php } ?>
    </div>
    <div class="text-justify" >
        <?php echo $details['details']?>
    </div>
</div>