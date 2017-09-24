<?php $this->load->view('main/V_Head');?>

<?php $this->load->view('admin/Va_Navbar');?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Add Member</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <font color="red"><?php echo validation_errors();?></font>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Form add New Member
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <!-- /.col-lg-6 (nested) -->                                
                                <div class="col-lg-12">
                                    <?php echo form_open("admin/C_Admin/create_user_process"); ?>
                                        <div class="form-group">
                                            <label class="control-label" for="fullname">Full Name</label>
                                            <input type="text" name="fullname" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="username">Username</label>
                                            <input type="text" name="username" class="form-control" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="address">Alamat</label>
                                            <textarea type="text" name="address" id="input" class="form-control" required="required"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="tlpn">No.Tlpn</label>
                                            <input type="text" name="tlpn" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="password">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="passconf">Confirm Password</label>
                                            <input type="password" name="passconf" class="form-control" required>
                                        </div>
                                        <input type="reset" values="reset" class="btn btn-danger">
                                        <input type="submit" values="submit" class="btn btn-success">
                                    <?php echo form_close(); ?>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->


<?php $this->load->view('main/V_Script');?>