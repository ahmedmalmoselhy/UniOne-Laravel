<?php

namespace App\Helpers;

class Constants
{
    /**
     * ENUM Constants
     */

    // All user types
    public const USER_TYPES = ['admin', 'employee', 'student', 'post-grad', 'professor', 'teaching-assistant'];

    // These are the roles allowed to be added during registeration
    public const ALLOWED_USER_TYPES = ['employee', 'student', 'post-grad', 'professor', 'teaching-assistant'];

    public const LANGUAGE_DIRECTIONS = ['ltr', 'rtl'];

    // This will be updated to have more roles
    public const SPECIAL_ROLES = ['president', 'vice', 'secretary', 'dean'];
}
