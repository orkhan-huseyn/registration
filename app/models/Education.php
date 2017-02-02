<?php

class Education
{
    public $education_id;

    public $student_id;

    public $education_level;

    public $institution;

    public $major;

    public $start_date;

    public $end_date;


    public function __construct($education_id, $student_id, $education_level, $institution, $major, $start_date, $end_date)
    {
        $this->education_id       = $education_id;

        $this->student_id         = $student_id;

        $this->education_level    = $education_level;

        $this->institution        = $institution;

        $this->major              = $major;

        $this->start_date         = $start_date;

        $this->end_date           = $end_date;

    }

    public static function find($student_id)
    {
        $list = [];

        $conn = Database::getInstance();

        $stmt = $conn->prepare('SELECT * FROM education WHERE student_id=:id');

        $stmt->execute(array('id' => $student_id));

        foreach ($stmt->fetchAll() as $education)
        {
            $list[] = new Education($education['education_id'], $education['student_id'], $education['education_level'],
                $education['institution'], $education['major'], $education['start_date'], $education['end_date']);
        }

        return $list;
    }

    public static function insert($education_id, $student_id, $education_level, $institution, $major, $start_date, $end_date)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("INSERT INTO education (education_id, student_id, education_level, institution, major, start_date, end_date) "
            ."VALUES (:education_id, :student_id, :education_level, :institution, :major, :start_date, :end_date)");

        $stmt->bindParam(":education_id",    $education_id);

        $stmt->bindParam(":student_id",      $student_id);

        $stmt->bindParam(":education_level", $education_level);

        $stmt->bindParam(":institution",     $institution);

        $stmt->bindParam(":major",           $major);

        $stmt->bindParam(":start_date",      $start_date);

        $stmt->bindParam(":end_date",        $end_date);

        $stmt->execute();
    }
}