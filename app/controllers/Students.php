<?php

class Students
{

    public function register()
    {
        $title    = "Qeydiyyat | Devcenter";

        $courses = Course::all();

        require_once '../app/views/student/register.php';
    }

    public function post()
    {
        $student_id          = $_POST['student_id'];
        $serial_id           = $_POST['serial_id'];
        $first_name          = $_POST['first_name'];
        $last_name           = $_POST['last_name'];
        $fathers_name        = $_POST['fathers_name'];
        $birth_day           = $_POST['birth_day'];
        $birth_month         = $_POST['birth_month'];
        $birth_year          = $_POST['birth_year'];
        $birth_date          = $birth_year.'-'.$birth_month.'-'.$birth_day;
        $birth_place         = $_POST['birth_place'];
        $gender              = $_POST['gender'];
        $married             = $_POST['married'];
        $phone_mobile        = $_POST['phone_mobile'];
        $phone_home          = $_POST['phone_home'];
        $address             = $_POST['address'];
        $email               = $_POST['email'];
        $facebook            = $_POST['facebook'];
        $about               = $_POST['about'];

        $education_level     = $_POST['education_level'];
        $institution         = $_POST['institution'];
        $major               = $_POST['major'];
        $start_year          = $_POST['start_year'];
        $end_year            = $_POST['end_year'];

        $education_count = count($education_level);

        $company             = $_POST['company'];
        $position            = $_POST['position'];
        $start_date          = $_POST['start_date'];
        $end_date            = $_POST['end_date'];

        $experience_count = count($company);

        $lang                = $_POST['lang'];
        $lang_level          = $_POST['lang_level'];

        $lang_count = count($lang);

        $it                  = $_POST['it'];
        $it_level            = $_POST['it_level'];

        $it_count = count($it);

        $member_relation     = $_POST['member_relation'];
        $member_full_name    = $_POST['member_full_name'];
        $member_birth_info   = $_POST['member_birth_info'];
        $member_job_position = $_POST['member_job_position'];
        $member_address      = $_POST['member_address'];

        $member_count = count($member_address);

        $uuid = UUID::v4();

        if($student_id==0)
        {
            Student::insert($uuid, $serial_id, 'public/img/profile/student/'.FormHandler::upload('profile_img', '../../cpanel/public/img/profile/student/'), $first_name, $last_name, $fathers_name,
                $birth_date, $birth_place, $gender, $married, $about, $phone_mobile, $phone_home, $address, $email, $facebook);
        } else {
            Student::update($student_id, $serial_id, $first_name, $last_name, $fathers_name,
                $birth_date, $birth_place, $gender, $married, $about, $phone_mobile, $phone_home, $address, $email, $facebook);
        }

        header('location: /cpanel/public/students/index');
    }

    public function course()
    {
        $id =  $_POST['id'];

        $course = Course::find($id);

        //to do
    }

}