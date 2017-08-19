<html>
<head>
  <title>MyDashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/category.css"); ?>">
</head>
	<body style="background-color: #edf1f5;">
        
            <nav class="navbar navbar-inverse">
		  	<div class="container-fluid">
	    		<ul class="nav navbar-nav">
	    		    <li><a href="<?php echo base_url("welcome/dashboard"); ?>">DashBoard</a></li>
		      		<li><a href="<?php echo base_url("welcome/profile_manager"); ?>">Profile Manager</a></li>
		      		<li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Items Manager
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><a href="<?php echo base_url("welcome/add_items"); ?>">Add Item</a></li>
				          <li class="divider"></li>
				          <li><a href="<?php echo base_url("welcome/modify_items"); ?>">Modify Item</a></li>
				        </ul>
			        </li>
			        <li class="dropdown">
				        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Category Manager
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				          <li><a href="<?php echo base_url("welcome/add_category"); ?>">Add Catagory</a></li>
				          <li class="divider"></li>
				          <li><a href="<?php echo base_url("welcome/modify_category"); ?>">Modify Category</a></li>
				        </ul>
			        </li>
		    	</ul>
		    	<ul class="nav navbar-nav navbar-right">			      
		      		<li><a href="<?php echo base_url("welcome/logout"); ?>">Log Out</a></li>
		    	</ul>
		  	</div>
		</nav>
		<div class="container-fluid">
		    <?php if($this->session->flashdata('msg')): ?>
		    <div class="alert alert-danger">
			    <b>Error: </b><?php echo $this->session->flashdata('msg'); ?>
			</div>
	    	<?php endif; ?>
	    	<div class="row">
	    		<div class="col-lg-3">
	    			<div>
	    				<img style="width: 420px;height: 240px;" src="<?php echo base_url().'uploads/'.$category_info['image']; ?>" class="img-responsive">
	    			</div>
	    		</div>
	    		<div class="col-lg-9">
	    			<div class="text-alignment box-shadow">
	    				<p><b>Category: </b><?php echo $category_info['name']; ?></p>
	    				<p style="height: 166px;"><b>Description: </b><?php echo $category_info['description']; ?></p>
	    			</div>
	    		</div>
	    	</div><br><br>
	    	<div style="padding-bottom: 20px;" class="row">
	    		<?php foreach($cd as $co): ?>
	    		<div class="col-lg-3">
	    			<div class="text-justify box-shadow">
	    				<img style="height: 230px;width: 307px;" src="<?php echo base_url().'uploads/'.$co['image']; ?>" class="img-responsive">
	    				<p style="padding-top: 10px;"><b>Name: </b><?php echo $co['name']; ?></p>
	    				<?php $category = getName($category_info['id']); foreach($category as $c): ?>
	    				<p><b>Category: </b><?php echo $c['name']; ?></p>
	    				<?php endforeach; ?>
	    				<p style="padding-bottom: 10px;height: 150px;"><b>Description: </b><?php echo $co['description']; ?></p>	
	    			</div>		    		
	    		</div>		    	
	    		<?php endforeach; ?>
	    	</div>
		</div>
		<div style="background-color: white; height: 50px;">
			
		</div>
	</body>
</html>			