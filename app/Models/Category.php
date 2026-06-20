<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;

use Illuminate\Database\Eloquent\Model;
#[Fillable(['name', 'description', 'user_id'])]
class Category extends Model
{
    //
}
