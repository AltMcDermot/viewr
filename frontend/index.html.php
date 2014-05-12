<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width">
	<?php echo $themedirectory; ?>
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
	<nav>
		<ul class="clearfix">
			<li><h1 class="site-title"><?php headline(); ?>.</h1></li>
			<li><?php email(); ?></li>
		</ul>
	</nav>
</header>
<section class="js-masonry">
	<?php 
	// This displays the pictures.
		foreach ($pictures as $picture): ?>
			<!-- <a class="imglink" href="<?php echo $picture['link']; ?>"> -->
				<img src="<?php echo $picture['src']; ?>">
			<!-- </a> -->
		
	<?php endforeach; ?>
</section>
<footer>
	
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="frontend/js/lazyload.min.js"></script>
<script type="text/javascript" src="frontend/js/masonry.min.js"></script>

<script type="text/javascript">
	$(function() {
    $("img").lazyload({effect:"fadeIn"});
});
</script>
</body>
</html>


