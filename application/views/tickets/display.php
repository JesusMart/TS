<div class="col-xs-9">	

<p class="bg-success">
	
<?php if($this->session->flashdata('mark_done')): ?>

<?php echo $this->session->flashdata('mark_done') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('mark_undone')): ?>

<?php echo $this->session->flashdata('mark_undone') ?>	

<?php endif; ?>	

</p>



<h1>Ticket Title: <?php echo $ticket_data->title; ?></h1>

<p> Date Created: <?php echo $ticket_data->timestamp; ?></p>

<h3>Description</h3>

<p><?php echo $ticket_data->description; ?></p>

<h3>Active History</h3>

<ul>
	
<?php if($completed_history): ?>

	<?php foreach($completed_history as $history): ?>
	
	<li>
	<a href="<?php echo base_url();?>klf_history/display/<?php echo $history->history_id; ?>">
	
		<?php echo $history->desc_history ?>	
	
	</a>	
	</li>	



	<?php endforeach; ?>	
	
	<?php else: ?>
	
	<p>You have not tasks pending</p>


<?php endif; ?>

</ul>


<h3>Completed History</h3>

<ul>
	
<?php if($not_completed_history): ?>

	<?php foreach($not_completed_history as $history): ?>
	
	<li>
	<a href="<?php echo base_url();?>klf_history/display/<?php echo $history->history_id; ?>">
	
		<?php echo $history->desc_history ?>	
	
	</a>	
	</li>	



	<?php endforeach; ?>	
	
	<?php else: ?>
	
	<p>You have not tasks pending</p>


<?php endif; ?>

</ul>	

</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">
		
		<h4>Tickets Actions</h4>
    
    
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_history/create/<?php echo $ticket_data->id_ticket; ?>">Create History</a></li>
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_tickets/edit/<?php echo $ticket_data->id_ticket; ?>">Edit Ticket</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_tickets/delete/<?php echo $ticket_data->id_ticket; ?>">Delete Ticket</a></li> 


</ul>
</div>