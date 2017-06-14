<div class="col-xs-9">		

<h1>Ticket Title: <?php echo $ticket_data->title; ?></h1>

<p> Date Created: <?php echo $ticket_data->timestamp; ?></p>

<h3>Description</h3>

<p><?php echo $ticket_data->description; ?></p>

</div>

<div class="col-xs-3 pull-right">
<ul class="list-group">
		
		<h4>Tickets Actions</h4>

		<li class="list-group-item"><a href="">Create Activity</a></li> 
		<li class="list-group-item"><a href="">Edit Ticket</a></li>
		<li class="list-group-item"><a href="">Delete Ticket</a></li>


</ul>
</div>