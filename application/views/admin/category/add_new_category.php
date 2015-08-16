<<<<<<< HEAD
<div class="wrapper" xmlns="http://www.w3.org/1999/html">
    <div class="view" style="margin:70px 220px;">
        <?php echo form_open('admin/category_manager/add_category') ?>
        <p>

        <h3><strong></strong><span style="color: #383a1e">Enter the name:</strong></span></h3></p>
        <div class="form-group" style="display: inline-block">
            <input type="text" class="form-control" placeholder="Enter the name here..." name="category_name"
                   value="<?php echo (isset($category_details['name'])) ? $category_details['name'] : '' ?>"
                   style="width:600px; height:50px ">
            <input type="hidden" name="id"
                   value="<?php echo (isset($category_details['id'])) ? $category_details['id'] : '' ?>">
        </div>
        <div class="form-group">
            <select name="cat_id" class="form-control">
                <option value="root">Root Category</option>
                <?php foreach ($category as $data) { ?>
                    <option value="<?php echo $data['id']; ?>"><?php echo $data['name']; ?> </option>
                <?php } ?>
            </select>
        </div>
        <div class="btn-group btn-group-lg">
            <button class="btn btn-success ">Add</button>
            <br><br><br><br>

            <p style="..." id="demo"></p></a>
        </div>

        <?php echo form_close(); ?>
    </div>
=======
<link rel="stylesheet" type="text/css" href="<?php echo base_url('views/admin/category/divblock.css')?>">
<div class="wrapper" xmlns="http://www.w3.org/1999/html">
<div class="view" style="margin:70px 220px;">
    <?php echo form_open('admin/category/add_category')?>
        <p><h3><strong></strong><span style="color: #383a1e">Enter the name:</strong></span></h3></p>
            <div class="input-group" style="display: inline-block">
                <input type="text" class="form-control" placeholder="Enter the name here..."  name="category_name"  style= "width:600px; height:50px ">

                <select name="cat_id">
                    <option value="root">Rootcategory</option>
                    <?php foreach($category as $data) {?>
                    <option value="<?php echo $data['id'];?>"><?php echo $data['name'];?> </option>
                    <?php }?>
                </select>
                <div class="btn-group btn-group-lg" >
                        <button class="btn btn-success ">Add</button>
                    <br><br><br><br><p style="..." id="demo"></p></a>
                    </div>
            </div>
    <?php echo form_close(); ?>
</div>
>>>>>>> 9ebaefdfdb773a78adeb9ba76606342bf3f9b908
</div>
<!--<script>
    function add() {
        document.getElementById("demo").innerHTML = "The category has been added.";
    }
</script>-->

