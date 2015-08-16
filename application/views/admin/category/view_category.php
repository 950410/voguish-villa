<div class="wrapper">
    <div class="col-lg-9" style="margin:70px 220px;">
<<<<<<< HEAD
        <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('message'); ?></div>
        <?php } ?>
=======
>>>>>>> 9ebaefdfdb773a78adeb9ba76606342bf3f9b908
        <div class="col-lg-12" style="padding:20px;">
            <a href="<?php echo base_url('admin/category/add_category_form') ?>" class="btn btn-success"> + Create
            </a>
        </div>
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>S. No.</th>
                <th>Category</th>
                <th>Actions</th>

            </tr>
            <?php $i=0; $check="no";?>
<<<<<<< HEAD
            <?php foreach($category as $data){
                if($data['parent_id'] == 0){
                     $check="no";?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $data['name'];
                    foreach($category as $item)
                    {
                        if ($data['id'] == $item['parent_id']){
=======
            <?php foreach($category as $data){?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $data['name'];
                    print_r($sub_category);die;
                    foreach($sub_category as $key=>$item)
                    {
                        if ($data['id'] == $key){
>>>>>>> 9ebaefdfdb773a78adeb9ba76606342bf3f9b908
                            $check="yes";
                        }
                    }
                    if ($check=="yes"){?>
<<<<<<< HEAD
                        <button class="btn btn-success sub_category" style="float:right">View Sub-categories</button>
=======
                        <button class="btn btn-success sub_category" style="float:right">View Sub- categories</button>
>>>>>>> 9ebaefdfdb773a78adeb9ba76606342bf3f9b908
                    <?php }?>
                <div class="sub_category" style="display:none">
                    <ul>
                        <?php
<<<<<<< HEAD
                             foreach($category as $items){
                                  if ($data['id'] == $items['parent_id']){?>
                                        <li> <?php echo $items['name']?></li>
                                        <a class="btn btn-warning" href="<?php echo base_url('admin/category_manager/edit_category/'.$items['id']) ?>" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"><span class="fa fa-edit" aria-hidden="true"></span></a>
                                        <a href="<?php echo base_url('admin/category_manager/delete_category/'.$items['id']) ?>" class="btn btn-danger delete_category" data-toggle="tooltip" data-placement="bottom" title="Delete" ><span class="fa fa-trash" aria-hidden="true"></span></a>
=======
                             foreach($sub_category as $items){
                                  if ($data['id'] == $items['category_id']){?>
                                        <li> <?php echo $items['subcategory_name']?></li>
                                        <a class="btn btn-warning" href="#" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"><span class="fa fa-edit" aria-hidden="true"></span></a>
                                        <a href="<?php echo base_url('admin/category/delete_category/'.$items['id']) ?>" class="btn btn-danger delete_category" href="#" data-toggle="tooltip" data-placement="bottom" title="Delete" ><span class="fa fa-trash" aria-hidden="true"></span></a>
>>>>>>> 9ebaefdfdb773a78adeb9ba76606342bf3f9b908
                                   <?php }?>
                            <?php
                            }
                          ?>
                    </ul>
                </div>

                </td>
<<<<<<< HEAD
                <td><a class="btn btn-warning" href="<?php echo base_url('admin/category_manager/edit_category/'.$data['id']) ?>" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                     <a href="<?php echo base_url('admin/category/delete_category/'.$data['id']) ?>" class="btn btn-danger delete_category" data-toggle="tooltip" data-placement="bottom" title="Delete" ><span class="fa fa-trash" aria-hidden="true"></span></a></td>
            </tr>
            <?php } } ?>
=======
                <td><a class="btn btn-warning" href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                     <a href="<?php echo base_url('admin/category/delete_category/'.$data['id']) ?>" class="btn btn-danger delete_category" href="#" data-toggle="tooltip" data-placement="bottom" title="Delete" ><span class="fa fa-trash" aria-hidden="true"></span></a></td>
            </tr>
            <?php }?>
>>>>>>> 9ebaefdfdb773a78adeb9ba76606342bf3f9b908
        </table>
    </div>
</div>


