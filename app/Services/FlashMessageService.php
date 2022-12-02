<?php

namespace App\Services;

class FlashMessageService
{
    public static function success($message)
    {
        session()->flash('flash_message', [
            'type' => 'primary ',
            'message' => $message,
        ]);
    }

    public static function error($message)
    {
        session()->flash('flash_message', [
            'type' => 'danger',
            'message' => $message,
        ]);
    }
}
