<?php

namespace App\Models;

class Job
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Job 1',
                'description' => 'Description 1',
            ],
            [
                'id' => 2,
                'title' => 'Job 2',
                'description' => 'Description 2',
            ],
            [
                'id' => 3,
                'title' => 'Job 3',
            ]
        ];
    }
}
