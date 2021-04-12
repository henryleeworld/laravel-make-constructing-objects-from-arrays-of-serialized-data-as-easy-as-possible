<?php

namespace App\DataTransferObject;

use Spatie\DataTransferObject\DataTransferObject;

class UserDataTransferObject extends DataTransferObject
{
    public string $name;

    public string $email;

    public int $age;
}
