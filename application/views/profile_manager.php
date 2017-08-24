<html>
<head>
  <title>MyDashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/profile.css"); ?>">
</head>
	<body style="background-color: #edf1f5;">
        <nav class="navbar navbar-inverse">
            <div class="">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <div class="">
                        <a class="navbar-brand" href="<?php echo base_url("welcome/dashboard"); ?>">Dashboard</a>
                    </div>
              
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Items Manager<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("welcome/add_items"); ?>">Add Items</a></li>
                                <li><a href="<?php echo base_url("welcome/modify_items"); ?>">Modify Items</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category Manager<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url("welcome/add_category"); ?>">Add Category</a></li>
                                <li><a href="<?php echo base_url("welcome/modify_category"); ?>">Modify Category</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown user-info">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <img class="img-circle" style="width: 46px; margin-bottom: -8px; margin-top: -13px;" src="<?php echo base_url().'uploads/'.$this->session->userdata('image'); ?>">
                            <b><?php echo $this->session->userdata('name'); ?></b>
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-menu-user">
                                <li><a>
                                    <div class="row">
                                        <div class="col-lg-4 col-xs-2">
                                            <div class="responsive-info">    
                                                <img class="img-round" src="<?php echo base_url().'uploads/'.$this->session->userdata('image'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-xs-4">
                                            <div class="responsive-info">
                                                <small><?php echo $this->session->userdata('id'); ?></small><br>
                                                <small><?php echo $this->session->userdata('name'); ?></small><br>
                                                <small><?php echo $this->session->userdata('email'); ?></small>
                                            </div>
                                        </div>
                                    </div>
                                </a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url("welcome/profile_manager"); ?>"><span style="padding-right: 5px;" class="glyphicon glyphicon-cog"></span>Account Setting</a></li>
                                <?php if($this->session->userdata('email')==$this->session->userdata('admin_email')): ?>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url("welcome/users"); ?>"><span style="padding-right: 5px;" class="glyphicon glyphicon-user"></span>Users</a></li>
                                <?php endif; ?>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url("welcome/logout"); ?>"><span style="padding-right: 5px;" class="glyphicon glyphicon-off"></span>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php if($this->session->flashdata('msg')): ?>
        <div class="alert alert-danger">
            <b>Error: </b><?php echo $this->session->flashdata('msg'); ?>
        </div>
        <?php endif; ?>
        <?php if($this->session->flashdata('cmsg')): ?>
        <div class="alert alert-success">
            <b>Success: </b><?php echo $this->session->flashdata('cmsg'); ?>
        </div>
        <?php endif; ?>
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class=" white-box box-shadow">
                        <div class="container-fluid">
                	        <div class="row">
                	            <div class="col-lg-offset-3 col-lg-9 col-md-offset-4 col-md-7 col-sm-offset-4 col-sm-7 col-xs-offset-3 col-xs-7">
                	         	    <div class="">
                 	         	   		<img class="img-circle img-responsive" style="" src="<?php echo base_url().'uploads/'.$this->session->userdata('image'); ?>"> 
                	                </div>         	
                	         	</div>
                	        </div>
                	        <div class="row">
                	        	<div class="col-lg-offset-9 col-lg-3">
                	         		<div class="text-siz">
                	         		    <h3><a href="<?php echo base_url("welcome/edit_profile"); ?>">Edit Profile</a></h3>
                	         	    </div>
                	         	</div>
                	        </div>
                	        <div class="">
                    	        <hr>
                    	        <form>
                    	        	<div class="row">
                    	        		<div class="col-lg-12">
                    	        			<div class="text-font">
                    	        				<strong>Name:</strong><input class="form-control" type="text" name="name" value="<?php echo $this->session->userdata('name'); ?>" readonly>
                    	        		    </div>
                    	        		</div>        		
                    	        	</div>
                    	        	<hr>
                    	        	<div class="row">
                    	        		<div class="col-lg-12">
                    	        			<div class="text-font">
                    	        				<strong>Username:</strong><input class="form-control" type="text" name="name" value="<?php echo $this->session->userdata('email'); ?>" readonly>
                    	        		    </div>
                    	        		</div>	
                    	        	</div>
                    	        	<hr>
                    	        	<div class="row">
                    	        		<div class="col-lg-12">
                    	        			<div class="text-font">
                    	        				<strong>Phone:</strong><input class="form-control" type="text" name="phone" value="<?php echo $this->session->userdata('phone'); ?>" readonly>
                    	        		    </div>
                    	        		</div>	
                    	        	</div>
                    	        	<hr>
                    	        </form>
                	        </div>
                        </div>    
                    </div>
                </div>    
            </div>    
        </div>
        <div class="footer"></div>
	</body>
</html>	