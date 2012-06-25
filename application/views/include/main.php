<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Manpreet Singh Rana's Personal Page</title>
<link rel="stylesheet" href="<?php echo base_url(); ?>ext/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>ext/css/docs.css" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>ext/css/bootstrap-responsive.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
</head>
<body>
<div id="wrapper" class="container-fluid">

<?php $this->load->view('include/header'); ?>

<?php $this->load->view($content); ?>

<?php $this->load->view('include/footer'); ?>

</div>
</body>
<script type="text/javascript" src="<?php echo base_url(); ?>ext/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>ext/js/bootstrap-dropdown.js"></script>
<script type="text/javascript">
	$('.dropdown-toggle').dropdown()
</script>
</html>