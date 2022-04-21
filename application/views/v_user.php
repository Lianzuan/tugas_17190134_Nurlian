<section>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()
?>assets/css/stylebuku.css">
	<h1> <?php echo $judul; ?> </h1>
	<?php foreach ($user as $user) { ?>
	<div>
		<ul>
			<li><?= $user['nama']; ?></li>
			<li><?= $user['email']; ?></li>
			</ul>
			
	</div>
	<?php } ?>
	</section>