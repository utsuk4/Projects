   <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr bgcolor="white">
                        <th><center>S.No</center></th>    <?php $count = 1; ?>
                        <th><center>Research Title</center></th>
                        <th><center>Research Description</center></th>
                        <th colspan='2'><center>Option</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($research!= NULL) { ?>
                        <?php foreach ($research as $r): ?>
                            <tr bgcolor="white">
                                <td align='center'><?php echo $count++; ?></td>
                                
                                <td align='center'><?php echo $r['r_title'] ?></td>
                                <td align='center'><?php echo $r['r_description'] ?></td>
                                
                                <td align="center"> <a href="<?php echo base_url();?>/research/<?php echo $r['r_file'];?>"> Download </a></td>
                                <td align="center"> <a onclick="return confirm('Are you sure?'); " href="<?php echo base_url();?>research/deleteresearch/<?php echo $r['s_no'];?>"> Delete </a> </td>
                            </tr>
                        <?php endforeach; }?>
                </tbody>
            </table>
        </div>