<div id="page-wrapper">
    <div class="content_design">
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-info"><?php echo $this->session->flashdata('message'); ?></div>
        <?php } ?>

        <div class="row">
            <div class=" col-lg-12">
                <h1 class="page-header">Setting</h1>
            </div>
        </div>
        <div class="container">
            <div class=" col-lg-9">
                <?php echo form_open_multipart('admin/setting_manager/update_setting') ?>

                <input type="hidden" value="<?php echo $data['id']; ?>" name="id"/>

                <div class="form-group">
                    <span><b>LOGO:</b></span>
                    <br>
                <span><img src="<?php echo base_url('images/' . $data['logo']) ?>"
                           style="height: 80px;"> <br> <b> To change:</b><hr>
                 <input type="file" name="userfile"/>
                    <input type="hidden" value="<?php echo $data['logo']; ?>" name="same_logo"/>
                </div>

                <div class="form-group">
                    <span>Phone No.:</span>
                    <input class="form-control" type="text" value="<?php echo $data['phone_no']; ?>" name="phone_no"/>
                </div>

                <div class="form-group">
                    <span>Fax.:</span>
                    <input class="form-control" type="text" value="<?php echo $data['fax']; ?>" name="fax"/>
                </div>

                <div class="form-group">
                    <span>Address:</span>
                    <input class="form-control" type="text" value="<?php echo $data['address']; ?>"
                           name="address"/>
                </div>

                <div class="form-group">
                    <span>Facebook:</span>
                    <input class="form-control" type="text" value="<?php echo $data['facebook']; ?>" name="facebook"/>
                </div>

                <div class="form-group">
                    <span>Twitter:</span>
                    <input class="form-control" type="text" value="<?php echo $data['twitter']; ?>" name="twitter"/>
                </div>

                <div class="form-group">
                    <span>Email:</span>
                    <input class="form-control" type="text" value="<?php echo $data['email']; ?>"
                           name="email"/>
                </div>
                <div class="form-group">
                    <span>Map:</span>
                    <input class="form-control" type="text" value="<?php echo $data['map']; ?>" name="map"/>
                </div>

                <div class="form-group">
                    <span>Longitute:</span>
                    <input class="form-control" type="text" value="<?php echo $data['longitute']; ?>" name="longitute"/>
                </div>

                <div class="form-group">
                    <span>Latitute:</span>
                    <input class="form-control" type="text" value="<?php echo $data['latitude']; ?>" name="latitude"/>
                </div>

                <button class="btn btn-success">CHANGE</button>
                </form>
            </div>
        </div>
    </div>
</div>