<div id="page-wrapper">
    <div class="container-fluid">

        <form name='addgallery' enctype='multipart/form-data' action='<?php echo base_url(); ?>Home/addgallery' method='post'>
            <table>
                <tr>
                    <td> Add Image to Gallery: </td>
                    <td> <input type='file' name='image'> </td>
                </tr>
                 <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td> Caption: </td>
                    <td> <input class="form-control" name="caption" value=""></td>
                 </tr>   
                <tr>
                    <td>    Featured: </td>
                    <td>    <input type='checkbox' name='featured' checked> </td>
                </tr>
                 
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td> <input type='submit' name='submit' value='UPDATE GALLERY'> </td>
                </tr>
            </table>
        </form>

        <h2></h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th><center>S.No</center></th>    <?php $count = 1; ?>
                        <th><center>Image</center></th>
                        <th><center>Caption</center></th>
                        <th><center>Featured</center></th>
                        <th colspan='2'><center>Option</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($gallerydata != NULL) { ?>
                        <?php foreach ($gallerydata as $g): ?>
                            <tr>
                                <td align='center'><?php echo $count++; ?></td>
                                <td align='center'>
                                    <img src="<?php echo base_url();?>images/gallery/<?php echo $g['image'];?>" height="100px" width="200px">
                                </td>
                                <td align='center'><?php echo $g['caption'] ?></td>
                                
                                
                                <td align='center'><?php if($g['featured']==NULL){echo 0;} else {echo $g['featured'];} ?></td>
                                <td align="center"> <a href="<?php echo base_url();?>home/editgallery/<?php echo $g['s_no'];?>"> Edit </a></td>
                                <td align="center"> <a onclick="return confirm('Are you sure?'); " href="<?php echo base_url();?>home/deletegallery/<?php echo $g['s_no'];?>"> Delete </a> </td>
                            </tr>
                        <?php endforeach; }?>
                </tbody>
            </table>
        </div>
    </div>

</div>
