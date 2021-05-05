<?php

namespace school\Models\Users;

use school\Models\ActiveRecordEntity;

class User extends ActiveRecordEntity
{
    /** @var string  */
    protected $name;

    /** @var string */
    protected $email;

    /** @var int */
    protected $isConfirmed;

    /** @var string */
    protected $status;

    /** @var string */
    protected $passwordHash;

    /** @var string */
    protected $authToken;

    /** @var string */
    protected $createdAt;

    /** @return string */
    public function getName(): string
    {
        return $this->name;
    }

    protected static function getTableName(): string
    {
        return 'users';
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}