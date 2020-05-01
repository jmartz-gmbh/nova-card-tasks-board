<?php

namespace JonathanMartz\NovaCardTasksBoard;

use Laravel\Nova\Card;

class TasksBoardCard extends Card
{
    public $width = '3/3';

    public function component()
    {
        return 'nova-card-tasks-board';
    }
}
