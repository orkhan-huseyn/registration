<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $title;?></title>

    <link href="<?php echo BASE_DIR;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_DIR;?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo BASE_DIR;?>css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo BASE_DIR;?>css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="<?php echo BASE_DIR;?>css/animate.css" rel="stylesheet">
    <link href="<?php echo BASE_DIR;?>css/style.css" rel="stylesheet">

    <link rel="icon" href="<?php echo BASE_DIR;?>img/icons/favicon.ico">

</head>

<body>

<div id="page-wrapper" style="min-height: 700px;">
    <div class="wrapper wrapper-content">
        <div class="col-sm-6 col-sm-offset-3 ibox" style="position: relative; top: 100px;">
            <div class="ibox-content" style="border-radius: 10px;">
                <div class="text-center animated fadeIn">
                    <div class="row">
                        <button class="btn btn-primary  dim btn-large-dim" type="button"><i class="fa fa-check"></i></button>
                        <h1>Qeydiyyat uğurla başa çatdı!</h1>
                        <div class="col-sm-10 col-sm-offset-1">
                            <p>Hörmətli <?php if (isset($_SESSION['student_full_name'])) { echo $_SESSION['student_full_name']; } ?>, sorğunuz qeydə alındı.
                            Məlumatlarınız yoxlanıldıqdan sonra sizinlər əlaqə saxlanılacaq. 
                            Bizi seçdiyiniz üçün təşəkkürlər! </p>
                        </div>
                        <div class="col-sm-3 col-sm-offset-4" style="position: relative; top: 20px;">
                            <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&show_faces=true&share=true&height=80&appId" 
                            width="500" height="100" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                        </div>
                        <?php 
                            unset($_SESSION['student_full_name']);
                            unset($_SESSION['registered']);
                        ?>
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
<script src="<?php echo BASE_DIR;?>js/jquery-3.1.1.min.js"></script>
<script src="<?php echo BASE_DIR;?>js/bootstrap.min.js"></script>
<script src="<?php echo BASE_DIR;?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo BASE_DIR;?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo BASE_DIR;?>js/inspinia.js"></script>
<script src="<?php echo BASE_DIR;?>js/plugins/pace/pace.min.js"></script>

<!-- Input Mask-->
<script src="<?php echo BASE_DIR;?>js/plugins/jasny/jasny-bootstrap.min.js"></script>

</body>

</html>
