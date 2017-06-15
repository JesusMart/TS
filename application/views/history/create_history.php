


<h2>Create History</h2>

<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('klf_history/create/' . $this->uri->segment(3) . '', $attributes); ?>


<div class="form-group">
	
	<?php echo form_label('Ticket Description'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'description',
			'placeholder' => 'Enter History Description'

		);

	?>

	<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
	<?php echo form_label('Ticket Date Time'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'date_time',
			'type' => 'date'


		);

	?>

	<?php echo form_input($data); ?>

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
