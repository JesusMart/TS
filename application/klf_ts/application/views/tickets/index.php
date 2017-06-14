<h1>Tickets</h1>

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

		</tr>

		<?php endforeach; ?>	

	</tbody>
</table>