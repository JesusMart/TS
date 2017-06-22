


<h2>Edit Priority</h2>

<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('klf_admin/edit_priority/'. $priority_data->id_priority . '', $attributes); ?>

								                    

<div class="form-group">
	
	<?php echo form_label('Priority'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'name',
			'value' => $priority_data->name

		);

	?>

	<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
	<?php echo form_label('Priority Description'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'description',
			'value' => $priority_data->description


		);

	?>

	<?php echo form_textarea($data); ?>

</div>


<div class="form-group">
	

	<?php

		$data = array(

			'class' => 'btn btn-primary',
			'name' => 'submit',
			'value' => 'Update'

		);

	?>

	<?php echo form_submit($data); ?>

</div>


<?php echo form_close(); ?>
