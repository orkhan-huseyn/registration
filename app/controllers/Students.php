<?php

class Students
{

    public function register()
    {
        $title    = "Qeydiyyat | Devcenter";

        require_once '../app/views/student/register.php';
    }

    public function registered()
    {
        if (isset($_SESSION['registered']) && $_SESSION['registered']==true)
        {
            $title    = "Təbriklər! | Devcenter";

            require_once '../app/views/student/registered.php';
        } else {
            $this->error();
        }
    }

    public function error($message)
    {
        $_SESSION['error'] = "<strong>Xəta baş verdi!</strong> &nbsp;".$message;

        header('location: '.BASE_DIR);
    }

    public function post()
    {

        $required_fields = [
            "student_id", "serial_id", "first_name", "last_name", "fathers_name", "birth_day",
            "birth_month", "birth_year", "birth_place", "gender", "married", "phone_mobile",
            "address", "email", "facebook", "about"
            ];

        $detect = new Mobile_Detect();

        if ($detect->isMobile()) {

            $this->error("Üzr istəyirik, qeydiyyatdan keçmək üçün mobil qurğu istifadə edilə bilməz.");
        }
        else if (!FormHandler::validate_input($required_fields))
        {
            $this->error("Zəhmət olmasa bütün xanaları doldurub bir daha cəhd edin.");

        } else {
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
//            $member_phone_number   = $_POST['member_phone_number'];

            $member_count = count($member_relation);

            $direction = $_POST["direction"];

            $uuid = UUID::v4();

            $root_path = "img/profile/student/";
            $file_name = "";

            $student_ok = $education_ok = $family_ok = false;

            if($student_id==0)
            {
                $msg = FormHandler::upload('profile_img', '../../cpanel/public/img/profile/student/');

                if($msg=="empty") {
                    $file_name = "img/profile/default.jpg";
                } else {
                    $file_name = $root_path.$msg;
                }

                if (Student::insert($uuid, $serial_id, $file_name, $first_name, $last_name, $fathers_name,$birth_date,
                    $birth_place, $gender, $married, $about, $phone_mobile, $phone_home, $address, $email, $facebook, $direction))
                {
                    $student_ok = true;
                }

                for($i=0; $i < $education_count; $i++)
                {
                    if (Education::insert(UUID::v4(), $uuid, $education_level[$i], $institution[$i], $major[$i], $start_year[$i], $end_year[$i]))
                    {
                        $education_ok = true;
                    }
                }

                for ($i=0; $i < $experience_count; $i++)
                {
                    if(!empty($company[$i]))
                    {
                        Experience::insert(UUID::v4(), $uuid, $company[$i], $position[$i], $job_description[$i], 
                        $ex_start_month[$i].' '.$ex_start_year[$i], $ex_end_month[$i].' '.$ex_end_year[$i]);
                    }
                }

                for ($i=0; $i < $lang_count; $i++)
                {
                    if ($lang[$i] != "ch")
                    {
                        LangKnowledge::insert(UUID::v4(), $uuid, $lang[$i], $lang_level[$i]);
                    }
                }

                for ($i=0; $i < $it_count; $i++)
                {
                    if(!empty($it[$i]))
                    {
                        ItKnowledge::insert(UUID::v4(), $uuid, $it[$i], $it_level[$i]);
                    }
                }

                for ($i=0; $i < $member_count; $i++)
                {
                    if (FamilyInfo::insert(UUID::v4(), $uuid, $member_relation[$i], $member_full_name[$i]))
                    {
                        $family_ok = true;
                    }
                }

            } else {
                Student::update($student_id, $serial_id, $first_name, $last_name, $fathers_name,
                    $birth_date, $birth_place, $gender, $married, $about, $phone_mobile, $phone_home, $address, $email, $facebook);
            }

            if ($student_ok && $education_ok && $family_ok)
            {

                $_SESSION['registered'] = true;
                $_SESSION['student_full_name'] = $last_name.' '.$first_name;
            
                header('location: '.BASE_DIR.'students/registered/');
            } else {
                $this->error();
            }
        }
    }

}