<div id="page-wrapper">
    <div class="container-fluid">

        <form name='Update Gallery' enctype='multipart/form-data' action='<?php echo base_url(); ?>Home/updategallery/<?php echo $gallerydata[0]['s_no']; ?>' method='post'>
            <table>
                <div> 
                    Previous Image:
                    <img src="
                         <?php echo base_url(); ?>images/gallery/<?php echo $gallerydata[0]['image']; ?>" 
                         height='100px' width='200px'> 
                </div>
                 <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td> Update Image to Gallery: </td>
                    <td> <input type='file' name='image'> </td>
                </tr>
                 <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td> Caption: </td>
                    <td> <input class="form-control" name="caption" value="<?php echo $gallerydata[0]['caption'];?>"></td>
                 </tr>   
                <tr>
                    <td>    Featured: </td>
                      <td> <input type='checkbox' name='featured' <?php if ($gallerydata[0]['featured'] == 1) {
                             echo "checked";
                         } ?>> </td>
                  
                </tr>
                 
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td> <input type='submit' name='submit' value='UPDATE GALLERY'> </td>
                </tr>
            </table>
        </form>
        </div>
    </div>
