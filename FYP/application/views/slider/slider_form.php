<div id="page-wrapper">
    <div class="container-fluid">

        <form name='addSliderImage' enctype='multipart/form-data' action='<?php echo base_url(); ?>Home/addSliderImage' method='post'>
            <table>
                <tr>
                    <td> Add New Slider Image: </td>
                    <td> <input type='file' name='image'> </td>
                </tr>
                <tr>
                    <td>    Featured: </td>
                    <td>    <input type='checkbox' name='featured' checked> </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td> <input type='submit' name='submit' value='ADD NEW SLIDER IMAGE'> </td>
                </tr>
            </table>
        </form>

        <h2>Main Slider</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th><center>S.No</center></th>    <?php $count = 1; ?>
                        <th><center>Image</center></th>
                        <th><center>Featured</center></th>
                        <th colspan='2'><center>Option</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($images != NULL) { ?>
                        <?php foreach ($images as $i): ?>
                            <tr>
                                <td align='center'><?php echo $count++; ?></td>
                                <td align='center'>
                                    <img src="<?php echo base_url();?>images/slider/<?php echo $i['image'];?>" height="100px" width="200px">
                                </td>
                                <td align='center'><?php if($i['featured']==NULL){echo 0;} else {echo $i['featured'];} ?></td>
                                <td align="center"> <a href="<?php echo base_url();?>home/editSliderDisplay/<?php echo $i['id'];?>"> Edit </a></td>
                                <td align="center"> <a onclick="return confirm('Are you sure?'); " href="<?php echo base_url();?>home/deleteSlider/<?php echo $i['id'];?>"> Delete </a> </td>
                            </tr>
                        <?php endforeach; }?>
                </tbody>
            </table>
        </div>
    </div>

</div>
