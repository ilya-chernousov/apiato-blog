<?php

namespace App\Containers\BlogSection\Category\Models;

use App\Ship\Parents\Models\Model as ParentModel;

final class Category extends ParentModel
{
    protected $fillable = ['name'];

}
