<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Survey Form</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/global.css">
</head>
<body>
<div id="container">
	<div class="survey">
		<div class="error">
			<?php if (isset($submit_error)) echo $submit_error; ?>
		</div>
		<form action="<?= base_url() ?>home/register_validation/" method="post">

			<div class="row">
			    <div class="col">
			    	<label>Your Name:</label>
			    </div>
			    <div class="col">
			    	<input class="field" type="text" name="name" placeholder="Bob Dole">
			    </div>
			</div>

			<div class="row">
			    <div class="col">
			    	<label>Dojo Location:</label>
			    </div>
			    <div class="col">
				    <select name="location" class="field">
				    	<option value="Mountain View">Mountain View</option>
				    	<option value="Seattle">Seattle</option>
				    </select>
				</div>
			</div>

	  		<div class="row">
	  			<div class="col">
		  			<label>Favorite Language:</label>
		  		</div>
			    <div class="col">
				    <select name="language" class="field">
				    	<option value="JavaScript">JavaScript</option>
				    	<option value="PHP">PHP</option>
				    	<option value="Ruby">Ruby</option>
				    	<option value="Perl">Perl</option>
				    </select>
			    </div>
	  		</div>
	  		
	  		<label>Comment (optional):</label><br>
	  		<textarea name="comment" cols="50" rows="5"></textarea><br>

	  		<input type="submit" value="Submit">
		</form>
	</div>
</div>
</body>
</html>