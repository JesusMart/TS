<!DOCTYPE html>
<html>
<head>
	<meta charset ="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>

<!-- Menu -->

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">KLF - TS</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>">Home<span class="sr-only">(current)</span></a></li>
        <li ><a href="<?php echo base_url();?>klf_tickets">Tickets<span class="sr-only">(current)</span></a></li>
        <li ><a href="<?php echo base_url();?>klf_users/register">Register<span class="sr-only">(current)</span></a></li>
          </ul> <!-- Maybe comment the line -->
        </li>   <!-- Maybe comment the line -->
      </ul>
<!--       <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form> -->
      <?php if($this->session->userdata('logged_in')): ?>
      <ul class="nav navbar-nav navbar-right">

        

          <li><a href="<?php echo base_url();?>klf_users/logout">Logout</a></li>

        

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

	<?php $this->load->view('users/klf_login_view'); ?>
		
	</div>

	<div class="col-xs-9">

	<?php $this->load->view($main_view); ?>
		
	</div>	

</div>

</body>
</html>