
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


var id = $('#courses').find(':selected').val();

$.ajax({
    type: 'post',
    url: '/registration/public/students/course',
    data: {'id': id},
    dataType: 'json',
    success: function (data) {
        $('#instructor').html(data.instructor);
        $('#course_description').html(data.description);
    }
});

function post() {
    var id = $('#courses').find(':selected').val();

    $.ajax({
        type: 'post',
        url: '/registration/public/students/course',
        data: {'id': id},
        dataType: 'json',
        success: function (data) {
            $('#instructor').html(data.instructor);
            $('#course_description').html(data.description);
        }
    });
}