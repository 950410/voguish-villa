<div id="page-wrapper">
    <div class="content_design">
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
        <?php } ?>

        <div class="row">
            <div class=" col-lg-12">
                <h1 class="page-header">BRANCHES</h1>
            </div>
        </div>

        <div class="row" style="float:right;">
            <a href="<?php echo base_url('admin/vehicle_network/add_branches/') ?>" class="btn btn-success">
                <i class="fa fa-plus"></i> Create
            </a>
        </div>

        <div class="row">
            <table class="table table-bordered table-hover">
                <?php $c=1;?>
                <tr>
                    <th>No.</th>
                    <th>Location</th>
                    <th>Networks</th>
                    <th>Address</th>
                    <th>Actions</th>

                </tr>
                <?php foreach ($branches_list as $branches)
                {
                foreach ($address_list as $add=>$value) {
                    if ($value['location_id'] == $branches['id']) {
                        $address_id[] = $value['network_id'];
                        $address[$value['network_id']] = $value['address'];
                    }
                } ?>
                <tr>
                    <th><?php echo ++$c; ?></th>
                    <td><?php echo (isset($branches['location'])) ? $branches['location'] : '' ?></td>

                    <td>
                        <ul>
                            <?php foreach ($network_list as $networks) {
                                if (in_array($networks['id'], $address_id)) { ?>
                                    <li><?php echo (isset($networks['network'])) ? $networks['network'] : '' ?></li>
                                <?php }
                            } ?>
                        </ul>
                    </td>

                    <td>
                        <ul>
                            <?php foreach ($network_list as $networks) {
                                if (in_array($networks['id'], $address_id)) { ?>
                                    <li><?php echo (isset($address[$networks['id']])) ? $address[$networks['id']] : '' ?></li>

                                <?php }

                            } ?>
                        </ul>
                    </td>

                    <td>
                        <a href="<?php echo base_url('admin/vehicle_network/add_branches/' . $branches['id']) ?>"
                           class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="EDIT"> <i
                                class="fa fa-pencil"></i>
                        </a>
                        <a href="<?php echo base_url('admin/vehicle_network/delete_branches/' . $branches['id']) ?>"
                           onclick="return confirm('Are you sure?')" class="btn btn-danger" data-toggle="tooltip"
                           data-placement="bottom" title="DELETE">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>


        </div>
    <?php unset($address_id);
    } ?>
        </table>
    </div>
</div>
</div>
