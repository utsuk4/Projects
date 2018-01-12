<div id="page-wrapper">
    <div class="container-fluid">

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                          <th><center>S.No</center></th>    <?php $count = 1; ?>
                        <th><center>Blog Title</center></th>
                        <th><center>Blog Image</center></th>
                        <th><center>Blog content</center></th>
                        <th><center>Featured</center></th>
                        <th colspan='2'><center>Option</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php// if ($images != NULL) { ?>
                        <?php foreach ($blog as $b): ?>
                            <tr>
                                <td align='center'><?php echo $count++; ?></td>
                                <td align='center'><?php echo $b['b_heading'] ?></td>
                                <td align='center'>
                                    <img src="<?php echo base_url();?>images/blog/<?php echo $b['image'];?>" height="100px" width="200px">
                                </td>
                                <td align='center'><?php echo $b['b_content'] ?></td>
                                <td align='center'><?php if($b['featured']==NULL){echo 0;} else {echo $b['featured'];} ?></td>
                                <td align="center"> <a href="<?php echo base_url();?>blog/editblog/<?php echo $b['s_no'];?>"> Edit </a></td>
                                <td align="center"> <a onclick="return confirm('Are you sure?'); " href="<?php echo base_url();?>blog/deleteBlog/<?php echo $b['s_no'];?>"> Delete </a> </td>
                            </tr>
                        <?php endforeach; //}?>
                </tbody>
            </table>
        </div>
    </div>

</div>
