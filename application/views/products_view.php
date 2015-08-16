<div class="wrapper">
    <div class="col-lg-9" style="margin:70px 220px;">
        <div class="col-lg-12" style="padding:20px;">

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">

<div id="products_e">

    <h2 id="head">Products</h2>
    <?php

    // "$products" send from "shopping" controller,its stores all product which available in database.
    foreach ($products as $product) {
        $id = $product['id'];
        $name = $product['name'];
        $description = $product['description'];
        $price = $product['price'];
        ?>

        <div id='product_div'>
            <div id='image_div'>
                <!-- <img src="<?php /*echo base_url() . $product['picture'] */?>"/>-->
            </div>
            <div id='info_product'>
                <div id='name'><?php echo $name; ?></div>
                <div id='desc'>  <?php echo $description; ?></div>
                <div id='rs'><b>Price</b>:<big style="color:green">
                        NRs.<?php echo $price; ?></big></div>
                <?php

                // Create form and send values in 'shopping/add' function.
                echo form_open('shopping/add');
                echo form_hidden('id', $id);
                echo form_hidden('name', $name);
                echo form_hidden('price', $price);
                ?> </div>
            <div id='add_button'>
                <?php
                $btn = array(
                    'class' => 'fg-button teal',
                    'value' => 'Add to Cart',
                    'name' => 'action'
                );

                // Submit Button.
                echo form_submit($btn);
                echo form_close();
                ?>
            </div>
        </div>

    <?php } ?>

</div>