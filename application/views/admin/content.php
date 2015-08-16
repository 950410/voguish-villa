<div id="page-wrapper">
    <div class="content_design">
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
        <?php } ?>

        <div class="row">
            <div class=" col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
        </div>

        <div class="row">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>No.</th>
                    <th>Title</th>
                    <th>Actions</th>

                </tr>
                <?php $c = 0;
                foreach ($content as $contents) { ?>
                    <tr>
                        <th><?php echo ++$c; ?></th>
                        <td><?php echo (isset($contents['title'])) ? $contents['title'] : '' ?></td>

                        <td style="width:350px;">

                            <a href="<?php echo base_url('admin/news_manager/add_form/' . $contents['id']) ?>"
                               class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="EDIT"> <i
                                    class="fa fa-pencil"></i>
                            </a>
                            <a href="<?php echo base_url('admin/news_manager/delete_news/' . $contents['id']) ?>"
                               class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="DELETE"> <i
                                    class="fa fa-trash"></i>
                            </a>

                            <?php if ($contents['publish'] == 'on') { ?>
                                <a class="publish_news btn btn-primary"
                                   href="<?php echo base_url('admin/news_manager/set_publish/' . $contents['id']) ?>"
                                   data-toggle="tooltip" data-placement="bottom" title="UNPUBLISH" data-status="unpublish">
                                    <i class="fa fa-eye-slash"></i>
                                </a>
                            <?php } else { ?>
                                <a class="publish_news btn btn-primary"
                                   href="<?php echo base_url('admin/news_manager/set_publish/' . $contents['id']) ?>"
                                   data-toggle="tooltip" data-placement="bottom" title="PUBLISH" data-status="publish">
                                    <i class="fa fa-eye"></i>
                                </a>

                                <div class="action row">
                                    <?php if ($contents['featured_news'] == 'on') { ?>
                                        <a class=" btn btn-primary flag"
                                           href="<?php echo base_url('admin/news_manager/set_flag/' . $contents['id']."/featured_news") ?>"
                                           data-toggle="tooltip" data-placement="bottom" title="UNSET NEWS">
                                            <i class="fa fa-newspaper-o"></i><i class="fa fa-times"></i>
                                        </a>
                                    <?php } else { ?>
                                        <a class=" btn btn-primary flag"
                                           href="<?php echo base_url('admin/news_manager/set_flag/' . $contents['id']."/featured_news") ?>"
                                           data-toggle="tooltip" data-placement="bottom" title="SET NEWS">
                                            <i class="fa fa-newspaper-o"></i><i class="fa fa-check"></i>
                                        </a>
                                    <?php }
                                    if ($contents['header'] == 'on') { ?>
                                        <a class=" btn btn-primary flag "
                                           href="<?php echo base_url('admin/news_manager/set_flag/' . $contents['id']."/header") ?>"
                                           data-toggle="tooltip" data-placement="bottom" title="UNSET HEADER">
                                            <i class="fa fa-header"></i><i class="fa fa-times"></i>
                                        </a>
                                    <?php } else { ?>
                                        <a class=" btn btn-primary flag"
                                           href="<?php echo base_url('admin/news_manager/set_flag/' . $contents['id']."/header") ?>"
                                           data-toggle="tooltip" data-placement="bottom" title="SET HEADER">
                                            <i class="fa fa-header"></i><i class="fa fa-check"></i>
                                        </a>
                                    <?php }
                                    if ($contents['publish'] == 'off') { ?>
                                        <a class=" btn btn-primary flag"
                                           href="<?php echo base_url('admin/news_manager/set_flag/' . $contents['id']."/publish") ?>"
                                           data-toggle="tooltip" data-placement="bottom" title="only publish">
                                           <i class="fa fa-check"></i>
                                        </a>
                                    <?php } ?>

                                </div>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</div>
