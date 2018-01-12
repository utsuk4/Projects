
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-6">

              
                 <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        
                        <th><center>About Us 1</center></th>
                        <th><center>About Us 2</center></th>
                        <th><center>About Us 3</center></th>
                        <th colspan='2'><center>Option</center></th>
                    </tr>
                </thead>
                <tbody>
                  
                        <?php foreach ($aboutus as $a): ?>
                            <tr>
                              
                                <td align='center'><?php echo $a['aboutus1'] ?></td>
                                <td align='center'><?php echo $a['aboutus2'] ?></td>
                                <td align='center'><?php echo $a['aboutus3'] ?></td>
                                
                                <td align="center"> <a href="<?php echo base_url();?>home/editaboutus"> Edit </a></td>
                                
                            </tr>
                        <?php endforeach;?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
