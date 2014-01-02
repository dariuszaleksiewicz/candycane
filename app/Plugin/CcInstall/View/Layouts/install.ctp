<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo $title_for_layout; ?> - <?php echo __('CandyCane'); ?></title>
    <?php
        echo $this->Html->css(array(
            '/cc_install/css/install',
        ));
        echo $scripts_for_layout;
    ?>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
</head>

<body>

    <div id="wrapper" class="install">
        <div id="header">
            <h1><?php echo __('Install CandyCane'); ?></h1>
        </div>

        <?php echo $this->Session->flash() ?>

        <div id="main">
            <div id="install">
            <?php
                //$layout->sessionFlash();
                echo $content_for_layout;
            ?>
            </div>
        </div>

        <div id="footer">
			<?php echo __('CandyCane Installer') ?>
		</div>

    </div>


    </body>
</html>
