<!DOCTYPE html>	

<!-- Special facebook code to show advance layouts on IE -->
<?php echo $this->Facebook->html(); ?>

<head>
<title><?php echo $title_for_layout?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Include external files and scripts here (See HTML helper for more info.) -->
<?php
echo $this->Html->charset();
echo $this->Html->meta('viewport','width=device-width, initial-scale=1');
echo $this->Html->css('http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.css');
echo $this->Html->script('http://code.jquery.com/jquery-1.8.2.min.js');
echo $this->Html->script('http://code.jquery.com/mobile/1.2.0/jquery.mobile-1.2.0.min.js');
?>
</head>
<body>

<!-- jQuery Mobile header -->
<div data-role="page" id="one">

    <div data-role="header">
        <h1><?php echo $title_for_layout?></h1>
    </div><!-- /header -->

<!-- Here's where I want my views to be displayed -->
<?php echo $this->fetch('content'); ?>

<!-- jQuery Mobile footer -->
    <div data-role="footer" data-theme="d">
        <h4>
	@jackdong16</h4>
    </div>
</div>



</body>
	<!-- Special facebook code to show advance layouts on IE -->
    <?php echo $this->Facebook->init(); ?>
    <?php echo $this->element('sql_dump'); ?>
</html>