<?php

class Instructor
{
    public $instructor_id;

    public $first_name;

    public $last_name;

    public $fathers_name;

    public $phone_mobile;

    public $email;

    public $address;


    public function __construct($instructor_id, $first_name, $last_name, $fahters_name, $phone_mobile, $email, $address)
    {
        $this->instructor_id = $instructor_id;

        $this->first_name    = $first_name;

        $this->last_name     = $last_name;

        $this->fathers_name  = $fahters_name;

        $this->phone_mobile  = $phone_mobile;

        $this->email         = $email;

        $this->address       = $address;
    }

    public static function find($id)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("SELECT * from instructors WHERE instructor_id=:id");

        $stmt->execute(array('id'=>$id));

        $instructor = $stmt->fetch();

        return new Instructor($instructor['instructor_id'], $instructor['first_name'],
            $instructor['last_name'], $instructor['fathers_name'], $instructor['phone_mobile'], $instructor['email'], $instructor['address']);
    }
}