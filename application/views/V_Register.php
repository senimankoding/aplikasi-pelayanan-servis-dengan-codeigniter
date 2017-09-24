<?php $this->load->view('main/V_Head');?>
<body>

<?php $this->load->view('main/V_Nav');?>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center">Register Member User</h3>
                    </div>
                    <div class="panel-body">
                    <font color="red"><?php echo validation_errors();?></font>
                        <?php echo form_open("C_Main/register"); ?>
                            <fieldset>
                                <div class="form-group">
                                            <label class="control-label" for="fullname">Full Name</label>
                                            <input type="text" name="fullname" class="form-control" placeholder="Nama Lengkap" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="username">Username</label>
                                            <input type="text" name="username" class="form-control" placeholder="Username" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="address">Alamat</label>
                                            <textarea type="text" name="address" id="input" class="form-control" placeholder="Alamat" required="required"></textarea>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label" for="tlpn">No.Tlpn</label>
                                            <input type="text" name="tlpn" class="form-control" placeholder="No. Tlpn" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="password">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="passconf">Confirm Password</label>
                                            <input type="password" name="passconf" class="form-control" placeholder="Ulangi Password" required>
                                        </div>
                               <!--  <input type="submit" class="btn btn-lg btn-success btn-block";> -->
                                <button type="submit" name="submit"  class="btn btn-lg btn-primary btn-block">
                                   <!-- <i class="ace-icon fa fa-key"></i> -->
                                   <span class="bigger-110">Register</span>
                                </button>
                            </fieldset>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $this->load->view('main/V_Script');?>
</body>

</html>