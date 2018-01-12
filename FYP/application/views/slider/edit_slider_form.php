<div id="page-wrapper">
    <div class="container-fluid">

        <form name='editSliderImage' enctype='multipart/form-data' action='<?php echo base_url(); ?>home/updateSlider/<?php echo $selectedImageData[0]['id']; ?>' method='post'>
            <table>
                <tr> 
                <div> 
                    Previous Image:
                    <img src="
                         <?php echo base_url(); ?>images/slider/<?php echo $selectedImageData[0]['image']; ?>" 
                         height='100px' width='200px'> 
                </div>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td> Edit Image: </td>
                    <td> <input type='file' name='image'> </td>

                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td> Featured: </td>
                    <td> <input type='checkbox' name='featured' <?php if ($selectedImageData[0]['featured'] == 1) {
                             echo "checked";
                         } ?>> </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td> <input type='submit' name='submit' value='EDIT SLIDER IMAGE'> </td>
                </tr>
            </table>
        </form>

