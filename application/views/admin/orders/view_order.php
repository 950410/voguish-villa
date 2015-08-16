<div class="wrapper">
    <div class="col-lg-9" style="margin:70px 220px;">
        <div class="col-lg-12" style="padding:20px;">
            Orders
        </div>
        <table class="table table-hover table-striped table-bordered">
            <tr>
                <th>Serial No.</th>
                <th>Customer Name</th>
                <th>E-mail</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Product Name</th>
                <th>Price NRs.</th>
                <th>Product Code</th>
                <th>Query</th>
            </tr>
            <?php $i=0;?>
            <?php foreach($order as $data){?>
                <tr>
                    <td><?php echo ++$i; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['address']; ?></td>
                    <td><?php echo $data['contact']; ?></td>
                    <td><?php echo $data['product_name']; ?></td>
                    <td><?php echo $data['price']; ?></td>
                    <td><?php echo $data['product_code']; ?></td>
                    <td><?php echo $data['query']; ?></td>
                    <td></td>
                </tr>
            <?php }?>
        </table>
    </div>
</div>
