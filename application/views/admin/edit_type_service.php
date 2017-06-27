


<h2>Edit</h2>

<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('klf_admin/edit_type_service/'. $type_service_data->id_type_service . '', $attributes); ?>

								                    

<div class="form-group">
	
	<?php echo form_label('Type Service'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'name',
			'value' => $type_service_data->name

		);

	?>

	<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
	<?php echo form_label('Type Service Description'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'description',
			'value' => $type_service_data->description


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
