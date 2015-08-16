<div class="wrapper">
    <div class="col-lg-9" style="margin:70px 220px;">
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
            <?php foreach($category as $data){?>
            <tr>
                <td><?php echo ++$i; ?></td>
                <td><?php echo $data['name'];
                    print_r($sub_category);die;
                    foreach($sub_category as $key=>$item)
                    {
                        if ($data['id'] == $key){
                            $check="yes";
                        }
                    }
                    if ($check=="yes"){?>
                        <button class="btn btn-success sub_category" style="float:right">View Sub- categories</button>
                    <?php }?>
                <div class="sub_category" style="display:none">
                    <ul>
                        <?php
                             foreach($sub_category as $items){
                                  if ($data['id'] == $items['category_id']){?>
                                        <li> <?php echo $items['subcategory_name']?></li>
                                        <a class="btn btn-warning" href="#" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit"><span class="fa fa-edit" aria-hidden="true"></span></a>
                                        <a href="<?php echo base_url('admin/category/delete_category/'.$items['id']) ?>" class="btn btn-danger delete_category" href="#" data-toggle="tooltip" data-placement="bottom" title="Delete" ><span class="fa fa-trash" aria-hidden="true"></span></a>
                                   <?php }?>
                            <?php
                            }
                          ?>
                    </ul>
                </div>

                </td>
                <td><a class="btn btn-warning" href="#" data-toggle="tooltip" data-placement="bottom" title="Edit"><span class="fa fa-pencil" aria-hidden="true"></span></a>
                     <a href="<?php echo base_url('admin/category/delete_category/'.$data['id']) ?>" class="btn btn-danger delete_category" href="#" data-toggle="tooltip" data-placement="bottom" title="Delete" ><span class="fa fa-trash" aria-hidden="true"></span></a></td>
            </tr>
            <?php }?>
        </table>
    </div>
</div>


