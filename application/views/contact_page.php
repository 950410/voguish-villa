<div id="container">
    <div id="wrapper1">
        <div class="container_4 fl">
            <h2 class="page-title">Get in touch with us</h2>
        </div>
        <div class="container_1 fl">
            <div class="grid_1 alpha omega fl">
                <div class="contact-map">

                    <div  style="width:960px; height:300px">
                        <div id="map_canvas" style="width:100%; height:300px"></div>
                    </div>
                    <script>//initialize();</script>

                </div>
            </div>
            <div class="grid_2 alpha fl">

                <div class="left_spot fl">
                    <div class="side_contact fl">
                        <h6>Our Office:</h6>

                        <p> <?php echo $setting['address']?>
                        </p>

                        <div class="contact-info">
                            <h6>Contact Info:</h6>

                            <p><span>Phone:</span> <?php echo $setting['phone_no']?></p>

                            <p><span>Fax:</span> <?php echo $setting['fax']?></p>

                            <p><span>Email:</span> <a
                                    href="mailto:<?php echo $setting['email'] ?>"><?php echo $setting['email'] ?></a>
                            </p>

                        </div>
                    </div>
                </div>

            </div>
            <div class="container_5 fl">
                <div class="upper_grid fl">

                    <h6>Please fill in the form to get in touch with us:</h6>

                    <div id="contactform">
                        <div id="message"></div>
                        <form method="post" action="<?php echo base_url('portalnews/send_email') ?>" name="cform"
                              id="cform">
                            <fieldset class="form_grid_1">
                                <label>Name <span>*</span></label>
                                <input id="name" type="text" name="name"/>
                            </fieldset>
                            <fieldset class="form_grid_1">
                                <label>Email <span>*</span></label>
                                <input type="text" name="email" id="email"/>
                            </fieldset>
                            <fieldset class="form_grid_1 omega">
                                <label>Subject <span>*</span></label>
                                <input type="text" name="subject" id="subject"/>
                            </fieldset>
                            <fieldset class="form_grid_2">
                                <label>Your Message <span>*</span></label>
                                <textarea name="comments" id="comments"></textarea>
                            </fieldset>
                            <fieldset class="form_grid_2">
                                <input type="submit" name="send" value="Send Message" id="submit" class="button"/>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="lower_grid fl"> </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>