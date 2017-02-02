<?php

class Enrollment
{
    public $enrollment_id;

    public $student_id;

    public $course_id;


    public function __construct($enrollment_id, $student_id, $course_id)
    {
        $this->enrollment_id = $enrollment_id;

        $this->student_id    = $student_id;

        $this->course_id     = $course_id;
    }

    public static function find($student_id)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("SELECT * FROM enrollments WHERE student_id=:id");

        $stmt->execute(array('id'=>$student_id));

        $enrollment = $stmt->fetch();

        return new Enrollment($enrollment['enrollment_id'], $enrollment['student_id'], $enrollment['course_id']);
    }

    public static function insert($enrollment_id, $student_id, $course_id)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("INSERT INTO enrollments (enrollment_id, student_id, course_id) VALUES (:en_id, :st_id, :cr_id)");

        $stmt->bindParam(":en_id", $enrollment_id);

        $stmt->bindParam(":st_id", $student_id);

        $stmt->bindParam(":cr_id", $course_id);

        $stmt->execute();
    }
}