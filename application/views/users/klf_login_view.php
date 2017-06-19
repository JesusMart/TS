<?php if($this->session->userdata('logged_in')): ?>

<!--  Btn Logout
<h2>Logout</h2>
  Btn Logout -->

<!--  Btn Logout
<?php //echo form_open('klf_users/logout'); ?>
  Btn Logout -->

<p>
<?php if($this->session->userdata('username')): ?>

<?php echo "You are logged in as " . $this->session->userdata('username'); ?>	
<?php endif; ?>
</p>

<!--  Btn Logout
<?php

	//$data = array(

	//	'class' => 'btn btn-primary',
	//	'name' => 'submit',
	//	'value' => 'Logout'

	//);

?>

<?php //echo form_submit($data); ?>

<?php //echo form_close(); ?>

  Btn Logout -->

<?php else: ?>

<h2>Login Form</h2>

<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal'); ?>

<?php if($this->session->flashdata('errors')): ?>

<?php echo $this->session->flashdata('errors'); ?>

<?php endif; ?>

<?php echo form_open('klf_users/login', $attributes); ?>

<div class="form-group">
	
	<?php echo form_label('Username'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'username',
			'placeholder' => 'Username'

		);

	?>

	<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
	<?php echo form_label('Password'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'password',
			'placeholder' => 'Password'

		);

	?>

	<?php echo form_password($data); ?>

</div>


<div class="form-group">
	
	<?php echo form_label('Confirm Password'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'confirm_password',
			'placeholder' => 'Confirm'

		);

	?>

	<?php echo form_password($data); ?>

</div>


<div class="form-group">
	

	<?php

		$data = array(

			'class' => 'btn btn-primary',
			'name' => 'submit',
			'value' => 'Login'

		);

	?>

	<?php echo form_submit($data); ?>

</div>



<?php echo form_close(); ?>

<?php endif; ?>