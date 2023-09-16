<?php

namespace App\Helpers;

class Constants
{
    /**
     * ENUM Constants
     */
    public const USER_TYPES = ['admin', 'employee', 'student', 'post-grad', 'professor', 'teaching-assistant'];

    public const ALLOWED_USER_TYPES = ['employee', 'student', 'post-grad', 'professor', 'teaching-assistant'];

    public const LANGUAGE_DIRECTIONS = ['ltr', 'rtl'];
}
