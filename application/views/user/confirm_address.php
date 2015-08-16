<table>

    <?php echo form_open('user/shopping/address')?>
    <h2 style="color:red">Confirm Address </h2><hr>
    <h3>We will deliver your order here:</h3>
    <br>
    Name:  <input type="text" name="username"><br>
    Address details: <input type="text" name="useraddress"><br>
    Contact No:<input type="text" name="phone"><br>
    City:<input type="text" name="city"><br>
    Ward no. :<input type="text" name="ward"><br>
    House no.:<input type="text" name="house"><br>
    <button>Save and continue</button>
    <?php echo form_close(); ?>

</table>