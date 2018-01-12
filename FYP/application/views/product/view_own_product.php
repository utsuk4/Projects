            
<div class="table-responsive">
            <table class="table table-bordered">
                
                <thead bgcolor="#FFFFFF">
                    <tr>
                        <th><center>S.No</center></th>    <?php $count = 1; ?>
                        <th><center>Product Name</center></th>
                        <th><center>Image</center></th>
                        <th><center>Rate</center></th>
                        <th><center>Quantity</center></th>
                        <th colspan='2'><center>Option</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($product != NULL) { ?>
                        <?php foreach ($product as $p): ?>
                            <tr bgcolor="#FFFFFF">
                                <td align='center'><?php echo $count++; ?></td>
                                <td align='center'><?php echo $p['p_name']; ?></td>
                                <td align='center'>
                                    <img src="<?php echo base_url();?>images/products/<?php echo $p['p_image'];?>" height="100px" width="200px">
                                </td>
                               <td align='center'><?php echo $p['p_rate']; ?></td>
                               <td align='center'><?php echo $p['p_quantity']; ?></td>
                                <td align="center"> <a href="<?php echo base_url();?>product/editproduct/<?php echo $p['p_id'];?>"> Edit </a></td>
                                <td align="center"> <a onclick="return confirm('Are you sure?'); " href="<?php echo base_url();?>product/deleteproduct/<?php echo $p['p_id'];?>"> Delete </a> </td>
                            </tr>
                        <?php endforeach; }?>
                </tbody>
            </table>
        </div>