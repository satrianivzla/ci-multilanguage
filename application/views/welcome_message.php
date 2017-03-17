<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<![endif]-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" media="screen" type="text/css" href="assets/css/welcome.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link rel="shortcut icon" href="assets/favicon.ico" /> 	
</head>
<body>

<div id="container">
	<h1><?php echo $this->lang->line('heading_one');  ?> <?php echo $this->session->userdata('lang');  ?> </h1>

 
		<?php echo form_open('Welcome/setLanguage'); ?>
		<div class='pull-right'>
			<select name="lang" id="lang">
				<option class="c_usa" value="en"<?php if($this->session->userdata('lang') == 'en') { echo " selected='selected'"; } ?>>English</option>
				<option class="c_chinese" value="cn"<?php if($this->session->userdata('lang') == 'cn') { echo " selected='selected'"; } ?>>Chinese</option>
		   	    <option class="c_spanish" value="es"<?php if($this->session->userdata('lang') == 'es') { echo " selected='selected'"; } ?>>Spanish</option>	
			</select>
        </div>
				<br /><br />
		<?php echo form_close(); ?> 
	

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-3.1.1.min.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/multilenguaje.js"); ?>"></script>
</body>
</html>
