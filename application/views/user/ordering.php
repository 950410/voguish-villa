
<?php echo form_open('user/shopping/order')?>
<h2 style="color:red">Product Query </h2><hr>
<br> 
Name:    <input type="text" name="username"><br>
E-mail:  <input type="e-mail" name="user_email"><br>
Product: <input type="text" name="product" value="<?php echo $result->name; ?>" readonly><br>
Price:  <input type="text" name="mulya" value="<?php echo $result->price; ?>" readonly><br>
Product code: <input type="text" name="code" value="<?php echo $result->id ; ?>" readonly><br>
Address: <input type="text" name="user_address"><br>
Contact No:<input type="text" name="phone_no"><br>
Query:<input type="text" name="des"><br>
 <button>Send</button>
 <?php echo form_close(); ?>
