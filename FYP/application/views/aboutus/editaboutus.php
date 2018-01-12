<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">
<form name='EditAboutUs' enctype='multipart/form-data' action='<?php echo base_url(); ?>home/updateaboutus' method='post'>
                    <table>
                        
                        <tr>
                        <div class="form-group">
                            <label>About Us1:</label>
                             <?php foreach ($aboutus as $a): ?>
                            <textarea class="form-control" rows="10" name="aboutus1"><?php echo $a['aboutus1']; ?></textarea>
                            <label>About Us2:</label>
                             <textarea class="form-control" rows="10" name="aboutus2"><?php echo $a['aboutus2']; ?></textarea>                            <label>About Us3:</label>
                             <textarea class="form-control" rows="10" name="aboutus3"><?php echo $a['aboutus3']; ?></textarea>   
                                 <?php endforeach;?>
                        </div>
                        </tr>

                      
                            
                        

                        <tr> 
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td> <input type='submit' name='submit' value='SUBMIT'> </td>
                        </tr>
                    </table>
                </form>
            </div>
            </div>
        </div>
    </div>
    