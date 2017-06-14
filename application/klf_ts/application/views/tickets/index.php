<h1>Tickets</h1>

<p class="bg-success">
	
<?php if($this->session->flashdata('ticket_created')): ?>

<?php echo $this->session->flashdata('ticket_created') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('ticket_updated')): ?>

<?php echo $this->session->flashdata('ticket_updated') ?>	

<?php endif; ?>	


<?php if($this->session->flashdata('ticket_deleted')): ?>

<?php echo $this->session->flashdata('ticket_deleted') ?>	

<?php endif; ?>	



</p>

<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>klf_tickets/create">Create Ticket</a>

<table class="table table-hover">

	<thead>
		<tr>
			<th>
				Ticket Title				
			</th>			
			<th>
				Ticket Description
			</th>
		</tr>
	</thead>
	<tbody>
		
		<?php foreach($tickets as $ticket): ?>

		<tr>	

		<?php echo "<td><a href='". base_url() ."klf_tickets/display/". $ticket->id_ticket . "'>" . $ticket->title . "</a></td>"; ?>	

		<?php echo "<td>" . $ticket->description . "</td>"; ?>	

		<td><a class="btn btn-danger" href="<?php echo base_url(); ?>klf_tickets/delete/<?php echo $ticket->id_ticket; ?>"><span class="glyphicon glyphicon-remove"></span></a></td>

		</tr>

		<?php endforeach; ?>	

	</tbody>
</table>