<?php $this->load->view('main/V_Head');?>
<body>
<?php $this->load->view('main/V_Nav');?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title" align="center"><?php echo $success;?><br><br>Please Sign In to Continue</h4>
                    </div>
                    <div class="panel-body">
                        <?php echo form_open("C_Main/login"); ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                               
                                 <button type="submit" name="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                   <i class="ace-icon fa fa-key"></i>
                                   <span class="bigger-110">Login</span>
                                </button>
                            </fieldset>
                        <?php echo form_close(); ?>
                    </div>
                    <!-- <div class="panel-footer">
                        <h4 class="panel-title" align="right"><?php echo anchor('C_Main/register','or Register here'); ?> </h4>
                    </div> -->
                </div>
            </div>
        </div>
    </div>


<?php $this->load->view('main/V_Script');?>
</body>

</html>