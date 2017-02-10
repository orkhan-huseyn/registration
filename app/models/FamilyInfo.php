<?php


class FamilyInfo
{

    public $info_id;

    public $student_id;

    public $relation;

    public $full_name;

    public $birth_info;

    public $address;

    public $job_position;

    public function __construct($info_id, $student_id, $relation, $full_name, $birth_info, $address, $job_position)
    {

        $this->info_id      = $info_id;

        $this->student_id   = $student_id;

        $this->relation     = $relation;

        $this->full_name    = $full_name;

        $this->birth_info   = $birth_info;

        $this->address      = $address;

        $this->job_position = $job_position;

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
                $family_info['full_name'], $family_info['birth_info'], $family_info['address'], $family_info['job_position']);
        }

        return $list;
    }

    public static function insert($info_id, $student_id, $relation, $full_name, $birth_info, $address, $job_position)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("INSERT INTO family_info (info_id, student_id, relation, full_name, birth_info, address, job_position) "
            ."VALUES (:info_id, :student_id, :relation, :full_name, :birth_info, :address, :job_position)");

        $stmt->bindParam(":info_id",     $info_id);

        $stmt->bindParam(":student_id",  $student_id);

        $stmt->bindParam(":relation",    $relation);

        $stmt->bindParam(":full_name",   $full_name);

        $stmt->bindParam(":birth_info",  $birth_info);

        $stmt->bindParam(":address",     $address);

        $stmt->bindParam("job_position", $job_position);

        if ($stmt->execute())
        {
            return true;
        }
        return false;
    }

}