<?php
namespace Dsw\Blog\Models;

use DateTime;

class User {
    public function __construct(
        private int $id,
        private string $name,
        private string $email,
        private DateTime $registerDate,
    ) {}

    public function __toString()
    {
        return $this->name . " " . $this->email;
    }

}