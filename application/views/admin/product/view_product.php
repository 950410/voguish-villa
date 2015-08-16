<div class="wrapper">
    <div class="col-lg-9" style="margin:70px 220px;">
        <div class="col-lg-12" style="padding:20px;">
            <a href="<?php echo base_url('admin/product/add_product_form') ?>" class="btn btn-success"> + Create
            </a>
        </div>
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>S. No.</th>
                <th>Product</th>
                <th>Actions</th>
            </tr>

            <?php $i = 0; ?>
            <?php foreach ($product as $data) { ?>
                <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><a class="btn btn-warning" href="#" data-toggle="tooltip" data-placement="bottom"
                           title="Edit"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                        <a href="<?php echo base_url('admin/product/delete_product/' . $data['id']) ?>"
                           class="btn btn-danger delete_product" href="#" data-toggle="tooltip" data-placement="bottom"
                           title="Delete"><span class="fa fa-trash" aria-hidden="true"></span></a></td>

                </tr>
            <?php } ?>
        </table>

    </div>
</div>



