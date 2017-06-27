<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js-webshim/minified/polyfiller.js"></script>
</head>
<body>

<!-- Menu -->

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!--
      <a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="imagen" width="30" heigth="30" src="https://cdn1.iconfinder.com/data/icons/MetroStation-PNG/128/MB__home.png"></a>
      -->

      <a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="imagen" width="55" heigth="55" 
      src="<?php echo base_url(); ?>assets/images/klf_media.jpg"></a>

    </div>



    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a></li>
        <li ><a href="<?php echo base_url();?>klf_tickets">Tickets<span class="sr-only">(current)</span></a></li>
         <!--
         <li ><a href="<?php echo base_url();?>klf_users/register">Register<span class="sr-only">(current)</span></a></li> 
         -->
		  
		<!-- dropdown -->  
		  
        
        <?php if($this->session->userdata('username') == "Admin"): ?>  
          

          
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li ><a href="<?php echo base_url();?>klf_users/register">Users<span class="sr-only">(current)</span></a></li>
            <li><a href="<?php echo base_url();?>klf_admin/index_department">Departments</a></li>
            <li><a href="<?php echo base_url();?>klf_admin/index_software_property">Soft.Property</a></li>
                                                          
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo base_url();?>klf_admin/index_type_service">Type Services</a></li>
			<li><a href="<?php echo base_url();?>klf_admin/index_category">Categories</a></li>  
            <li><a href="<?php echo base_url();?>klf_admin/index_priority">Priorities</a></li>
			<li><a href="<?php echo base_url();?>klf_admin/index_status">Status</a></li>  			  
            <li role="separator" class="divider"></li>

		  
		  
		<!--  dropdown    -->    
		  
          </ul> <!-- Maybe comment the line -->
        </li>   <!-- Maybe comment the line -->
          
        <?php endif; ?>
          
          
      </ul>
<!--       <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->


          <?php if($this->session->userdata('logged_in')): ?>



            <ul class="nav navbar-nav navbar-right">
				
		<!-- dropdown -->  				
				
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
          <?php echo "Logged in as " . $this->session->userdata('username'); ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li role="separator" class="divider"></li>
            <li><a href="#">Change Password</a></li>
            <li role="separator" class="divider"></li>            
			      <li><a href="<?php echo base_url();?>klf_users/logout">Logout</a></li>
            <li role="separator" class="divider"></li>
          </ul> <!-- Maybe comment the line -->
        </li>   <!-- Maybe comment the line -->
				
		<!--  dropdown    -->    				
				
				
				
				
				
				
             <!-- 
              <li><a href="<?php //echo base_url();?>klf_users/logout">Logout</a></li>
              -->

            </ul> <!-- Maybe comment the line -->

          <?php else: ?>

            <ul class="nav navbar-nav navbar-right">

              <li><a href="<?php echo base_url();?>klf_users/toconnect">Login</a></li>

            </ul> <!-- Maybe comment the line -->



        <?php endif; ?> 
        </li>   <!-- Maybe comment the line -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!-- Fin de Menu -->

<div class="container">
	
	<div class="col-xs-3">

  <!--
  <h4>
  <?php if($this->session->userdata('username')): ?>
  <?php echo "You are logged in as " . $this->session->userdata('username'); ?> 
  <?php endif; ?>
  </h4>
  --> 	


  <?php if(isset($connect_est) and $connect_est): ?>

	     <?php $this->load->view('users/klf_login_view'); ?>

  <?php endif; ?>

  <?php if(!isset($left_view)): ?>

      <?php $left_view = "layouts/empty"; ?>

  <?php endif; ?>


  <?php $this->load->view($left_view); ?>
		
	</div>

	<div class="col-xs-9">

	<?php $this->load->view($main_view); ?>
		
	</div>	

</div>

</body>
</html>