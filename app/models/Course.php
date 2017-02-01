<?php

class Course
{
    public $course_id;

    public $course_name;

    public $description;

    public $syllabus_path;

    public $instructor_id;


    public function __construct($course_id, $course_name, $description, $syllabus_path, $instructor_id)
    {
        $this->course_id     = $course_id;

        $this->course_name   = $course_name;

        $this->description   = $description;

        $this->syllabus_path = $syllabus_path;

        $this->instructor_id = $instructor_id;
    }

    public static function all()
    {
        $list = [];

        $conn = Database::getInstance();

        $stmt = $conn->query("SELECT * FROM courses");

        foreach ($stmt->fetchAll() as $course)
        {
            $list[] = new Course($course['course_id'], $course['course_name'], $course['description'],
                $course['syllabus_path'], $course['instructor_id']);
        }

        return $list;
    }

    public static function find($id)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("SELECT * FROM courses WHERE course_id=:course_id");

        $stmt->execute(array('course_id' => $id));

        $course = $stmt->fetch();

        return new Course($course['course_id'], $course['course_name'], $course['description'],
            $course['syllabus_path'], $course['instructor_id']);
    }
}