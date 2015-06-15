<?php
	$team = array('Vaibhav Sharma',
				  'Vineet Patawari',
				  'Pranay Mishra',
				  'Eshpreet Bholla');
?>
<?php foreach($team as $teamMember): ?>
<article>
	<header>
		<h1><?php echo $teamMember; ?></h1>
	</header>
</article>
<?php endforeach ?>