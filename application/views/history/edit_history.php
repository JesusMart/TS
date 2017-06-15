


<h2>Edit History</h2>

<?php $attributes = array('id' => 'edit_history_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('klf_history/edit/' . $this->uri->segment(3) . '', $attributes); ?>


<div class="form-group">
	
	<?php echo form_label('Ticket Description'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'description',
			'value' => $the_history->description

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
			'value' => $the_history->date_time


		);

	?>

	<?php echo form_input($data); ?>

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
