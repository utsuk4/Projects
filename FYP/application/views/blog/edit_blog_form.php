
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">

                <form name='editWelcomeMessage' enctype='multipart/form-data' action='<?php echo base_url(); ?>blog/updateblog/<?php echo $blogdata[0]['s_no']; ?>' method='post'>
                    <table>
                        <tr>

                        <div class="form-group">
                            <label>Blog Title:</label>
                            <input class="form-control" name="b_heading" value="<?php echo $blogdata[0]['b_heading']; ?>">
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <label>Blog Content:</label>
                            <textarea class="form-control" rows="10" name="n_content" ><?php echo $blogdata[0]['b_content']; ?></textarea>
                        </div>
                        </tr>

                          <div> 
                    Previous Image:
                    <img src="
                         <?php echo base_url(); ?>images/blog/<?php echo $blogdata[0]['image']; ?>" 
                         height='100px' width='200px'> 
                          </div>
                        <div class="form-group">
                        
                            <label>New Image</label>
                             <input type='file' name='image'>
                        
                         <tr> 
                            <td>&nbsp;</td>
                        </tr>

                         
                        <tr> 
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td> <input type='submit' name='submit' value='UPDATE BLOG'> </td>
                        </tr>
                    </table>
                </form>
         

 
           

   </div>
        </div>
    </div>
</div>