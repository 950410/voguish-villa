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

                            <?php echo form_open_multipart('admin/vehicle_network/update_branches_form') ?>

                            <div class="col-lg-12">

                                <input type="hidden" value="<?php echo $branches['id'] ?>" name="id">

                                <div class="form-group" style="width:845px;">
                                    <span><b>Branch Location:</b></span>
                                    <input class="form-control" type="text" value="<?php echo $branches['location'] ?>"
                                           name="location">
                                </div>

                                <div class="form-group" style="width:845px;">
                                    <span><b>Longitute:</b></span>
                                    <input class="form-control" type="text" value="<?php echo $branches['longitude'] ?>"
                                           name="longitude">
                                </div>

                                <div class="form-group" style="width:845px;">
                                    <span><b> Latitude:</b></span>
                                    <input class="form-control" type="text" value="<?php echo $branches['latitude'] ?>"
                                           name="latitude">
                                </div>

                                <div class="form-group" style="width:845px;">
                                    <div class="col-lg-12">
                                        <span><b>Networks:</b></span><br>
                                        <?php
                                        foreach ($networks as $network) {
                                        if (isset($address)) {
                                        foreach ($address as $id => $value) {
                                            $network_id[] = $value['network_id'];
                                            $add[$value['network_id']] = $value['address'];

                                        }
                                        if (in_array($network['id'], $network_id)) {?>

                                            <div class="col-lg-6">
                                                <input class="check_address_select" type="checkbox"
                                                       value="<?php echo $network['id'] ?>"
                                                       name="network[]" checked="checked">
                                                <?php echo $network['network'] ?>
                                                <br><br>

                                                <div class="address_<?= $network['id'] ?>">
                                                    <span><b> Address: </b></span>
                                                <textarea id="address_text_<?= $network['id'] ?>"
                                                          name="address[]"><?php echo isset($add[$network['id']]) ? $add[$network['id']] : '' ?></textarea>
                                                </div>
                                            </div>

                                            <script>
                                                CKEDITOR.replace('address_text_<?= $network['id'] ?>');
                                            </script>

                                        <?php } else { ?>

                                            <div class="col-lg-6">
                                                <input class="check_address_select" type="checkbox"
                                                       value="<?php echo $network['id'] ?>"
                                                       name="network[]"><?php echo $network['network'] ?>
                                                <br><br>

                                                <div class="address_<?= $network['id'] ?>">
                                                    <span><b> Address: </b></span>
                                                <textarea id="address_text_<?= $network['id'] ?>"
                                                          name="address[]"></textarea>

                                                </div>
                                            </div>

                                            <script>
                                                CKEDITOR.replace('address_text_<?=$network['id'] ?>');

                                            </script>
                                        <?php } } else { ?>
                                        <div class="col-lg-6">
                                                <input class="check_address_select" type="checkbox"
                                                       value="<?php echo $network['id'] ?>"
                                                       name="network[]"><?php echo $network['network'] ?>
                                        <br><br>

                                        <div class="address_<?= $network['id'] ?>">
                                            <span><b> Address: </b></span>
                                                <textarea id="address_text_<?= $network['id'] ?>"
                                                          name="address[]"></textarea>

                                        </div>
                                    </div>

                                    <script>
                                        CKEDITOR.replace('address_text_<?=$network['id'] ?>');

                                    </script>
                                       <?php } } ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12" style="padding:20px;">

                                <button class="btn btn-success"> ADD</button>
                            </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


