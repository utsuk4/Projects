
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">

                <form name='addproductform' enctype='multipart/form-data' action='<?php echo base_url(); ?>product/addproduct' method='post'>
                    <table>
                        <tr>

                        <div class="form-group">
                            <label>Product Name</label>;
                            <input class="form-control" name="p_name" value="">
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                        
                            <label>Image</label>
                             <input type='file' name='image'>
                         
                        </div>
                        </tr> 
                        <tr>
                        <div class="form-group">
                            <label>Product Rate</label>
                            <input class="form-control" rows="" name="p_rate">
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <label>Product Quantity</label>
                            <input class="form-control" rows="" name="p_quantity">
                        </div>
                        </tr>
                           
                        
                        <tr> 
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td> <input type='submit' name='submit' value='ADD PRODUCT'> </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
