<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">

                <form name='editproductform' enctype='multipart/form-data' action='<?php echo base_url(); ?>product/updateproduct/<?php echo $singleproductdata[0]['p_id']?>' method='post'>
                    <table>
                        <tr>

                        <div class="form-group">
                            <label>Product Name</label>;
                            <input class="form-control" name="p_name" value="<?php echo $singleproductdata[0]['p_name'];?>">
                        </div>
                        </tr>
                        <tr>
                <div> 
                    Previous Image:
                    <img src="
                         <?php echo base_url(); ?>images/products/<?php echo $singleproductdata[0]['p_image']; ?>" 
                         height='100px' width='200px'> 
                </div>
                        <div class="form-group">
                        
                            <label>New Image</label>
                             <input type='file' name='image'>
                         
                        </div>
                        </tr> 
                        <tr>
                        <div class="form-group">
                            <label>Product Rate</label>
                            <input class="form-control" rows="" name="p_rate" value="<?php echo $singleproductdata[0]['p_rate'];?>">
                        </div>
                        </tr>
                        <tr>
                        <div class="form-group">
                            <label>Product Quantity</label>
                            <input class="form-control" rows="" name="p_quantity" value="<?php echo $singleproductdata[0]['p_quantity'];?>">
                        </div>
                        </tr>
                           
                        
                        <tr> 
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td> <input type='submit' name='submit' value='UPDATE PRODUCT'> </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>


