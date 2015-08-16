<!--<div id="page-wrapper">
    <div class="content_design">
        <?php /*if ($this->session->flashdata('message')) { */ ?>
            <div class="alert alert-success"><?php /*echo $this->session->flashdata('message'); */ ?></div>
        <?php /*} */ ?>

        <div class="row">
            <div class=" col-lg-12">
                <h1 class="page-header">PRODUCT LIST</h1>
            </div>
        </div>

        <div class="row" style="float:right;">
            <a href="<?php /*echo base_url('admin/commercial_vehicles/form/') */ ?>" class="btn btn-success">
                <i class="fa fa-plus"></i> Create
            </a>
        </div>

        <div class="row">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>No.</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Status</th>

                </tr>
                <?php /*$c = 0;
                foreach ($products as $product) { */ ?>
                <tr>
                    <th><?php /*echo ++$c; */ ?></th>
                    <td><?php /*echo (isset($product['vehicle_name'])) ? $product['vehicle_name'] : '' */ ?></td>
                    <td>
                    <?php /*foreach ($categories as $category) {
                        if ($product['category_id'] == $category['id']) {*/ ?>
                            <?php /*echo $category['category'] */ ?>
                    <?php /*} } */ ?>
                    </td>
                    <td>
                        <a href="<?php /*echo base_url('admin/commercial_vehicles/form/' . $product['id']) */ ?>"
                           class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="EDIT"> <i
                                class="fa fa-pencil"></i>
                        </a>
                        <a href="<?php /*echo base_url('admin/commercial_vehicles/delete/' . $product['id']) */ ?>"
                           onclick="return confirm('Are you sure?')" class="btn btn-danger" data-toggle="tooltip"
                           data-placement="bottom" title="DELETE">
                            <i class="fa fa-trash"></i>
                        </a>

                        <?php /*if ($product['status'] == 'PUBLISH') { */ ?>
                            <a class="product_status btn btn-primary"
                               href="<?php /*echo base_url('admin/commercial_vehicles/set_product_status/' . $product['id']) */ ?>"
                               data-toggle="tooltip" data-placement="bottom" title="UNPUBLISH" data-status="unpublish">
                                <i class="fa fa-eye-slash"></i>
                            </a>
                        <?php /*} else { */ ?>
                            <a class="product_status btn btn-primary"
                               href="<?php /*echo base_url('admin/commercial_vehicles/set_product_status/' . $product['id']) */ ?>"
                               data-toggle="tooltip" data-placement="bottom" title="PUBLISH" data-status="publish">
                                <i class="fa fa-eye"></i>
                            </a>
                        <?php /*} */ ?>

        </div>
    <?php /*} */ ?>
        </table>
    </div>
</div>
</div>
-->