<div id="page-wrapper">
    <div class="container-fluid">

        <form name='addblog' enctype='multipart/form-data' action='<?php echo base_url(); ?>blog/addblog' method='post'>
                     <table>
                        <tr>

                        <div class="form-group">
                            <label>Blog Title:</label>
                            <input class="form-control" name="b_heading" value="">
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <label>Blog Content:</label>
                            <textarea class="form-control" rows="10" name="b_content"></textarea>
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
                    <td>    Featured: </td>
                    <td>    <input type='checkbox' name='featured' checked> </td>
                        </tr>
                        <tr> 
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td> <input type='submit' name='submit' value='ADD BLOG'> </td>
                        </tr>
                    </table>
        </form>

      
       
    </div>

</div>



<script src="<?=base_url()?>assets/dashboard/js/jquery.js"></script>