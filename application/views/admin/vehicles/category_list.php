<div id="page-wrapper">
    <div class="content_design">
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
        <?php } ?>

        <div class="row">
            <div class=" col-lg-12">
                <h1 class="page-header">CATEGORY LIST</h1>
            </div>
        </div>

        <div class="row" style="float:right;">
            <a href="<?php echo base_url('admin/commercial_vehicles/category_form/') ?>" class="btn btn-success">
                <i class="fa fa-plus"></i> Create
            </a>
        </div>

        <div class="row">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>No.</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
                <?php $c = 0;
                foreach ($categories as $category) { ?>
                <tr>
                    <th><?php echo ++$c; ?></th>
                    <td><?php echo (isset($category['category'])) ? $category['category'] : '' ?></td>

                    <td>
                        <a href="<?php echo base_url('admin/commercial_vehicles/category_form/' . $category['id']) ?>"
                           class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="EDIT"> <i
                                class="fa fa-pencil"></i>
                        </a>
                        <a href="<?php echo base_url('admin/commercial_vehicles/delete_category/' . $category['id']) ?>"
                           onclick="return confirm('Are you sure?')" class="btn btn-danger" data-toggle="tooltip"
                           data-placement="bottom" title="DELETE">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
        </div>
    <?php } ?>
        </table>
    </div>
</div>
</div>
