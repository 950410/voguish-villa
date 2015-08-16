
<h2><?php echo $item->name . '&ndash; NRs.' . $item->price; ?></h2>

<p><?php echo nl2br( $item->description ); ?></p>

<?php $segments = array( 'purchase', url_title( $item->name, 'dash', true ), $item->id ); ?><!--purchase/jeans/3 -->

<p class="purchase"><?php echo anchor( $segments, 'Pay via paypal' ); ?></p>
<a href="<?php echo base_url('user/shopping/buy_now/'.$item->id) ?>"><button class="btn btn-success ">Buy now</button>
</a>
<?php echo $attributes= array('class' => 'products'); ?>
<?php echo form_open('cart/add_cart_item'); ?>
<fieldset>
    <label>Quantity</label>
    <?php echo form_input('quantity', '1', 'maxlength="10"'); ?>
    <?php echo form_hidden('product_id', $item->id); ?>
    <?php echo form_submit('add', 'Add'); ?>
</fieldset>
<?php echo form_close(); ?>