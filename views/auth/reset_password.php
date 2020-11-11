<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url('node_modules/admin-lte/'); ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('node_modules/admin-lte/'); ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('node_modules/admin-lte/'); ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('node_modules/admin-lte/'); ?>dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo site_url(); ?>"><?php echo lang('reset_password_heading');?></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">

    <p class="login-box-msg">
      <?php if (!empty($message)): ?>
        <div class="alert alert-warning"><?php echo $message; ?></div>
      <?php else: ?>
        <div class="alert alert-info"><?php echo sprintf(lang('reset_password_new_password_label'), $min_password_length); ?></div>
      <?php endif; ?>
    </p>

		<?php echo form_open('auth/reset_password/' . $code);?>
      <div class="form-group has-feedback">
				<?php echo form_input(array_merge($new_password, array('class' => 'form-control', 'placeholder' => sprintf(lang('reset_password_new_password_label'), $min_password_length))));?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>

      <div class="form-group has-feedback">
      	<?php echo form_input(array_merge($new_password_confirm, array('class' => 'form-control', 'placeholder' => lang('reset_password_new_password_confirm_label'))));?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

			<?php echo form_input($user_id);?>
			<?php echo form_hidden($csrf); ?>

      <div class="row">
        <div class="col-xs-4 pull-right">
          <?php echo form_submit('submit', lang('reset_password_submit_btn'), 'class="btn btn-primary btn-block btn-flat"');?>
        </div>
      </div>
		<?php echo form_close();?>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('node_modules/admin-lte/'); ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('node_modules/admin-lte/'); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>