<div id="page-wrapper">
    <div class="container-fluid">

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                          <th><center>S.No</center></th>    <?php $count = 1; ?>
                        <th><center>Name</center></th>
                        <th><center>Image</center></th>
                        <th><center>Temperature</center></th>
                        <th><center>Sunlight</center></th>
                        <th><center>Soil Texture</center></th>
                        <th><center>Soil Moisture</center></th>
                        <th><center>Soil Nutrition</center></th>
                        <th><center>Soil Temperature</center></th>
                        <th><center>Previous Crop</center></th>
                        <th><center>Compatible Crops</center></th>
                        <th><center>fertilizer</center></th>
                        <th><center>water</center></th>
                        <th><center>note</center></th>
                        <th colspan='2'><center>Option</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php// if ($images != NULL) { ?>
                        <?php foreach ($info as $i): ?>
                            <tr>
                                <td align='center'><?php echo $count++; ?></td>
                                <td align='center'><?php echo $i['name'] ?></td>
                                <td align='center'>
                                    <img src="<?php echo base_url();?>images/sikshya/<?php echo $i['image'];?>" height="100px" width="100px">
                                </td>
                                <td align='center'><?php echo $i['temperature'] ?></td>
                                <td align='center'><?php echo $i['sunlight'] ?></td>
                                <td align='center'><?php echo $i['soil_texture'] ?></td>
                                <td align='center'><?php echo $i['soil_moisture'] ?></td>
                                <td align='center'><?php echo $i['soil_nutrition'] ?></td>
                                <td align='center'><?php echo $i['soil_temperature'] ?></td>
                                <td align='center'><?php echo $i['prev_crop'] ?></td>
                                <td align='center'><?php echo $i['compatible_crop'] ?></td>
                                <td align='center'><?php echo $i['fertilizer'] ?></td>
                                <td align='center'><?php echo $i['water'] ?></td>
                                <td align='center'><?php echo $i['note'] ?></td>
                                
                                <td align="center"> <a href="<?php echo base_url();?>sikshya/editinfo/<?php echo $i['s_no'];?>"> Edit </a></td>
                                <td align="center"> <a onclick="return confirm('Are you sure?'); " href="<?php echo base_url();?>sikshya/deleteinfo/<?php echo $i['s_no'];?>"> Delete </a> </td>
                            </tr>
                        <?php endforeach; //}?>
                </tbody>
            </table>
        </div>
    </div>

</div>
