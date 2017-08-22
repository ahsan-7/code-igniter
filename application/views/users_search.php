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
                                        <div class="col-lg-4">
                                            <img class="img-round" style="width: 60px;" src="<?php echo base_url().'uploads/'.$this->session->userdata('image'); ?>">
                                        </div>
                                        <div class="col-lg-8">
                                            <small><?php echo $this->session->userdata('id'); ?></small><br>
                                            <small><?php echo $this->session->userdata('name'); ?></small><br>
                                            <small><?php echo $this->session->userdata('email'); ?></small>
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
            <form method="get" action="<?php echo base_url("welcome/users_search"); ?>">
                <div class="search-box">
                    <div class="row">
                        <div class="col-xs-2">
                            <label>Unique Id</label>
                            <input class="form-control" type="text" name="id" placeholder="Unique Id" value="<?php if(isset($_GET['id'])){echo $_GET['id'];} ?>">
                        </div>
                        <div class="col-xs-2">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Name" value="<?php if(isset($_GET['name'])){echo $_GET['name'];} ?>">
                        </div>
                        <div class="col-xs-2">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>">
                        </div>
                        <div class="col-xs-2">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone" value="<?php if(isset($_GET['phone'])){echo $_GET['phone'];} ?>">
                        </div>
                        <div class="col-xs-2" style="margin-top: 25px; margin-bottom: 15px;"> 
                            <button class="form-control btn btn-primary btn-block" type="submit">Search</button>
                        </div>
                        <div class="col-xs-2" style="margin-top: 25px; margin-bottom: 15px;"> 
                            <a href="<?php echo base_url("welcome/users"); ?>" class="btn btn-danger btn-block">Reset</a>
                        </div>
                    </div>
                </div>
            </form>
                <div class="white-box">
                    <b>Total Users:</b><p class="pull-right"><?php if($userSearchRows){echo $userSearchRows;}else{echo 0;} ?></p>
                </div>
                <?php if($this->session->flashdata('msg')): ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
                <?php endif; ?>
                <?php if($users_info): ?>
                <form class="table-responsive" style="text-align: center; width: 1303px;" action="" method="">
                    <table style="width: 1303px;">
                        <tr style="background-color: #2cabe3;">
                            <th style="padding: 10px;">Id:</th>
                            <th style="padding: 10px;">Name:</th>
                            <th style="padding: 10px;">Email:</th>
                            <th style="padding: 10px;">Image:</th>
                            <th style="padding: 10px;">Phone:</th>
                            <th style="padding: 10px;">Admin:</th>
                            <th style="padding: 10px;">Admin Access:</th>
                        </tr>
                        <?php foreach($users_info as $u): ?>
                        <tr class="box-shadow" style="text-align: justify;">
                            <td style="padding: 10px;"><?php echo $id = $u['id']; ?></td>
                            <td style="padding: 10px;"><?php echo $u['name']; ?></td>
                            
                            <td style="padding: 10px;"><?php echo $email = $u['email']; ?></td>
                            
                            <td style="padding: 10px;"><img style="height: 60px; width: 80px;" src="<?php echo base_url().'uploads/'.$u['image']; ?>"></td>
                            <td style="padding: 10px;"><?php echo $u['phone']; ?></td>
                            <?php if($u['admin']==1): ?>
                            <td style="padding: 10px;"><p class="access btn btn-success">Active</p></td>
                            <?php else: ?>
                                <td style="padding: 10px;"><p class="access btn btn-danger">Inactive</p></td>
                            <?php endif; ?>
                            <td style="padding: 10px;">
                            <?php if($u['admin']!=1): ?>
                            <a href="<?php echo base_url("welcome/giveAccess/$id/$email"); ?>" class="access btn btn-info" id="id1">Give Access</a>    
                            <?php endif; ?>
                            <?php if($u['admin']==1): ?>
                            <a href="<?php echo base_url("welcome/retriveAccess/$id"); ?>" class="access btn btn-info">Retrieve Access</a></td>          
                            <?php endif; ?>
                        </tr>   
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="7" align="center"><?php ?></td>
                        </tr>
                        <div class="clearfix"></div>
                    </table>
                </form>
                <?php endif; ?>
                <div class="page">
                    <?php echo $this->pagination->create_links(); ?>
                </div>  
        </div>
        <div class="footer"></div>
    </body>
</html>