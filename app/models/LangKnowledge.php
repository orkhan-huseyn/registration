<?php

class LangKnowledge
{

    public $knowledge_id;

    public $student_id;

    public $language;

    public $knowledge_level;


    public function __construct($knowledge_id, $student_id, $language, $knowledge_level)
    {
        $this->knowledge_id    = $knowledge_id;

        $this->student_id      = $student_id;

        $this->language        = $language;

        $this->knowledge_level = $knowledge_level;
    }

    public static function find($student_id)
    {
        $list = [];

        $conn = Database::getInstance();

        $stmt = $conn->prepare("SELECT * from lang_knowledge WHERE student_id=:id");

        $stmt->execute(array('id' => $student_id));

        foreach ($stmt->fetchAll() as $lang_knowledge)
        {
            $list[] = new LangKnowledge($lang_knowledge['knowledge_id'], $lang_knowledge['student_id'],
                $lang_knowledge['language'], $lang_knowledge['knowledge_level']);
        }

        return $list;
    }

    public static function insert($knowledge_id, $student_id, $language, $knowledge_level)
    {
        $conn = Database::getInstance();

        $stmt = $conn->prepare("INSERT INTO lang_knowledge (knowledge_id, student_id, language, knowledge_level) "
            ."VALUES (:knowledge_id, :student_id,  :language, :knowledge_level)");

        $stmt->bindParam(":knowledge_id",    $knowledge_id);

        $stmt->bindParam(":student_id",      $student_id);

        $stmt->bindParam(":language",        $language);

        $stmt->bindParam(":knowledge_level", $knowledge_level);

        if ($stmt->execute())
        {
            return true;
        }
        return false;
    }

}