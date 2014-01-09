<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Survey Form</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/global.css">
</head>
<body>
<div id="container">	
	<?php if ($this->session->flashdata('submitted')) {
		echo '<div class="feedback">';
		echo $this->session->flashdata('submitted');
		echo '</div>';
	} ?>
	<div class="results">
		<h2>Submitted Information:</h2>
		<div class="info">
			<div class="col">
				<p>Name:</p> 
			</div>
			<div class="col">
				<p><?= $this->session->userdata('name') ?></p>
			</div>

			<div class="col">
				<p>Dojo Location:</p>
			</div>
			<div class="col">
				<p><?= $this->session->userdata('location') ?></p>
			</div>

			<div class="col">
				<p>Favorite Language:</p>
			</div>
			<div class="col">
				 <p><?= $this->session->userdata('language') ?></p>
			</div>

			<div class="col">
				<p>Comment:</p>
			</div>
			<div class="col">
				<p><?= $this->session->userdata('comment') ?></p>
			</div>
		</div>
		<br>
		<form action="<?= base_url() ?>home" method="post">
		    <input type="submit" value="Go Back">
		</form>
	</div>
</div>
</body>
</html>