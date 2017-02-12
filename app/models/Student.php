<?php

class Student
{
    public $student_id;

    public $serial_id;

    public $image_path;

    public $first_name;

    public $last_name;

    public $fathers_name;

    public $birth_date;

    public $birth_place;

    public $gender;

    public $married;

    public $about;

    public $phone_mobile;

    public $phone_home;

    public $address;

    public $email;

    public $facebook;

    public $reg_date;

    public $status;

    public $approved;

    public $comments;

    public $direction;


    public function __construct($student_id, $serial_id,  $image_path, $first_name, $last_name, $fathers_name, $birth_date,
                                $birth_place, $gender, $married, $about, $phone_mobile, $phone_home, $address, $email, $facebook,
                                $reg_date, $status, $comments, $direction) {

        $this->student_id          = $student_id;

        $this->image_path          = $image_path;

        $this->serial_id           = $serial_id;

        $this->first_name          = $first_name;

        $this->last_name           = $last_name;

        $this->fathers_name        = $fathers_name;

        $this->birth_date          = $birth_date;

        $this->birth_place         = $birth_place;

        $this->gender              = $gender;

        $this->married             = $married;

        $this->about               = $about;

        $this->phone_mobile        = $phone_mobile;

        $this->phone_home          = $phone_home;

        $this->address             = $address;

        $this->email               = $email;

        $this->facebook            = $facebook;

        $this->reg_date            = $reg_date;

        $this->status              = $status;

        $this->comments            = $comments;

        $this->direction           = $direction;

    }

    public static function all()
    {
        $list = [];

        $conn = Database::getInstance();

        $stmt = $conn->query("SELECT * FROM students");

        foreach ($stmt->fetchAll() as $student)
        {
            $list[] = new Student($student['student_id'], $student['serial_id'], $student['image_path'], $student['first_name'], $student['last_name'], $student['fathers_name'],
                $student['birth_date'], $student['birth_place'], $student['gender'], $student['married'], $student['about'], $student['phone_mobile'], $student['phone_home'], $student['address'], $student['email'],
                $student['facebook'], $student['reg_date'], $student['status'], $student['comments'], $student['direction']);
        }
        return $list;
    }

    public static function find($id)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("SELECT * FROM students WHERE student_id=:id");

        $stmt->execute(array('id'=>$id));

        $student = $stmt->fetch();

        return new Student($student['student_id'], $student['serial_id'], $student['image_path'], $student['first_name'], $student['last_name'], $student['fathers_name'],
            $student['birth_date'], $student['birth_place'], $student['gender'], $student['married'], $student['about'], $student['phone_mobile'], $student['phone_home'], $student['address'], $student['email'],
            $student['facebook'], $student['reg_date'], $student['status'], $student['comments'], $student['direction']);
    }

    public static function insert($student_id, $serial_id,  $image_path, $first_name, $last_name, $fathers_name, $birth_date,
                                  $birth_place, $gender, $married, $about, $phone_mobile, $phone_home, $address, $email, $facebook, $direction)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("INSERT INTO students (student_id, serial_id, image_path, first_name, last_name, fathers_name, birth_date, 
        birth_place, gender, married, about, phone_mobile, phone_home, address, email, facebook, direction)"
            ." VALUES (:student_id, :serial_id, :image_path, :first_name, :last_name, :fathers_name, :birth_date, :birth_place, :gender, :married,
        :about, :phone_mobile, :phone_home, :address, :email, :facebook, :direction)");

        $stmt->bindParam(":student_id",   $student_id);

        $stmt->bindParam(":serial_id",    $serial_id);

        $stmt->bindParam(":image_path",   $image_path);

        $stmt->bindParam(":first_name",   $first_name);

        $stmt->bindParam(":last_name",    $last_name);

        $stmt->bindParam(":fathers_name", $fathers_name);

        $stmt->bindParam(":birth_date",   $birth_date);

        $stmt->bindParam(":birth_place",  $birth_place);

        $stmt->bindParam(":gender",       $gender);

        $stmt->bindParam(":married",      $married);

        $stmt->bindParam(":about",        $about);

        $stmt->bindParam(":phone_mobile", $phone_mobile);

        $stmt->bindParam(":phone_home",   $phone_home);

        $stmt->bindParam(":address",      $address);

        $stmt->bindParam(":email",        $email);

        $stmt->bindParam(":facebook",     $facebook);

        $stmt->bindParam(":direction",    $direction);

        if ($stmt->execute())
        {
            return true;
        }
        return false;
    }

    public static function update($student_id, $serial_id, $first_name, $last_name, $fathers_name, $birth_date,
                                  $birth_place, $gender, $married, $about, $phone_mobile, $phone_home, $address, $email, $facebook)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("UPDATE students SET serial_id=:serial_id, first_name=:first_name, last_name=:last_name, fathers_name=:fathers_name,".
            "birth_date=:birth_date, birth_place=:birth_place, gender=:gender, married=:married, about=:about, phone_mobile=:phone_mobile,".
            "phone_home=:phone_home, address=:address, email=:email, facebook=:facebook "
            ."WHERE student_id=:student_id");


        $stmt->bindParam(":serial_id",    $serial_id);

        $stmt->bindParam(":first_name",   $first_name);

        $stmt->bindParam(":last_name",    $last_name);

        $stmt->bindParam(":fathers_name", $fathers_name);

        $stmt->bindParam(":birth_date",   $birth_date);

        $stmt->bindParam(":birth_place",  $birth_place);

        $stmt->bindParam(":gender",       $gender);

        $stmt->bindParam(":married",      $married);

        $stmt->bindParam(":about",        $about);

        $stmt->bindParam(":phone_mobile", $phone_mobile);

        $stmt->bindParam(":phone_home",   $phone_home);

        $stmt->bindParam(":address",      $address);

        $stmt->bindParam(":email",        $email);

        $stmt->bindParam(":facebook",     $facebook);

        $stmt->bindParam(":student_id",   $student_id);

        $stmt->execute();
    }

    public static function approve($id)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("UPDATE student SET status=1 WHERE student_id=:id");

        $stmt->execute(array('id' => $id));
    }

    public static function expel($id)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("UPDATE student SET status=2 WHERE student_id=:id");

        $stmt->execute(array('id' => $id));
    }

    public static function back($id)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("UPDATE student SET status=1 WHERE student_id=:id");

        $stmt->execute(array('id' => $id));
    }

    public static function graduate($id)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("UPDATE student SET status=3 WHERE student_id=:id");

        $stmt->execute(array('id' => $id));
    }
}