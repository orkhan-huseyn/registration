<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Qeydiyyat | Devcenter</title>

    <link href="<?php echo URL;?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo URL;?>font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo URL;?>css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="<?php echo URL;?>css/plugins/steps/jquery.steps.css" rel="stylesheet">
    <link href="<?php echo URL;?>css/animate.css" rel="stylesheet">
    <link href="<?php echo URL;?>css/style.css" rel="stylesheet">

    <link rel="icon" href="<?php echo URL;?>img/icons/favicon.ico">

    <style>

        .wizard > .content > .body  { position: relative; }

        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }

    </style>

</head>

<body>

<div id="page-wrapper">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="ibox">
                    <div class="ibox-content">
                        <h2 align="center">
                            Tələbə Qeydiyyat Formu
                        </h2>
                        <br/>
                        <form id="form" method="post" action="/registration/public/students/post" enctype="multipart/form-data" class="wizard-big">
<!--                            <h1>Şəxsi</h1>-->
<!--                            <fieldset>-->
<!--                                <h2>Şəxsi məlumatlar</h2><br/>-->
<!--                                <div class="row">-->
<!--                                    <div class="col-lg-6">-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Ş/V no *</label>-->
<!--                                            <input id="serial" name="serial_id" type="text" class="form-control required">-->
<!--                                            <input type="hidden" name="student_id" value="0"/>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Ad *</label>-->
<!--                                            <input id="first_name" name="first_name" type="text" class="form-control required">-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Soy ad *</label>-->
<!--                                            <input id="last_name" name="last_name" type="text" class="form-control required">-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Ata adı *</label>-->
<!--                                            <input id="fathers_name" name="fathers_name" type="text" class="form-control required">-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Doğum tarixi *</label>-->
<!--                                            <div class="row">-->
<!--                                                <div class="col-lg-4">-->
<!--                                                    <select id="birth_day" class="form-control" name="birth_day">-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                                <div class="col-lg-4">-->
<!--                                                    <select id="birth_month" class="form-control" name="birth_month">-->
<!--                                                        <option value="01">Yanvar</option>-->
<!--                                                        <option value="02">Fevral</option>-->
<!--                                                        <option value="03">Mart</option>-->
<!--                                                        <option value="04">Aprel</option>-->
<!--                                                        <option value="05">May</option>-->
<!--                                                        <option value="06">İyun</option>-->
<!--                                                        <option value="07">İyul</option>-->
<!--                                                        <option value="08">Avqust</option>-->
<!--                                                        <option value="09">Sentyabr</option>-->
<!--                                                        <option value="10">Oktyabr</option>-->
<!--                                                        <option value="11">Noyabr</option>-->
<!--                                                        <option value="12">Dekabr</option>-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                                <div class="col-lg-4">-->
<!--                                                    <select id="birth_year" class="form-control" name="birth_year">-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Doğum yeri *</label>-->
<!--                                            <input type="text" name="birth_place" class="form-control required">-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <div class="row">-->
<!--                                                <div class="col-lg-6">-->
<!--                                                    <label>Cinsi *</label>-->
<!--                                                    <select name="gender" class="form-control">-->
<!--                                                        <option value="Kişi">Kişi</option>-->
<!--                                                        <option value="Qadın">Qadın</option>-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                                <div class="col-lg-6">-->
<!--                                                    <label>Ailə vəziyyəti *</label>-->
<!--                                                    <select name="married" class="form-control">-->
<!--                                                        <option value="0">Subay</option>-->
<!--                                                        <option value="1">Evli</option>-->
<!--                                                    </select>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class="col-lg-6">-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Mobil Telefon *</label>-->
<!--                                            <input name="phone_mobile" class="form-control required">-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Ev Telefonu *</label>-->
<!--                                            <input name="phone_home" class="form-control required">-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>E-poçt *</label>-->
<!--                                            <input id="email" name="email" type="text" class="form-control required email">-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Ünvan *</label>-->
<!--                                            <input id="address" name="address" type="text" class="form-control required">-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Facebook ünvanı *</label>-->
<!--                                            <input id="facebook" name="facebook" type="text" class="form-control required">-->
<!--                                        </div>-->
<!--                                        <div class="form-group">-->
<!--                                            <label>Haqqında *</label>-->
<!--                                            <textarea name="about" rows="5" class="form-control required" type="text" value="" style="max-width:100%; min-width: 100%;"></textarea>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                            </fieldset>-->
<!--                            <h1>Təhsil</h1>-->
<!--                            <fieldset>-->
<!--                                <h2>Təhsil Məlumatları</h2><br/>-->
<!--                                <div class="row">-->
<!--                                    <div id="education_info" class="form-horizontal">-->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">Təhsil pilləsi</label>-->
<!--                                            <div class="col-sm-9"><input name="education_level[]" class="form-control required" type="text"></div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">Təhsil müəssisəsi</label>-->
<!--                                            <div class="col-sm-9"><input name="institution[]" class="form-control required" type="text"></div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">Təhsil aldığı ixtisas</label>-->
<!--                                            <div class="col-sm-9"><input name="major[]" class="form-control required" type="text"></div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">Başladığı il</label>-->
<!--                                            <div class="col-sm-3">-->
<!--                                                <select class="form-control" name="start_year[]">-->
<!--                                                    <option value="2000">2000</option>-->
<!--                                                    <option value="2001">2001</option>-->
<!--                                                    <option value="2002">2002</option>-->
<!--                                                    <option value="2003">2003</option>-->
<!--                                                    <option value="2004">2004</option>-->
<!--                                                    <option value="2005">2005</option>-->
<!--                                                    <option value="2006">2006</option>-->
<!--                                                    <option value="2007">2007</option>-->
<!--                                                    <option value="2008">2008</option>-->
<!--                                                    <option value="2009">2009</option>-->
<!--                                                    <option value="2010">2010</option>-->
<!--                                                    <option value="2011">2011</option>-->
<!--                                                    <option value="2012">2012</option>-->
<!--                                                    <option value="2013">2013</option>-->
<!--                                                    <option value="2014">2014</option>-->
<!--                                                    <option value="2015">2015</option>-->
<!--                                                    <option value="2016">2016</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!---->
<!--                                            <label class="col-sm-3 control-label">Bitirdiyi il</label>-->
<!--                                            <div class="col-sm-3">-->
<!--                                                <select class="form-control" name="end_year[]">-->
<!--                                                    <option value="2000">2000</option>-->
<!--                                                    <option value="2001">2001</option>-->
<!--                                                    <option value="2002">2002</option>-->
<!--                                                    <option value="2003">2003</option>-->
<!--                                                    <option value="2004">2004</option>-->
<!--                                                    <option value="2005">2005</option>-->
<!--                                                    <option value="2006">2006</option>-->
<!--                                                    <option value="2007">2007</option>-->
<!--                                                    <option value="2008">2008</option>-->
<!--                                                    <option value="2009">2009</option>-->
<!--                                                    <option value="2010">2010</option>-->
<!--                                                    <option value="2011">2011</option>-->
<!--                                                    <option value="2012">2012</option>-->
<!--                                                    <option value="2013">2013</option>-->
<!--                                                    <option value="2014">2014</option>-->
<!--                                                    <option value="2015">2015</option>-->
<!--                                                    <option value="2016">2016</option>-->
<!--                                                    <option value="2017">2017</option>-->
<!--                                                    <option value="2018">2018</option>-->
<!--                                                    <option value="2019">2019</option>-->
<!--                                                    <option value="2020">2020</option>-->
<!--                                                    <option value="2021">2021</option>-->
<!--                                                    <option value="2022">2022</option>-->
<!--                                                    <option value="2023">2023</option>-->
<!--                                                    <option value="2024">2024</option>-->
<!--                                                    <option value="2025">2025</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="hr-line-dashed"></div>-->
<!--                                    </div>-->
<!--                                    <button type="button" onclick="addEducation()" class="btn btn-primary btn-circle col-md-offset-6"><i class="fa fa-plus"></i></button>-->
<!--                                </div>-->
<!--                            </fieldset>-->
<!---->
<!--                            <h1>Təcrübə</h1>-->
<!--                            <fieldset>-->
<!--                                <h2>İş və ya Könüllülük Təcrübəsi</h2><br/>-->
<!--                                <div class="container-fluid">-->
<!--                                    <div id="experience" class="form-horizontal">-->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">İş / təcrübə yeri</label>-->
<!--                                            <div class="col-sm-9"><input name="company[]" class="form-control" type="text"></div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">Vəzifə</label>-->
<!--                                            <div class="col-sm-9"><input name="position[]" class="form-control" type="text"></div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">Başlama tarixi</label>-->
<!--                                            <div class="col-sm-3"><input type="text" name="start_date[]" class="form-control" data-mask="99/99/9999"></div>-->
<!---->
<!--                                            <label class="col-sm-3 control-label">Bitirmə tarixi </label>-->
<!--                                            <div class="col-sm-3"><input type="text" name="end_date[]" class="form-control" data-mask="99/99/9999"></div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">İş haqqında məlumat</label>-->
<!--                                            <div class="col-sm-9"><textarea name="description[]" class="form-control" style="min-width:100%; max-width:100%;" type="text"></textarea></div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="hr-line-dashed"></div>-->
<!--                                    </div>-->
<!--                                    <button type="button" onclick="addjob()" class="btn btn-primary btn-circle col-md-offset-6"><i class="fa fa-plus"></i></button>-->
<!--                                </div>-->
<!--                            </fieldset>-->
<!---->
<!--                            <h1>IT və Xarici Dil</h1>-->
<!--                            <fieldset>-->
<!--                                <div class="container-fluid">-->
<!--                                    <div class="form-horizontal">-->
<!--                                        <div class="form-group">-->
<!--                                            <h2>Xarici dil bilikləri</h2>-->
<!--                                            <div class="hr-line-dashed"></div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group" id="lang_knowledge">-->
<!--                                            <div class="col-sm-3" style="margin-bottom: 10px;">-->
<!--                                                <select name="lang[]" class="form-control">-->
<!--                                                    <option value="Rus">Rus</option>-->
<!--                                                    <option value="Türk">Türk</option>-->
<!--                                                    <option value="İngilis">İngilis</option>-->
<!--                                                    <option value="Ərəb">Ərəb</option>-->
<!--                                                    <option value="Fars">Fars</option>-->
<!--                                                    <option value="Alman">Alman</option>-->
<!--                                                    <option value="İtalyan">İtalyan</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                            <div class="col-sm-8" style="margin-bottom: 10px;">-->
<!--                                                <select name="lang_level[]" class="form-control">-->
<!--                                                    <option value="Zəif">Zəif</option>-->
<!--                                                    <option value="Orta">Orta</option>-->
<!--                                                    <option value="Əla">Əla</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                            <div class="col-sm-1">-->
<!--                                                <button onclick="addLang()" class="btn btn-primary btn-circle" type="button">-->
<!--                                                    <i class="fa fa-plus"></i>-->
<!--                                                </button>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!---->
<!--                                        <br>-->
<!---->
<!--                                        <div class="form-group">-->
<!--                                            <h2>İT bilikləri</h2>-->
<!--                                            <div class="hr-line-dashed"></div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div id="it_knowledge" class="form-group">-->
<!--                                            <div class="col-sm-3" style="margin-bottom: 10px;">-->
<!--                                                <input type="text" class="form-control" name="it[]">-->
<!--                                            </div>-->
<!--                                            <div class="col-sm-8" style="margin-bottom: 10px;">-->
<!--                                                <select name="it_level[]" class="form-control">-->
<!--                                                    <option value="Zəif">Zəif</option>-->
<!--                                                    <option value="Orta">Orta</option>-->
<!--                                                    <option value="Əla">Əla</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                            <div class="col-sm-1">-->
<!--                                                <button onclick="addItKnowldge()" class="btn btn-primary btn-circle" type="button">-->
<!--                                                    <i class="fa fa-plus"></i>-->
<!--                                                </button>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </fieldset>-->
<!--                            <h1>Ailə</h1>-->
<!--                            <fieldset>-->
<!--                                <h2>Ailə vəziyyəti</h2>-->
<!--                                <div class="container-fluid">-->
<!--                                    <div id="family_tab" class="form-horizontal">-->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">Qohumluq dərəcəsi</label>-->
<!--                                            <div class="col-sm-6">-->
<!--                                                <select name="member_relation[]" class="form-control">-->
<!--                                                    <option value="Ata">Ata</option>-->
<!--                                                    <option value="Ana">Ana</option>-->
<!--                                                    <option value="Bacı">Bacı</option>-->
<!--                                                    <option value="Qardaş">Qardaş</option>-->
<!--                                                    <option value="Ər">Ər</option>-->
<!--                                                    <option value="Arvad">Arvad</option>-->
<!--                                                    <option value="Qayınana">Qayınana</option>-->
<!--                                                    <option value="Qayınata">Qayınata</option>-->
<!--                                                    <option value="Oğul">Oğul</option>-->
<!--                                                    <option value="Qız">Qız</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">Tam adı</label>-->
<!--                                            <div class="col-sm-6"><input name="member_full_name[]" class="form-control" type="text"></div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">Doğum yeri və tarixi</label>-->
<!--                                            <div class="col-sm-6"><input name="member_birth_info[]" class="form-control" type="text"></div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">İş yeri və vəzifəsi</label>-->
<!--                                            <div class="col-sm-6"><input name="member_job_position[]"class="form-control" type="text"></div>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="form-group">-->
<!--                                            <label class="col-sm-3 control-label">Ünvan</label>-->
<!--                                            <div class="col-sm-6"><input name="member_address[]" class="form-control" type="text"></div>-->
<!--                                        </div>-->
<!--                                        <br>-->
<!--                                        <div class="hr-line-dashed"></div>-->
<!--                                    </div>-->
<!--                                    <button type="button" onclick="addmember()" class="btn btn-primary btn-circle col-md-offset-6"><i class="fa fa-plus"></i></button>-->
<!--                                </div>-->
<!--                            </fieldset>-->
                            <h1>Yekun</h1>
                            <fieldset>
                                <h2>Yekunlaşdır</h2>
                                <div class="container-fluid">
                                    <div class="form-horizontal">
                                        <div class="form-group">
                                            <div class="col-sm-3">
                                                <img id="img" class="img-circle" src="<?php echo URL;?>img/profile/default.jpg"
                                                     width="200" height="200" alt="your image" />
                                            </div>
                                            <div class="col-sm-5">
                                                <label>Qeydiyyatdan keçmək istədiyiniz kursu seçin</label>
                                                <select onchange="post()" name="course" class="form-control">
                                                    <?php foreach ($courses as $course) { ?>
                                                        <option class="opt" value="<?php echo $course->course_id;?>"><?php echo $course->course_name;?></option>
                                                    <?php } ?>
                                                </select>
                                                <div id="course_desc">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-4">
                                                <span class="btn btn-success btn-file">
                                                    Profil Şəkli Seçin<input onchange="readURL(this)" name="profile_img" class="form-control" type='file' id="imgInp" />
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="footer" style="text-align: center">
        <div>
            <strong>Copyright</strong> ASAN IT &amp; Development Center &copy; 2016
        </div>
    </div>
</div>



<!-- Mainly scripts -->
<script src="<?php echo URL;?>js/jquery-2.1.1.js"></script>
<script src="<?php echo URL;?>js/bootstrap.min.js"></script>
<script src="<?php echo URL;?>js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo URL;?>js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo URL;?>js/inspinia.js"></script>
<script src="<?php echo URL;?>js/plugins/pace/pace.min.js"></script>

<!-- Input Mask-->
<script src="<?php echo URL;?>js/plugins/jasny/jasny-bootstrap.min.js"></script>

<!-- Steps -->
<script src="<?php echo URL;?>js/plugins/staps/jquery.steps.min.js"></script>

<!-- Jquery Validate -->
<script src="<?php echo URL;?>js/plugins/validate/jquery.validate.min.js"></script>

<script type="text/javascript">
    var edu = 2;

    function deled(num)
    {
        $('#edu'+num).remove();
        edu--;
    }

    function addEducation()
    {
        $('#education_info').append('<div id="edu'+edu+'"><div class="form-group"><button onclick="deled(' + edu +')" class="btn btn-danger btn-circle pull-right">' +
            '<i class="fa fa-times"></i>' +
            '</button>' +
            '</div><div class="form-group">' +
            '<label class="col-sm-3 control-label">Təhsil pilləsi</label>' +
            '<div class="col-sm-9"><input name="education_level[]" class="form-control required" type="text"></div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-3 control-label">Təhsil müəssisəsi</label>' +
            '<div class="col-sm-9"><input name="institution[]" class="form-control required" type="text"></div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-3 control-label">Təhsil aldığı ixtisas</label>' +
            '<div class="col-sm-9"><input name="major[]" class="form-control required" type="text"></div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-3 control-label">Başladığı il</label>' +
            '<div class="col-sm-3">' +
            '<select class="form-control" name="start_year[]">' +
            '<option value="2000">2000</option>' +
            '<option value="2001">2001</option>' +
            '<option value="2002">2002</option>' +
            '<option value="2003">2003</option>' +
            '<option value="2004">2004</option>' +
            '<option value="2005">2005</option> ' +
            '<option value="2006">2006</option> ' +
            '<option value="2007">2007</option> ' +
            '<option value="2008">2008</option> ' +
            '<option value="2009">2009</option> ' +
            '<option value="2010">2010</option> ' +
            '<option value="2011">2011</option> ' +
            '<option value="2012">2012</option> ' +
            '<option value="2013">2013</option> ' +
            '<option value="2014">2014</option> ' +
            '<option value="2015">2015</option> ' +
            '<option value="2016">2016</option> ' +
            '</select> ' +
            '</div>' +
            '<label class="col-sm-3 control-label">Bitirdiyi il</label>' +
            '<div class="col-sm-3">' +
            '<select class="form-control" name="end_year[]">' +
            '<option value="2000">2000</option>' +
            '<option value="2001">2001</option>' +
            '<option value="2002">2002</option>' +
            '<option value="2003">2003</option>' +
            '<option value="2004">2004</option>' +
            '<option value="2005">2005</option>' +
            '<option value="2006">2006</option>' +
            '<option value="2007">2007</option>' +
            '<option value="2008">2008</option>' +
            '<option value="2009">2009</option>' +
            '<option value="2010">2010</option>' +
            '<option value="2011">2011</option>' +
            '<option value="2012">2012</option>' +
            '<option value="2013">2013</option>' +
            '<option value="2014">2014</option>' +
            '<option value="2015">2015</option>' +
            '<option value="2016">2016</option>' +
            '<option value="2017">2017</option>' +
            '<option value="2018">2018</option>' +
            '<option value="2019">2019</option>' +
            '<option value="2020">2020</option>' +
            '<option value="2021">2021</option>' +
            '<option value="2022">2022</option>' +
            '<option value="2023">2023</option>' +
            '<option value="2024">2024</option>' +
            '<option value="2025">2025</option>' +
            '</select>' +
            '</div>' +
            '</div>' +
            '<div class="hr-line-dashed"></div>' +
            '</div>');
        edu++;
    }

    var job = 2;

    function deljob(num)
    {
        $('#job'+num).remove();
        job--;
    }

    function addjob()
    {
        $('#experience').append('<div id="job'+job+'">' +
            '<div class="form-group"><button onclick="deljob('+job+')" class="pull-right btn btn-danger btn-circle">' +
            '<i class="fa fa-times"></i></button>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-3 control-label">İş / təcrübə yeri</label>' +
            '<div class="col-sm-9"><input name="company[]" class="form-control" type="text"></div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-3 control-label">Vəzifə</label>' +
            '<div class="col-sm-9"><input name="position[]" class="form-control" type="text"></div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-3 control-label">Başlama tarixi</label>' +
            '<div class="col-sm-3"><input type="text" name="start_date[]" class="form-control" data-mask="99/99/9999"></div>' +
            '<label class="col-sm-3 control-label">Bitirmə tarixi </label>' +
            '<div class="col-sm-3"><input type="text" name="end_date[]" class="form-control" data-mask="99/99/9999"></div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-3 control-label">İş haqqında məlumat</label>' +
            '<div class="col-sm-9"><textarea name="description[]" class="form-control" style="min-width:100%; max-width:100%;" type="text"></textarea></div>' +
            '</div>' +
            '<div class="hr-line-dashed"></div></div>');
        job++;
    }

    var it = 2;

    function delit(num)
    {
        $('#it'+num).remove();
        it--;
    }

    function addItKnowldge()
    {
        $('#it_knowledge').append('<div id="it'+it+'"><div style="margin-bottom: 10px;" class="col-sm-3">' +
            '<input type="text" class="form-control" name="it[]">' +
            '</div>' +
            '<div style="margin-bottom: 10px;" class="col-sm-8">' +
            '<select name="it_level[]" class="form-control">' +
            '<option value="Zəif">Zəif</option>' +
            '<option value="Orta">Orta</option>' +
            '<option value="Əla">Əla</option>' +
            '</select>' +
            '</div><div class="col-sm-1"><button onclick="delit('+it+')" class="btn btn-danger btn-circle">' +
            '<i class="fa fa-times"></i></button>' +
            '</div></div>');
        it++;
    }

    var member = 2;

    function delmember(num)
    {
        $('#family'+num).remove();
        member--;
    }

    function addmember()
    {
        $('#family_tab').append('<div id="family'+member+'">' +
            '<div class="form-group"><button onclick="delmember('+member+')" class="pull-right btn btn-danger btn-circle">' +
            '<i class="fa fa-times"></i></button></div>' +
            '<div class="form-group">' +
            '<label class="col-sm-3 control-label">Qohumluq dərəcəsi</label>' +
            '<div class="col-sm-6">' +
            '<select name="member_relation[]" class="form-control">' +
            '<option value="Ata">Ata</option>' +
            '<option value="Ana">Ana</option>' +
            '<option value="Bacı">Bacı</option>' +
            '<option value="Qardaş">Qardaş</option>' +
            '<option value="Ər">Ər</option>' +
            '<option value="Arvad">Arvad</option>' +
            '<option value="Qayınana">Qayınana</option>' +
            '<option value="Qayınata">Qayınata</option>' +
            '<option value="Oğul">Oğul</option>' +
            '<option value="Qız">Qız</option>' +
            '</select>' +
            '</div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-3 control-label">Tam adı</label>' +
            '<div class="col-sm-6"><input name="member_full_name[]" class="form-control" type="text"></div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-3 control-label">Doğum yeri və tarixi</label>' +
            '<div class="col-sm-6"><input name="member_birth_info[]" class="form-control" type="text"></div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-3 control-label">İş yeri və vəzifəsi</label>' +
            '<div class="col-sm-6"><input name="member_job_position[]" class="form-control" type="text"></div>' +
            '</div>' +
            '<div class="form-group">' +
            '<label class="col-sm-3 control-label">Ünvan</label>' +
            '<div class="col-sm-6"><input name="member_address[]" class="form-control" type="text"></div>' +
            '</div>' +
            '<br>' +
            '<div class="hr-line-dashed">' +
            '</div></div>');
        member++;
    }

    var lang = 2;

    function dellang(num)
    {
        $('#lang'+num).remove();
        lang--;
    }

    function addLang()
    {
        $('#lang_knowledge').append('<div id="lang'+lang+'"><div class="col-sm-3">' +
            '<select name="lang[]" class="form-control" style="margin-bottom: 10px;">' +
            '<option value="Rus">Rus</option>' +
            '<option value="Türk">Türk</option>' +
            '<option value="İngilis">İngilis</option>' +
            '<option value="Ərəb">Ərəb</option>' +
            '<option value="Fars">Fars</option>' +
            '<option value="Alman">Alman</option>' +
            '<option value="İtalyan">İtalyan</option>' +
            '</select>' +
            '</div>' +
            '<div class="col-sm-8" style="margin-bottom: 10px;">' +
            '<select name="lang_level[]" class="form-control">' +
            '<option value="Zəif">Zəif</option>' +
            '<option value="Orta">Orta</option>' +
            '<option value="Əla">Əla</option>' +
            '</select>' +
            '</div>' +
            '<div class="col-sm-1"><button onclick="dellang('+lang+')" class="btn btn-danger btn-circle">' +
            '<i class="fa fa-times"></i></button>' +
            '</div></div>');
        lang++;
    }

    function readURL(input)
    {
        if (input.files && input.files[0])
        {
            var reader = new FileReader();
            reader.onload = function (e)
            {
                $('#img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    for(var i=1;i<=31;i++)
    {
        $('#birth_day').append('<option value="'+i+'">'+i+'</option>');
    }

    for(var i=1980;i<=2010;i++)
    {
        $('#birth_year').append('<option value="'+i+'">'+i+'</option>');
    }


    function post() {

        var id = $('option:selected').val();

        $.post('students/course', { id: id }, function(data){
            $('#course_desc').html(data);
        });
    }

</script>

<script>
    $(document).ready(function(){

        $("#wizard").steps();
        $("#form").steps({
            bodyTag: "fieldset",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // Always allow going backward even if the current step contains invalid fields!
                if (currentIndex > newIndex)
                {
                    return true;
                }

                var form = $(this);

                // Clean up if user went backward before
                if (currentIndex < newIndex)
                {
                    // To remove error styles
                    $(".body:eq(" + newIndex + ") label.error", form).remove();
                    $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                }

                // Disable validation on fields that are disabled or hidden.
                form.validate().settings.ignore = ":disabled,:hidden";

                // Start validation; Prevent going forward if false
                return form.valid();
            },
            onStepChanged: function (event, currentIndex, priorIndex)
            {
                // Suppress (skip) "Warning" step if the user is old enough.
                if (currentIndex === 2 && Number($("#age").val()) >= 18)
                {
                    $(this).steps("next");
                }

                // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                if (currentIndex === 2 && priorIndex === 3)
                {
                    $(this).steps("previous");
                }
            },
            onFinishing: function (event, currentIndex)
            {
                var form = $(this);

                // Disable validation on fields that are disabled.
                // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                form.validate().settings.ignore = ":disabled";

                // Start validation; Prevent form submission if false
                return form.valid();
            },
            onFinished: function (event, currentIndex)
            {
                var form = $(this);

                // Submit form input
                form.submit();
            }
        }).validate({
            errorPlacement: function (error, element)
            {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
    });
</script>

</body>

</html>
