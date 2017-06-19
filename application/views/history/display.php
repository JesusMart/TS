
<div class="col-xs-9">	

<h1><?php echo $history->description ?></h1>	
	
<p>Project Title:<?php echo $ticket_name ?></p>	
	
<p>Created: <?php echo $history->date_time ?></p>	

<p>Status: <?php echo $history->id_status ?></p>		

<h4>Description</h4>
	
<p class="history-description">
	
<?php echo $history->description ?>
	
</p>	
	
</div>	

<div class="col-xs-3 pull-right">
<ul class="list-group">
		
		<h4>History Actions</h4>
    
    
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_history/edit/<?php echo $history->id_history; ?>">Edit</a></li>
		<li class="list-group-item"><a href="<?php echo base_url(); ?>klf_history/delete/<?php echo $history->id_ticket; ?>/<?php echo $history->id_history; ?>">Delete</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url();?>klf_history/mark_complete/<?php echo $history->id_history; ?>">Mark Complete</a></li> 
		<li class="list-group-item"><a href="<?php echo base_url();?>klf_history/mark_incomplete/<?php echo $history->id_history; ?>">Mark Incomplete</a></li>


</ul>
</div>