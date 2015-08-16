
<table >
    <tr><td><h2 style="color:red"><?php echo $result->name; ?></h2><hr></td>
        <td></td>
    </tr> <td><b>Product code:- </b><?php echo $result->id; ?></td>
    <td>Quantity: <input type="text" name="qty" value="<?php echo $result->quantity; ?>" ></td><br>

    <tr><td><b>Price :- </b>NRs.<?php echo $result->price; ?>/-</td></tr>
    <tr><td><b>Description :- </b><?php echo $result->description; ?></td></tr>
    <td> </td>
    <?php echo form_open('user/shopping/formorder/'.$result->id)?>
    <td><input type="submit" value="Click here to order"></td>
    <?php echo form_close(); ?>
    <td><?php echo form_open('user/shopping/review/'.$result->id); ?>



</table>


<input type="submit" value="Review">
<?php echo form_close(); ?>
<?php

$result->total = $result->quantity * $result->price;
?>
 