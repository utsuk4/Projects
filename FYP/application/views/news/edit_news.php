<div id="page-wrapper">
    <div class="container-fluid">

        <form name='addnews' enctype='multipart/form-data' action='<?php echo base_url(); ?>news/updatenews/<?php echo $newsdata[0]['s_no'];?>' method='post'>
                     <table>
                        <tr>

                        <div class="form-group">
                            <label>News Title:</label>
                            <input class="form-control" name="n_heading" value="<?php echo $newsdata[0]['n_heading']; ?>">
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <label>News Content:</label>
                            <textarea class="form-control" rows="10" name="n_content" ><?php echo $newsdata[0]['n_content']; ?></textarea>
                        </div>
                        </tr>
                        <tr> <div> 
                    Previous Image:
                    <img src="
                         <?php echo base_url(); ?>images/news/<?php echo $newsdata[0]['image']; ?>" 
                         height='100px' width='200px'> 
                          </div>
                        </tr>
                       

                        <tr>
                            <td> New Image:</td>
                           
                        <tr>
                            <tr> 
                            <td>&nbsp;</td>
                        </tr>
                            <td> <input type='file' name='image' onChange="readURL(this,'#blah_yo')" /> 
                               
                            </td>
                        </tr>
                        
                         <tr> 
                            <td>&nbsp;</td>
                        </tr>

                        <tr>
                    <td> Featured: </td>
                    <td> <input type='checkbox' name='featured' <?php if ($newsdata[0]['featured'] == 1) {
                             echo "checked";
                         } ?>> </td>
                </tr>
                        <tr> 
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td> <input type='submit' name='submit' value='UPDATE NEWS'> </td>
                        </tr>
                    </table>
        </form>

      
       
    </div>

</div>



<script src="<?=base_url()?>assets/dashboard/js/jquery.js"></script>







