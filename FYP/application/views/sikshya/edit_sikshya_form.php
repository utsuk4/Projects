<div id="page-wrapper">
    <div class="container-fluid">

        <form name='addblog' enctype='multipart/form-data' action='<?php echo base_url(); ?>sikshya/updateinfo/<?php echo $singleinfo[0]['s_no'];?>' method='post'>
                     <table>
                        <tr>

                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" name="name" value="<?php echo $singleinfo[0]['name'];?>">
                        </div>
                        </tr>
                        <tr>

                        <div class="form-group">
                            <label>Temperature</label>
                            <input class="form-control" name="temperature" value="<?php echo $singleinfo[0]['temperature'];?>">
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <label>Sunlight</label>
                            <textarea class="form-control" rows="3" name="sunlight"><?php echo $singleinfo[0]['sunlight'];?></textarea>
                        </div>
                        </tr>
                         <tr>
                        <div class="form-group">
                            <label>Soil Texture</label>
                            <textarea class="form-control" rows="3" name="soil_texture"><?php echo $singleinfo[0]['soil_texture'];?></textarea>
                        </div>
                        </tr>
                         <tr>
                        <div class="form-group">
                            <label>Soil Moisture</label>
                            <textarea class="form-control" rows="3" name="soil_moisture"><?php echo $singleinfo[0]['soil_moisture'];?></textarea>
                        </div>
                        </tr>
                         <tr>
                        <div class="form-group">
                            <label>Soil Nutrition</label>
                            <textarea class="form-control" rows="3" name="soil_nutrition"><?php echo $singleinfo[0]['soil_nutrition'];?></textarea>
                        </div>
                        </tr>
                         <tr>
                        <div class="form-group">
                            <label>Soil Temperature</label>
                            <textarea class="form-control" rows="3" name="soil_temperature"><?php echo $singleinfo[0]['soil_temperature'];?></textarea>
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <label>Previous Crops</label>
                            <textarea class="form-control" rows="3" name="prev_crop"><?php echo $singleinfo[0]['prev_crop'];?></textarea>
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <label>Compatible Crops</label>
                            <textarea class="form-control" rows="3" name="compatible_crop"><?php echo $singleinfo[0]['compatible_crop'];?></textarea>
                        </div>
                        </tr>
                         <tr>
                        <div class="form-group">
                            <label>Fertilizer</label>
                            <textarea class="form-control" rows="3" name="fertilizer"><?php echo $singleinfo[0]['fertilizer'];?></textarea>
                        </div>
                        </tr>
                         <tr>
                        <div class="form-group">
                            <label>Water</label>
                            <textarea class="form-control" rows="3" name="water"><?php echo $singleinfo[0]['water'];?></textarea>
                        </div>
                        </tr>
                         <tr>
                        <div class="form-group">
                            <label>Note</label>
                            <textarea class="form-control" rows="3" name="note"><?php echo $singleinfo[0]['note'];?></textarea>
                        </div>
                        </tr>

                        <tr>
                            <td>Image:</td>
                           
                        <tr>
                            <td> <input type='file' name='image' onChange="readURL(this,'#blah_yo')" /> 
                                <script type="text/javascript">
                                function readURL(input, temp) {
                                        var reader = new FileReader();

                                        reader.onload = function (e) {
                                            $(temp)
                                                .attr('src', e.target.result)
                                                .width(200)
                                                .height(200);
                                        };
                                        reader.readAsDataURL(input.files[0]);
                                }
                                    
                            </script>
                            </td>
                        </tr>
                        <img id="blah_yo" height="200px" width="200px" src="<?=  base_url()?>images/blog/bg.jpg" />
                         <tr> 
                            <td>&nbsp;</td>
                        </tr>

                       
                        <tr> 
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td> <input type='submit' name='submit' value='UPDATE INFO'> </td>
                        </tr>
                    </table>
        </form>

      
       
    </div>

</div>



<script src="<?=base_url()?>assets/dashboard/js/jquery.js"></script>