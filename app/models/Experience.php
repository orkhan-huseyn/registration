<?php

class Experience
{
    public $experience_id;

    public $student_id;

    public $company;

    public $position;

    public $description;

    public $start_date;

    public $end_date;


    public function __construct($experience_id, $student_id, $company, $position, $description, $start_date, $end_date)
    {
        $this->experience_id = $experience_id;

        $this->student_id    = $student_id;

        $this->company       = $company;

        $this->position      = $position;

        $this->description   = $description;

        $this->start_date    = $start_date;

        $this->end_date      = $end_date;
    }

    public static function find($student_id)
    {
        $list = [];

        $conn = Database::getInstance();

        $stmt = $conn->prepare('SELECT * FROM experiences WHERE student_id=:id');

        $stmt->execute(array('id'=>$student_id));

        foreach ($stmt->fetchAll() as $experience)
        {
            $list[] = new experience($experience['experience_id'], $experience['student_id'], $experience['company'],
                $experience['position'], $experience['description'], $experience['start_date'], $experience['end_date']);
        }

        return $list;
    }

    public static function insert($experience_id, $student_id, $company, $position, $description, $start_date, $end_date)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("INSERT INTO experiences (experience_id, student_id, company, position, description, start_date, end_date) "
            ."VALUES (:experience_id, :student_id, :company, :position, :description, :start_date, :end_date)");

        $stmt->bindParam(":experience_id", $experience_id);

        $stmt->bindParam(":student_id",    $student_id);

        $stmt->bindParam(":company",       $company);

        $stmt->bindParam(":position",      $position);

        $stmt->bindParam(":description",   $description);

        $stmt->bindParam(":start_date",    $start_date);

        $stmt->bindParam(":end_date",      $end_date);

        if ($stmt->execute())
        {
            return true;
        }
        return false;
    }
}