<?php

namespace App\Enums;

final class ContactFormEnum
{
    const NAME = 'name';
    const EMAIL = 'email';
    const SUBJECT = 'subject';
    const MESSAGE = 'message';

    public static function getFormMap() 
    {
        $data = [
            self::NAME,
            self::EMAIL,
            self::SUBJECT,
            self::MESSAGE,
        ];

        return $data;
    }
}