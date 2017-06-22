


<h2>Edit Category</h2>

<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('klf_admin/edit_category/'. $category_data->id_category . '', $attributes); ?>

								                    

<div class="form-group">
	
	<?php echo form_label('Category'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'name',
			'value' => $category_data->name

		);

	?>

	<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
	<?php echo form_label('Category Description'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'description',
			'value' => $category_data->description


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
