<div id="page-wrapper">
    <div class="content_design">
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
        <?php } ?>

        <div class="row">
            <div class=" col-lg-12">
                <h1 class="page-header">NETWORKS</h1>
            </div>
        </div>

        <div class="row" style="float:right;">
            <a href="<?php echo base_url('admin/vehicle_network/add_network/') ?>" class="btn btn-success">
                <i class="fa fa-plus"></i> Create
            </a>
        </div>

        <div class="row">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>No.</th>
                    <th>Networks</th>
                    <th>Actions</th>

                </tr>
                <?php $c = 0;
                foreach ($network_list as $networks) { ?>
                <tr>
                    <th><?php echo ++$c; ?></th>
                    <td><?php echo (isset($networks['network'])) ? $networks['network'] : '' ?></td>

                    <td>
                        <a href="<?php echo base_url('admin/vehicle_network/add_network/' . $networks['id']) ?>"
                           class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="EDIT"> <i
                                class="fa fa-pencil"></i>
                        </a>
                        <a href="<?php echo base_url('admin/vehicle_network/delete_network/' . $networks['id']) ?>"
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
