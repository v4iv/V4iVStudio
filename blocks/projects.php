<?php
	//Projects(to be replaced with Database)
	$projects = array('Snippets'=>"Programming Tutorial App for Windows",
					  'Geometry Nightmare 3D'=>"Arcade style space shooter",
					  'Chirkunda Expressions'=>"A website for a local NGO",
					  'Morse'=>"Material Design Morse Code Generator",
					  'Hattrick'=>"Catch the ball in the hat game");
?>
<?php foreach($projects as $project=>$details): ?>
<article>

	<header>
		<h1><?php echo $project; ?></h1>
	</header>
	
	<p><?php echo $details; ?></p>
	
	<footer>
		<p>Download</p>
	</footer>
	
</article>
<?php endforeach; ?>