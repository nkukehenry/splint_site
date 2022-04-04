<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Forget Password</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>">

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/datepicker3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/style.css">
	<style>
		.login-page {
			background: #333;
		}
		.login-logo {
			color: #fff;
		}
	</style>

</head>

<body class="hold-transition login-page sidebar-mini" style="background-image: url(<?php echo base_url(); ?>public/uploads/login-bg/slider-3.webp); background-repeat: no-repeat; background-size: cover;">

<div class="login-box">
	<div class="login-logo">
		<b>FITSPA - Admin Panel</b>
	</div>
  	<div class="login-box-body">
    	<h4 class="login-box-msg">Reset Password</h4>
    
	    <?php
        if($this->session->flashdata('error')) {
            echo '<div class="error">'.$this->session->flashdata('error').'</div>';
        }
        if($this->session->flashdata('success')) {
            echo '<div class="success">'.$this->session->flashdata('success').'</div>';
        }
        ?>

		<?php echo form_open(base_url().'admin/forget-password');?>
			<div class="form-group has-feedback" style="background-color:#0275d8!important;">
				<input class="form-control" placeholder="Email address" name="email" type="text" autocomplete="off" autofocus>
			</div>
			<div class="row">
				<div class="col-xs-8" style="padding-top:7px;"><a href="<?php echo base_url(); ?>admin/login" style="color:red;">back to login page</a></div>
				<div class="col-xs-4">
					<input type="submit" class="btn btn-primary btn-block btn-flat login-button" name="form1" value="Submit">
				</div>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>


<script src="<?php echo base_url(); ?>public/admin/js/jquery-2.2.3.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/select2.full.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.inputmask.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.inputmask.extensions.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/moment.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/fastclick.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/app.min.js"></script>
<script src="<?php echo base_url(); ?>public/admin/js/demo.js"></script>

<script>
    var isNS = (navigator.appName == "Netscape") ? 1 : 0;
    if(navigator.appName == "Netscape") 
      document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
    function mischandler(){
      return false;
    }
    function mousehandler(e){
      var myevent = (isNS) ? e : event;
      var eventbutton = (isNS) ? myevent.which : myevent.button;
      if((eventbutton==2)||(eventbutton==3)) return false;
    }
    document.oncontextmenu = mischandler;
    document.onmousedown = mousehandler;
    document.onmouseup = mousehandler;
    
    $(document).keydown(function (event) {
        if (event.keyCode == 123) {
            return false;
        }
        else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
            return false;
        }
    });
    document.onkeydown = function(e) {
        if (e.ctrlKey && (e.keyCode === 85 || e.keyCode === 117)) { return false;
        } else {
            return true;
        }
    };
    $(document).keypress("u",function(e) {
      if(e.ctrlKey)
      {
    return false;
    }
    else
    {
    return true;
    }
    });

</script>

</body>
</html>