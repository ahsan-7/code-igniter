<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/loginform.css"); ?>">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="hidden-md hidden-sm hidden-xs inner-panel"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="header">
                <div class="hidden-xs col-lg-offset-5 col-lg-7 col-xs-12">
                    <nav class="navbar">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#"><img class="img-set" src="<?php echo base_url(); ?>assets/img/logod.png"></a>
                            </div>
                            <ul class="nav navbar-nav navbar-right ul_tabs">
                                <li class="active"><a href="<?php echo base_url("welcome/loginform"); ?>">Sign In</a><span class="linea_bajo_nom"></span></li>
                                <li class="hover"><a href="<?php echo base_url("welcome/form"); ?>">Sign Up</a><span class="linea_bajo_nomn"></span></li>   
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="hidden-lg hidden-md hidden-sm col-xs-12">
                    <nav class="container-fluid">
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="">    
                                <a class="" href="#"><img class="img-set" src="<?php echo base_url(); ?>assets/img/logod.png"></a>
                                </div>
                            </div>
                            <div class="col-xs-offset-2 col-xs-3">
                                <ul class="nav navbar-nav ul_tabs">
                                    <li class="active"><a href="<?php echo base_url("welcome/loginform"); ?>">Sign In</a><span class="linea_bajo_nom"></span></li>
                                </ul>    
                            </div>
                            <div class="col-xs-3">
                                <ul class="nav navbar-nav ul_tabs">
                                    <li class="hover"><a href="<?php echo base_url("welcome/form"); ?>">Sign Up</a><span class="linea_bajo_nomn"></span></li>
                                </ul>
                            </div>    
                        </div>
                    </nav>
                </div>
            </div>    
        </div>
        <div class="top">
            <div class="row">
                <div class="col-lg-offset-7 col-lg-3 col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                    <form action="<?php echo base_url('welcome/validate'); ?>" method="post">
                        <div class="alignment">
                            <h3><strong>Sign In to Demo</strong></h3>
                            <p><small>Enter Your Details Below.</small></p>
                        </div>    
                        <div class="">
                            <div class="alignment">
                                <label for="email">Username:</label>
                                <div class="">
                                    <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>">                         
                                </div>
                                <?php echo form_error('email'); ?>                     
                            </div>
                            <div class="alignment">
                                <label for="pwd">Password:</label>
                                <div class="">
                                    <input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>"  >  
                                </div>
                                <?php echo form_error('password'); ?>                   
                            </div>
                            <div class="alignment">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <input type="checkbox" name="checkbox">
                                    </div>
                                    <div style="padding-left: 0px;" class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <small>Remember Me</small>
                                    </div>
                                    <div class="col-lg-5 pull-right">
                                        <div class="forgot">
                                            <a href=""><i style="margin-right: 8px;" class="fa fa-lock m-r-5"></i><small>Forgot Pwd?</small></a>
                                        </div>
                                    </div>
                                </div>
                            </div>                  
                        </div>
                        <div class="alignment">
                            <button type="submit" class="btn btn-info btn-block">Log In</button>
                            <div class="clearfix"></div>
                        </div> 
                    </form>
                    <?php //echo validation_errors(); ?>
                    <?php if($this->session->flashdata('msg')):  ?>
                    <div class="alert alert-danger">
                        <strong>Error</strong> <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('umsg')):  ?>
                    <div class="alert alert-success">
                        <strong>Success</strong> <?php echo $this->session->flashdata('umsg'); ?>
                    </div>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('form')):  ?>
                    <div class="alert alert-danger">
                        <strong>Error</strong> <?php echo $this->session->flashdata('form'); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>