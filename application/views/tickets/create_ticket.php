
<h2>Create Ticket</h2>

<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('klf_tickets/create', $attributes); ?>


<div class="form-group">
	
	<?php echo form_label('Ticket Title'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'title',
			'placeholder' => 'Enter Ticket Title'

		);

	?>

	<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
	<?php echo form_label('Ticket Description'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'description'


		);

	?>

	<?php echo form_textarea($data); ?>

</div>


<div class="form-group">
	

	<?php

		$data = array(

			'class' => 'btn btn-primary',
			'name' => 'submit',
			'value' => 'Create'

		);

	?>

	<?php echo form_submit($data); ?>

</div>



<?php echo form_close(); ?>
