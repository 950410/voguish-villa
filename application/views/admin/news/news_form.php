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

                        <?php echo form_open_multipart('admin/news_manager/update_form') ?>

                        <input type="hidden" value="<?php echo (isset($news_item['id'])) ? $news_item['id'] : '' ?>"
                               name="id">

                        <div class="form-group" style="width:845px;">
                            <span><b>Title:</b></span>
                            <input class="form-control" type="text"
                                   value="<?php echo (isset($value)) ? set_value('title') : $news_item['title'] ?>"
                                   name="title">

                            <div class="error"><?php echo form_error('title'); ?></div>
                        </div>

                        <div class="form-group" style="width:845px;">
                            <span><b>Heading:</b></span>
                            <input class="form-control" type="text"
                                   value="<?php echo (isset($value)) ? set_value('heading') : $news_item['heading'] ?>"
                                   name="heading">

                            <div class="error"><?php echo form_error('heading'); ?></div>
                        </div>

                        <div class="form-group " style="width:845px;">
                            <span><b>Image:</b></span><br>
                            <?php if (isset($image_item)) { ?>
                                <div class="col-lg-12">
                                    <?php foreach ($image_item as $image) {
                                        if ($news_item['id'] == $image['news_id']) { ?>
                                            <div class="col-lg-3 " style="margin: 25px 0;">
                                                <a class="fancybox-thumb" rel="fancybox-thumb"
                                                   href="<?php echo base_url('images/' . $image['images']) ?>"><img
                                                        src="<?php echo base_url('images/' . $image['images']) ?>"
                                                        style="height: 100px;"></a>
                                                <hr>
                                                <a href="<?php echo base_url('admin/news_manager/delete_image/' . $image['images']) ?>"
                                                   class="btn btn-danger delete">
                                                    DELETE </a>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            <?php } ?>

                            <input type="file" name="files[]" multiple>

                        </div>

                            <span><b>Details:</b></span>
                                <textarea id="news_text" class="form-control " style="width: 845px; height: 200px;"
                                          name="details"><?php echo (isset($value)) ? set_value('details') : $news_item['details'] ?></textarea>

                            <div class="error"><?php echo form_error('details'); ?></div>

                        <?php if ($news_item['id'] == '') { ?>

                            <br><span> Type: </span>
                            <select name="type">
                                <option value="news"><?php echo $news_item['type']?></option>
                                <option value="content"> content </option>

                            </select>
                        <?php } else{ ?>
                            <input type="hidden" value="<?php echo (isset($news_item['type'])) ? $news_item['type'] : '' ?>"
                                   name="type">
                        <?php }?>
                        <br><br>
                        <button class="btn btn-success"> ADD</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
