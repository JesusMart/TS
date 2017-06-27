


<h3><b>Edit</b></h3>

<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('klf_admin/edit_status/'. $status_data->id_status . '', $attributes); ?>

								                    

<div class="form-group">
	
	<?php echo form_label('Status'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'name',
			'value' => $status_data->name

		);

	?>

	<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
	<?php echo form_label('Status Description'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'description',
			'value' => $status_data->description


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
