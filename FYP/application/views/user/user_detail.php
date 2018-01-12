
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                          <th><center>S.No</center></th>    <?php $count = 1; ?>
                        <th><center>User Name</center></th>
                        <th><center>Email</center></th>
                        <th><center>User Type</center></th>
                        <th><center>User Status</center></th>
                        <th colspan='2'><center>Option</center></th>
                    </tr>
                </thead>
                <tbody>
                    <?php// if ($images != NULL) { ?>
                        <?php foreach ($users as $u): ?>
                            <tr>
                                 <form name='Manage User' enctype='multipart/form-data' action='<?php echo base_url(); ?>User/updateuser/<?php echo $u['u_no']; ?>' method='post'>
                                <td align='center'><?php echo $count++; ?></td>
                                <td align='center'><?php echo $u['u_name'] ?></td>
                                <td align='center'><?php echo $u['u_email'] ?></td>
                                <td align='center'> <select class="form-control" name="u_type">
                                  
                                    <option><?php echo $u['u_type'];?></option>
                               <?php if ($u['u_type']!='admin'){?><option>admin</option> <?php } ?>
                               <?php if ($u['u_type']!='vendor'){?><option>vendor</option> <?php } ?>
                               <?php if ($u['u_type']!='expert'){?><option>expert</option> <?php } ?>
                               <?php if ($u['u_type']!='farmer'){?><option>farmer</option> <?php } ?>
                                    
                                    
                                    
                                </select></td>
                                <td align='center'><input type='checkbox' name='u_status' <?php if ($u['u_status'] == 1) {
                             echo "checked";
                         } ?>> </td>
                                <td align="center"> <input type='submit' name='submit' value='Update'></td>
                                 </form> 
                                 <form name='Manage User' enctype='multipart/form-data' action='<?php echo base_url(); ?>User/deleteuser/<?php echo $u['u_no']; ?>' method='post'>
                                 
                                     <td align="center"><input type='submit' name='submit' value='Delete'> </td></form>
                            </tr>
                        <?php endforeach; //}?>
                </tbody>
            </table>
        </div>
    </div>

</div>


