<html>
<head>
  <title>MyDashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/dash.css"); ?>">
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
		<div class="container-fluid">    
    		<div class="row">
                <div class="col-lg-offset-3 col-lg-6">	
                    <form action="<?php echo base_url("welcome/do_upload_items"); ?>" method="post" enctype="multipart/form-data">
        	      		<div class="heading-bg">	          			
        	          		<h4>Add Items</h4>
        	        	</div>
        	      		<div class="white-box box-shadow">	      		
        	        		<div class="">	
        	           			<b>Name:</b> <input class="form-control" type="text" name="name" value="<?php echo set_value('name'); ?>"> 
        	           			<br>
        	            		<b>Category:</b> 
        	            		<select class="form-control" name="category">
        	            		<option value="">Category</option>
        	            			<?php foreach($category_info as $c): ?>
        	            			<option value="<?php echo $c['id']; ?>"><?php echo $c['name']; ?></option>
        	            			<?php endforeach; ?>
        	            		</select><br>
        	            		<b>Description:</b><textarea class="form-control" name="description"><?php echo set_value('description'); ?></textarea>
                                <?php echo form_error('description'); ?>
        	            		<br>
        						<b>Upload Img:</b><input type="file" name="userfile" size="20">
        						<?php if($this->session->flashdata('file')): ?>
        						<div class="text-danger">
        							<?php echo $this->session->flashdata('file'); ?>
        						</div>
        					    <?php endif; ?>
        	        		</div>
        	        		<br>
        	        		<div class="">
        	          			<button class="btn-size btn btn-info btn-block">Submit</button>
        	        		</div>	        		
        	      		</div>
        	        </form>
                </div>
            </div>    	  	
		</div>
		<div style="margin-top: 73px; background-color: white; height: 50px;"></div>
	</body>
</html>		