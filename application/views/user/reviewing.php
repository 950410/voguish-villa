<?php echo form_open('user/shopping/review')?>

<h2 style="color:red">Product Review </h2><hr>
 <form action="reviewing.php" autocomplete="off">
Name:    <input type="text" name="username"><br>
Product:  <input type="text" name="product"><br>
Address: <input type="text" name="user_address"><br>

Contact No:<input type="text" name="phone_no"><br>
Rating : 								<br>
Review<input type="textarea" name="review"><br>
 <button>Send</button>


<?php echo form_close(); ?>