<?php

namespace Rennokki\Befriended\Test\Models;

use Illuminate\Database\Eloquent\Model;
use Rennokki\Befriended\Traits\CanFollow;
use Rennokki\Befriended\Traits\CanBlock;
use Rennokki\Befriended\Traits\CanFilterFollowers;
use Rennokki\Befriended\Traits\CanFilterBlocking;

use Rennokki\Befriended\Interfaces\Following;
use Rennokki\Befriended\Interfaces\Blocking;

class Page extends Model implements Following, Blocking
{
    use CanFollow, CanBlock, CanFilterFollowers, CanFilterBlocking;

    protected $fillable = [
        'name',
    ];
}
