<p class="bg-success">

<?php if($this->session->flashdata('login_success')): ?>

<?php echo $this->session->flashdata('login_success') ?>	

<?php endif; ?>	



<?php if($this->session->flashdata('user_registered')): ?>

<?php echo $this->session->flashdata('user_registered') ?>	

<?php endif; ?>	


</p>

<p class="bg-danger">

<?php if($this->session->flashdata('login_failed')): ?>

<?php echo $this->session->flashdata('login_failed') ?>	


<?php endif; ?>	


<?php if($this->session->flashdata('no_access')): ?>

<?php echo $this->session->flashdata('no_access') ?>	

<?php endif; ?>	

</p>

<div class="jumbotron">
	<h2 class="text-center">KLF-Ticketing System</h2>
</div>

<?php if(isset($tickets)): ?>

<h1>Tickets</h1>


<table class="table table-bordered">

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

		<td><?php echo  $ticket->title;  ?></td>
		<td><?php echo  $ticket->description;  ?></td>
		<td><a href="<?php echo base_url(); ?>klf_tickets">View</a></td>

		</tr>

		<?php endforeach; ?>	

		

	</tbody>
</table>

<?php endif; ?>