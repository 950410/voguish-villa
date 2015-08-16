<div id="page-wrapper">
    <div class="content_design">
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-info"><?php echo $this->session->flashdata('message'); ?></div>
        <?php } ?>

        <div class="row">
            <div class=" col-lg-12">
                    <h1 class="page-header">Gallery</h1>

            </div>
        </div>

        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Image</th>
                <th>Action</th>

            </tr>
            <?php $c = 1 ?>
            <?php foreach ($images as $image) { ?>
                <tr>
                    <td><?php echo $c++ ?></td>
                    <td>
                        <a class="fancybox-thumb" rel="fancybox-thumb"
                           href="<?php echo base_url('images/' . $image['images']) ?>">
                            <img src="<?php echo base_url('images/' . $image['images']) ?>"
                                 style="height: 80px;"></a>

                    </td>
                    <td>

                        <a href="<?php echo base_url('admin/image_manager/delete_image/' . $image['images']) ?>"
                           onclick="return confirm('Are you sure?')" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="DELETE"> <i class="fa fa-trash"></i></a>
                        <?php if ($image['banner'] == 1) { ?>
                            <a href="<?php echo base_url('admin/image_manager/update_banner_image/' .  $image['id']) ?>"
                                   class="btn btn-info banner " data-toggle="tooltip" data-placement="bottom" title="Remove Banner"> <i class="fa fa-minus"></i></a></td>
                        <?php } else { ?>
                             <a href="<?php echo base_url('admin/image_manager/update_banner_image/' .  $image['id']) ?>"
                                    class="btn btn-info banner" data-toggle="tooltip" data-placement="bottom" title="Add Banner"> <i class="fa fa-plus"></i></a>
                        <?php } ?>
                    <?php } ?>

                    </td>
                </tr>
        </table>
        <?php if (isset($banner)) { ?>

            <a href="<?php echo base_url('admin/image_manager/add_image') ?>" class="btn btn-success">ADD IMAGES</a>
        <?php } else { ?>
            <a href="<?php echo base_url('admin/image_manager/add_banner') ?>" class="btn btn-success">ADD BANNER</a>
        <?php } ?>

    </div>
</div>