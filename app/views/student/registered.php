<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title;?></title>

    <link href="<?php echo URL;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL;?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo URL;?>css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo URL;?>css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="<?php echo URL;?>css/animate.css" rel="stylesheet">
    <link href="<?php echo URL;?>css/style.css" rel="stylesheet">

    <link rel="icon" href="<?php echo URL;?>img/icons/favicon.ico">

</head>

<body>

<div id="page-wrapper">
    <div class="wrapper wrapper-content">
        <div class="ibox">
            <div class="ibox-content">
                <div class="middle-box text-center animated fadeInRightBig">
                    <h3 class="font-bold">Qeydiyyat uğurla başa çatdı!</h3>
                    <div class="error-desc">
                        Hörmətli <?php echo $student->last_name.' '.$student->first_name;?>
                        <br/><a href="index.html" class="btn btn-primary m-t">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer" style="text-align: center">
        <div>
            <strong>Copyright</strong> &copy; ASAN IT &amp; Təlim Mərkəzi | 2017
        </div>
    </div>
</div>



<!-- Mainly scriptss -->
<script src="<?php echo URL;?>js/jquery-3.1.1.min.js"></script>
<script src="<?php echo URL;?>js/bootstrap.min.js"></script>
<script src="<?php echo URL;?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo URL;?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo URL;?>js/inspinia.js"></script>
<script src="<?php echo URL;?>js/plugins/pace/pace.min.js"></script>

<!-- Input Mask-->
<script src="<?php echo URL;?>js/plugins/jasny/jasny-bootstrap.min.js"></script>

</body>

</html>
