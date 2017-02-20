<?php


class FamilyInfo
{

    public $info_id;

    public $student_id;

    public $relation;

    public $full_name;


    public function __construct($info_id, $student_id, $relation, $full_name)
    {

        $this->info_id      = $info_id;

        $this->student_id   = $student_id;

        $this->relation     = $relation;

        $this->full_name    = $full_name;

    }

    public static function find($student_id)
    {
        $list = [];

        $conn = Database::getInstance();

        $stmt = $conn->prepare("SELECT * from family_info WHERE student_id = :id");

        $stmt->execute(array('id' => $student_id));

        foreach ($stmt->fetchAll() as $family_info)
        {
            $list[] = new FamilyInfo($family_info['info_id'], $family_info['student_id'], $family_info['relation'],
                $family_info['full_name']);
        }

        return $list;
    }

    public static function insert($info_id, $student_id, $relation, $full_name)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("INSERT INTO family_info (info_id, student_id, relation, full_name) "
            ."VALUES (:info_id, :student_id, :relation, :full_name)");

        $stmt->bindParam(":info_id",       $info_id);

        $stmt->bindParam(":student_id",    $student_id);

        $stmt->bindParam(":relation",      $relation);

        $stmt->bindParam(":full_name",     $full_name);

        if ($stmt->execute())
        {
            return true;
        }
        return false;
    }

}