<?php
define('COMPANY_NAME', 'Company Name');
define('DEV_NAME', 'Developer Name');
define('DEV_URL', 'http://example.com');
define('PROJECT_NAME', 'Project Name');
define('PROJECT_DESCRIPTION', 'Project description');
?>

<html>
<head>
	<link rel="stylesheet" href="reset.css" />
	<link rel="stylesheet" href="one-page.css" />
	<title><?=PROJECT_NAME?></title>
</head>
<body>
<div id="content">
<header class="clearfix">
	<h1 id="project_name"><?=PROJECT_NAME?></h1>
	<h2 id="company_name"><?=COMPANY_NAME?></h2>
</header>
<h3 id="project_description"><?=PROJECT_DESCRIPTION?></h3>

<ul class="action_buttons">
	<li><a class="large green button" >Action 1</a></li>
	<li><a class="large gray button" >Action 2</a></li>
</ul>

<form>
	<fieldset>
		<label for="option-1">Option 1: </label>
		<input type="text" name="option-1" />
		<input type="submit" value="Save" />
	</fieldset>
</form>

<p>Mauris pulvinar ante in tortor posuere vel auctor est rutrum. Nam suscipit sodales lectus, imperdiet sagittis quam auctor eu. Proin vitae erat quis mauris dictum pharetra. Proin adipiscing, libero ut lobortis fermentum, massa risus consectetur mauris, vestibulum sollicitudin tellus arcu at enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc sit amet tellus suscipit lacus pharetra venenatis.</p> 
<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam quis est urna, vel ornare eros. Sed non turpis urna. In ac quam dui, sed gravida ipsum. Proin a dui quam. Aliquam urna nisi, pulvinar id viverra at, malesuada sit amet augue.</p>


</div>
<footer>
<p>Developed by <a href="<?=DEV_URL?>"><?=DEV_NAME?></a>.</p>
</footer>

</body>
</html>