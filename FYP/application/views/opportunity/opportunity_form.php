<div id="page-wrapper">
    <div class="container-fluid">

        <form name='addopportunity' enctype='multipart/form-data' action='<?php echo base_url(); ?>Opportunity/addopportunity' method='post'>
            <table>
                 <tr>
                    <td> Opportunity Title </td>
                    <td> <input class="form-control" name="o_title" value=""></td>
                 </tr>   
                  <tr>
                    <td> Opportunity Description </td>
                    <td> <input class="form-control" name="o_description" value=""></td>
                 </tr>   
                <tr>
                    <td> Add Image </td>
                    <td> <input type='file' name='image'> </td>
                </tr>
                 <tr>
                    <td>&nbsp;</td>
                </tr>
               
                
                 
                <tr>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td> <input type='submit' name='submit' value='ADD OPPORTUNITY'> </td>
                </tr>
            </table>
        </form>

        <h2></h2>
     
    </div>

</div>
