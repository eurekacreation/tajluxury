<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Room extends Model
{
	use Translatable;
    protected $translatable = ['title'];
}
