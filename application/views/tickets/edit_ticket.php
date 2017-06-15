


<h2>Edit Ticket</h2>

<?php $attributes = array('id' => 'create_form', 'class' => 'form_horizontal'); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('klf_tickets/edit/'. $ticket_data->id_ticket . '', $attributes); ?>


<div class="form-group">
	
	<?php echo form_label('Ticket Title'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'title',
			'value' => $ticket_data->title

		);

	?>

	<?php echo form_input($data); ?>

</div>


<div class="form-group">
	
	<?php echo form_label('Ticket Description'); ?>

	<?php

		$data = array(

			'class' => 'form-control',
			'name' => 'description',
			'value' => $ticket_data->description


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
