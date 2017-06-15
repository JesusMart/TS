<div class="col-xs-9">		

<h1>Ticket Title: <?php echo $ticket_data->title; ?></h1>

<p> Date Created: <?php echo $ticket_data->timestamp; ?></p>

<h3>Description</h3>

<p><?php echo $ticket_data->description; ?></p>

<h3>History</h3>

<?php if($completed_history): ?>

	<?php foreach($completed_history as $history): ?>

		<?php echo $history->id_history ?>

	<?php endforeach; ?>	


<?php endif; ?>



</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">
		
		<h4>Tickets Actions</h4>
    
    
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_history/create/<?php echo $ticket_data->id_ticket; ?>">Create History</a></li>
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_tickets/edit/<?php echo $ticket_data->id_ticket; ?>">Edit Ticket</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_tickets/delete/<?php echo $ticket_data->id_ticket; ?>">Delete Ticket</a></li> 


</ul>
</div>