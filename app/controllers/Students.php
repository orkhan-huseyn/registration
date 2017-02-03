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
        $ex_start_month      = $_POST['ex_start_month'];
        $ex_start_year       = $_POST['ex_start_year'];
        $ex_end_month        = $_POST['ex_end_month'];
        $ex_end_year         = $_POST['ex_end_year'];
        $job_description     = $_POST['job_description'];

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

        $course_id = $_POST['course'];

        $uuid = UUID::v4();

        $root_path = "public/img/profile/student/";

        if($student_id==0)
        {
            Student::insert($uuid, $serial_id, $root_path.FormHandler::upload('profile_img', '../../cpanel/public/img/profile/student/'), $first_name, $last_name, $fathers_name,
                $birth_date, $birth_place, $gender, $married, $about, $phone_mobile, $phone_home, $address, $email, $facebook);

            for($i=0; $i < $education_count; $i++)
            {
                Education::insert(UUID::v4(), $uuid, $education_level[$i], $institution[$i], $major[$i], $start_year[$i], $end_year[$i]);
            }

            for ($i=0; $i < $experience_count; $i++)
            {
                Experience::insert(UUID::v4(), $uuid, $company[$i], $position[$i], $job_description[$i], $ex_start_month[$i].' '.$ex_start_year[$i], $ex_end_month[$i].' '.$ex_end_year[$i]);
            }

            for ($i=0; $i < $lang_count; $i++)
            {
                LangKnowledge::insert(UUID::v4(), $uuid, $lang[$i], $lang_level[$i]);
            }

            for ($i=0; $i < $it_count; $i++)
            {
                ItKnowledge::insert(UUID::v4(), $uuid, $it[$i], $it_level[$i]);
            }

            for ($i=0; $i < $member_count; $i++)
            {
                FamilyInfo::insert(UUID::v4(), $uuid, $member_relation[$i], $member_full_name[$i], $member_birth_info[$i], $member_address[$i], $member_job_position[$i]);
            }

            Enrollment::insert(UUID::v4(), $uuid, $course_id);

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

        $instructor = Instructor::find($course->instructor_id);

        $full_name = $instructor->last_name.' '.$instructor->first_name.' '.$instructor->fathers_name;

        $json = array('instructor' => $full_name, 'description' => $course->description, 'syllabus' => $course->syllabus_path);

        echo json_encode($json);
    }

}