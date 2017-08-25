<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/form.css"); ?>">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="hidden-md hidden-sm hidden-xs inner-panel"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="header">
                <div class="hidden-xs col-lg-offset-5 col-lg-7">
                    <nav class="navbar">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="#"><img class="img-set" src="<?php echo base_url(); ?>assets/img/logod.png"></a>
                            </div>
                            <ul class="nav navbar-nav navbar-right ul_tabs">
                                <li class="hover"><a href="<?php echo base_url("welcome/loginform"); ?>">Sign In</a><span class="linea_bajo_nomn"></span></li>
                                <li class="active"><a href="<?php echo base_url("welcome/form"); ?>">Sign Up</a><span class="linea_bajo_nom"></span></li>   
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
                    <form action="<?php echo base_url("welcome/insertToDB"); ?>" method="post">
                        <div class="alignment">
                            <h3><strong>Sign Up to Demo</strong></h3>
                            <p><small>Enter Your Details Below.</small></p>
                        </div>
                        <div class="">
                            <div class="alignment">
                                <label>Name:</label>
                                <div class="">
                                    <input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>">                         
                                </div>
                                <?php echo form_error('name'); ?>                     
                            </div>
                            <div class="alignment">
                                <label for="pwd">Username:</label>
                                <div class="">
                                    <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>"  >  
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
                                <label for="pwd">Confirm Password:</label>
                                <div class="">
                                    <input type="password" class="form-control" name="c_password" value="<?php echo set_value('c_password'); ?>"  >  
                                </div>
                                <?php echo form_error('c_password'); ?>                   
                            </div>
                            <div class="alignment">
                                <div class="row">
                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                                        <input type="checkbox" name="checkbox">
                                    </div>
                                    <div style="padding-left: 0px;" class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <small>I accept the terms and conditions.</small>
                                    </div>
                                </div>
                            </div>                  
                        </div>
                        <div class="alignment">
                            <button type="submit" class="btn btn-info btn-block">Sign Up</button>
                            <div class="clearfix"></div>
                        </div>
                    </form>                          
                </div>
            </div>
        </div>
    </div>  
</body>
</html>

