<?php

namespace AshikKaiser\AuthLog;

trait EventMap
{
    /**
     * The Authentication Log event / listener mappings.
     *
     * @var array
     */
    protected $events = [
        'Illuminate\Auth\Events\Login' => [
            'AshikKaiser\AuthLog\Listeners\LogSuccessfulLogin',
        ],

        'Illuminate\Auth\Events\Logout' => [
            'AshikKaiser\AuthLog\Listeners\LogSuccessfulLogout',
        ],
    ];
}
