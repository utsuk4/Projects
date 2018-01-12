   <div class="table-responsive">
            <table class="table table-bordered" >
                <thead>
                    <tr bgcolor="white">
                        <th><center>S.No</center></th>    <?php $count = 1; ?>
                        <th><center>Opportunity Title</center></th>
                        <th><center>Opportunity Description</center></th>
                        <th><center>Image</center></th>
                        <th colspan='2'><center>Option</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($opportunity!= NULL) { ?>
                        <?php foreach ($opportunity as $o): ?>
                            <tr bgcolor="white">
                                <td align='center'><?php echo $count++; ?></td>
                                
                                <td align='center'><?php echo $o['o_title'] ?></td>
                                <td align='center'><?php echo $o['o_description'] ?></td>
                                  <td align='center'>
                                    <img src="<?php echo base_url();?>images/opportunity/<?php echo $o['image'];?>" height="100px" width="200px">
                                </td>
                                
                                <td align="center"> <a href="<?php echo base_url();?>home/editgallery/<?php echo $o['s_no'];?>"> Edit </a></td>
                                <td align="center"> <a onclick="return confirm('Are you sure?'); " href="<?php echo base_url();?>opportunity/deleteopportunity/<?php echo $o['s_no'];?>"> Delete </a> </td>
                            </tr>
                        <?php endforeach; }?>
                </tbody>
            </table>
        </div>