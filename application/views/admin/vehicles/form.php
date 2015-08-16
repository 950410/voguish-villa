<div id="page-wrapper">
    <div class="content_design">
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-info"> <?php echo($this->session->flashdata('message')) ?> </div>
        <?php } ?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Add</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><b>Create </b></div>
                    <div class="panel-body">
                        <div class="row">

                            <?php echo form_open_multipart('admin/commercial_vehicles/update_form') ?>

                            <input type="hidden"
                                   value="<?php echo (isset($product_items['id'])) ? $product_items['id'] : '' ?>"
                                   name="id">

                            <div class="form-group" style="width:845px;">
                                <span><b>Product Name:</b></span>
                                <input class="form-control" type="text"
                                       value="<?php echo (isset($value)) ? set_value('vehicle_name') : $product_items['vehicle_name'] ?>"
                                       name="vehicle_name">

                                <div class="error"><?php echo form_error('vehicle_name'); ?></div>
                            </div>

                            <div class="form-group" style="width:845px;">
                                <span><b>Category:</b></span>

                                <select name="category">
                                    <?php foreach ($categories as $category) { ?>
                                        <option
                                            value="<?php echo $category['id'] ?>"><?php echo $category['category'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="form-group " style="width:845px;">
                                <span><b>Product Image:</b></span><br>

                                <div class="col-lg-12">
                                    <div class="col-lg-3 " style="margin: 25px 0;">
                                        <a class="fancybox-thumb" rel="fancybox-thumb"
                                           href="<?php echo base_url('images/tatamotors/' . $product_items['images']) ?>"><img
                                                src="<?php echo base_url('images/tatamotors/' . $product_items['images']) ?>"
                                                style="height: 100px;"></a>
                                        <hr>
                                        <a href="<?php echo base_url('admin/commercial_vehicles/delete_product_image/' . $product_items['images']) ?>"
                                           class="btn btn-danger del_product_image">
                                            DELETE </a>
                                    </div>
                                </div>

                                <input type="file" name="files[]" multiple>
                                <input type="hidden" name="image" value="<?php $product_items['images'] ?>">

                            </div>

                            <div class="form-group" style="width:845px;">
                                <span><b>Status:</b></span>
                                <select name="status">
                                    <option value="publish">PUBLISH</option>
                                    <option value="unpublish">UNPUBLISH</option>
                                </select>
                            </div>


                            <button class="btn btn-success"> ADD</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
