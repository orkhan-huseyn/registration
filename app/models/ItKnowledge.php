<?php


class ItKnowledge
{
    public $knowledge_id;

    public $student_id;

    public $technology;

    public $knowledge_level;


    public function __construct($knowledge_id, $student_id, $technology, $knowledge_level)
    {
        $this->knowledge_id    = $knowledge_id;

        $this->student_id      = $student_id;

        $this->technology      = $technology;

        $this->knowledge_level = $knowledge_level;
    }

    public static function find($student_id)
    {
        $list = [];

        $conn = Database::getInstance();

        $stmt = $conn->prepare("SELECT * from it_knowledge WHERE student_id=:id");

        $stmt->execute(array('id' => $student_id));

        foreach ($stmt->fetchAll() as $tech_knowledge)
        {
            $list[] = new LangKnowledge($tech_knowledge['knowledge_id'], $tech_knowledge['student_id'],
                $tech_knowledge['technology'], $tech_knowledge['knowledge_level']);
        }

        return $list;
    }

    public static function insert($knowledge_id, $student_id, $technology, $knowledge_level)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("INSERT INTO it_knowledge (knowledge_id, student_id, technology, knowledge_level) "
            ."VALUES (:knowledge_id, :student_id,  :technology, :knowledge_level)");

        $stmt->bindParam(":knowledge_id",    $knowledge_id);

        $stmt->bindParam(":student_id",      $student_id);

        $stmt->bindParam(":technology",      $technology);

        $stmt->bindParam(":knowledge_level", $knowledge_level);

        $stmt->execute();
    }
}