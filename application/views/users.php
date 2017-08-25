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
                            <img class="img-circle" style="width: 42px;height: 39px; margin-bottom: -8px; margin-top: -13px;" src="<?php echo base_url().'uploads/'.$this->session->userdata('image'); ?>">
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
            <form method="get" action="<?php echo base_url("welcome/users_search"); ?>">
                <div class="search-box">
                    <div class="row">
                        <div class="col-lg-2">
                            <label>Unique Id</label>
                            <input class="form-control" type="text" name="id" placeholder="Unique Id" value="">
                        </div>
                        <div class="col-lg-2">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" placeholder="Name" value="">
                        </div>
                        <div class="col-lg-2">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email" value="">
                        </div>
                        <div class="col-lg-2">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Phone" value="">
                        </div>
                        <div class="col-lg-2" style="margin-top: 25px; margin-bottom: 15px;"> 
                            <button class="form-control btn btn-primary btn-block" type="submit">Search</button>
                        </div>
                        <div class="col-lg-2" style="margin-top: 25px; margin-bottom: 15px;"> 
                            <a href="<?php echo base_url("welcome/users"); ?>" class="btn btn-danger btn-block">Reset</a>
                        </div>
                    </div>
                </div>
            </form>
                <div class="white-box">
                    <b>Total Users:</b><p class="pull-right"><?php if($users_rows){echo $users_rows;}else{echo 0;} ?></p>
                </div>
                <?php if($this->session->flashdata('msg')): ?>
                <div class="alert alert-danger">
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
                <?php endif; ?>
                <?php if($users_info): ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr style="background-color: #2cabe3;">
                            <th style="padding: 10px;">Id:</th>
                            <th class="hidden-xs" style="padding: 10px;">Name:</th>
                            <th style="padding: 10px;">Email:</th>
                            <th style="padding: 10px;">Image:</th>
                            <th class="hidden-xs" style="padding: 10px;">Phone:</th>
                            <th class="hidden-xs" style="padding: 10px;">Verified:</th>
                            <th style="padding: 10px;">Admin:</th>
                            <th style="padding: 10px;">Admin Access:</th>
                            <th style="padding: 10px;">Status:</th>
                            <th style="padding: 10px;">User Status:</th>
                        </tr>
                        <?php foreach($users_info as $u): ?>
                        <tr class="box-shadow" style="text-align: justify;">
                            <td style="padding: 10px;"><?php echo $id = $u['id']; ?></td>
                            <td class="hidden-xs" style="padding: 10px;"><?php echo $u['name']; ?></td>
                            
                            <td style="padding: 10px;"><?php echo $email = $u['email']; ?></td>
                            
                            <td style="padding: 10px;"><img style="height: 60px; width: 80px;" src="<?php echo base_url().'uploads/'.$u['image']; ?>"></td>
                            <td class="hidden-xs" style="padding: 10px;"><?php echo $u['phone']; ?></td>
                            <?php if($u['active']==1): ?>
                            <td class="hidden-xs" style="padding: 10px;"><p class="access btn btn-success">Verified</p></td>
                            <?php else: ?>
                            <td class="hidden-xs" style="padding: 10px;"><p class="access btn btn-danger">Not Verified</p></td>  
                            <?php endif; ?>
                            <?php if($u['admin']==1): ?>
                            <td style="padding: 10px;"><p class="access btn btn-success">Admin</p></td>
                            <?php else: ?>
                                <td style="padding: 10px;"><p class="access btn btn-primary">User</p></td>
                            <?php endif; ?>
                            <td style="padding: 10px;">
                            <?php if($u['admin']!=1): ?>
                            <a href="<?php echo base_url("welcome/giveAccess/$id/$email"); ?>" class="access btn btn-info" id="id1">Give Access</a>    
                            <?php endif; ?>
                            <?php if($u['admin']==1): ?>
                            <a href="<?php echo base_url("welcome/retriveAccess/$id"); ?>" class="access btn btn-danger">Retrieve Access</a></td>          
                            <?php endif; ?>
                            <?php if($u['online']==1): ?>
                            <td style="padding: 10px;"><a class="access btn btn-success">Online</a></td>
                            <?php else: ?>
                                <td style="padding: 10px;"><a class="access btn btn-danger">Offline</a></td>
                            <?php endif; ?>
                            <?php if($u['status']==1): ?>
                            <td style="padding: 10px;"><a href="<?php echo base_url("welcome/block/$id"); ?>" class="access btn btn-danger">Block User</a></td>
                            <?php else: ?>
                                <td style="padding: 10px;"><a href="<?php echo base_url("welcome/unblock/$id"); ?>" class="access btn btn-success">Unblock User</a></td>
                            <?php endif; ?>
                        </tr>   
                        <?php endforeach; ?>
                        <tr>
                            <td colspan="7" align="center"><?php ?></td>
                        </tr>
                        <div class="clearfix"></div>
                    </table>
                </div>
                <?php endif; ?>
                <div class="page">
                    <?php echo $this->pagination->create_links(); ?>
                </div>  
        </div>
        <div class="footer"></div>
    </body>
</html>        