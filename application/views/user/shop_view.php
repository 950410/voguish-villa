<table >
            <?php $i=0;?>
            <?php foreach($result as $data){?>
            <tr><td><?php echo ++$i; ?></td><td><?php echo $data->name; ?></td></tr>
            <tr><td>NRs.<?php echo ($data->price); ?>/-</td></tr>
                <td><ul id="menu">
                <li><a href="<?php echo base_url('user/shopping/buy_now/'.$data->id)?>"> Buy now
                </a></li><br><br><br>
                <li><a href="<?php echo base_url('user/your_cart/add_to_cart/'.$data->id)?>">+ Add to Cart</a></li>
                </ul></td>
    </tr>
            <?php }?>
</table>