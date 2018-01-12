<div id="page-wrapper">
    <div class="container-fluid">

        <form name='addresearch' enctype='multipart/form-data' action='<?php echo base_url(); ?>Research/addresearch' method='post'>
            <table>
                 <tr>
                    <td> Research Title </td>
                    <td> <input class="form-control" name="r_title" value=""></td>
                 </tr>   
                  <tr>
                    <td> Research Description </td>
                    <td> <input class="form-control" name="r_description" value=""></td>
                 </tr>   
                <tr>
                    <td> Add File </td>
                    <td> <input type='file' name='r_file'> </td>
                </tr>
                 <tr>
                    <td>&nbsp;</td>
                </tr>
               
                
                 
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td> <input type='submit' name='submit' value='ADD RESEARCH'> </td>
                </tr>
            </table>
        </form>

        <h2></h2>
     
    </div>

</div>
