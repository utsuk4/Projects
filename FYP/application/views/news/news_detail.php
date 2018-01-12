<div id="page-wrapper">
    <div class="container-fluid">

        <form name='addnews' enctype='multipart/form-data' action='<?php echo base_url(); ?>news/addnews' method='post'>
                     <table>
                        <tr>

                        <div class="form-group">
                            <label>News Title:</label>
                            <input class="form-control" name="n_heading" value="">
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <label>News Content:</label>
                            <textarea class="form-control" rows="10" name="n_content"></textarea>
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
                        <img id="blah_yo" height="200px" width="200px" src="<?=  base_url()?>images/news/bg.jpg" />
                         <tr> 
                            <td>&nbsp;</td>
                        </tr>

                         <tr>
                    <td>    Featured: </td>
                    <td>    <input type='checkbox' name='featured' checked> </td>
                        </tr>
                        <tr> 
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td> <input type='submit' name='submit' value='ADD NEWS'> </td>
                        </tr>
                    </table>
        </form>

      
       
    </div>

</div>



<script src="<?=base_url()?>assets/dashboard/js/jquery.js"></script>







<div id="page-wrapper">
    <div class="container-fluid">

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                          <th><center>S.No</center></th>    <?php $count = 1; ?>
                        <th><center>News Title</center></th>
                        <th><center>News Image</center></th>
                        <th><center>News content</center></th>
                        <th><center>Featured</center></th>
                        <th colspan='2'><center>Option</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php// if ($images != NULL) { ?>
                        <?php foreach ($news as $n): ?>
                            <tr>
                                <td align='center'><?php echo $count++; ?></td>
                                <td align='center'><?php echo $n['n_heading'] ?></td>
                                <td align='center'>
                                    <img src="<?php echo base_url();?>images/news/<?php echo $n['image'];?>" height="100px" width="200px">
                                </td>
                                <td align='center'><?php echo $n['n_content'] ?></td>
                                <td align='center'><?php if($n['featured']==NULL){echo 0;} else {echo $n['featured'];} ?></td>
                                <td align="center"> <a href="<?php echo base_url();?>news/editnews/<?php echo $n['s_no'];?>"> Edit </a></td>
                                <td align="center"> <a onclick="return confirm('Are you sure?'); " href="<?php echo base_url();?>news/deletenews/<?php echo $n['s_no'];?>"> Delete </a> </td>
                            </tr>
                        <?php endforeach; //}?>
                </tbody>
            </table>
        </div>
    </div>

</div>
