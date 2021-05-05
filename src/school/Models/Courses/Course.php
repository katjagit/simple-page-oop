<?php

namespace school\Models\Courses;

use school\Models\ActiveRecordEntity;

class Course extends ActiveRecordEntity
{
    /** @var string */
    protected $name;

    /** @var string */
    protected $description;

    /** @var int */
    protected $topics;

    /** @var int */
    protected $tests;

    /** @var string */
    protected $createdAt;

    /** @var int */
    protected $teacherId;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    protected static function getTableName(): string
    {
        return 'courses';
    }

    public function getTeacherId(): int
    {
        return (int) $this->teacherId;
    }

}