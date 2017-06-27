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

	<!--
	<h2 class="text-center">KLF-Ticketing System</h2>
	-->

</div>

<!-- Tickets

<?php if(isset($tickets)): ?>

<div class="panel panel-primary">
<div class="panel-heading"><h3>Tickets</h3></div>	

<div class="panel-body">		
	
<ul class="list-group">
		<?php foreach($tickets as $ticket): ?>
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_tickets/display/<?php echo $ticket->id_ticket ?>">
		
			<?php echo  $ticket->title;  ?>
		
		</a>

		</li>
	
		<?php endforeach; ?>	



<?php endif; ?>

</ul>		
</div>
</div>

-->

<!-- History of tasks
<?php if(isset($history)): ?>

<h1>History</h1>


<table class="table table-bordered">

	<thead>
		<tr>
			<th>
				History Description				
			</th>			
			<th>
				History Date Time 
			</th>
		</tr>
	</thead>
	<tbody>

		
		
		<?php foreach($history as $hist): ?>

		<tr>	

		<td><?php echo  $hist->description;  ?></td>
		<td><?php echo  $hist->date_time;  ?></td>
		<td><a href="<?php echo base_url(); ?>klf_history/display/<?php echo $hist->id_history ?>">View</a></td>

		</tr>

		<?php endforeach; ?>	

		

	</tbody>
</table>

<?php endif; ?>

-->