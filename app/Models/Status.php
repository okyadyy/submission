<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    //class constants
    public const PENDING = ['id' => 1, 'name' => 'Pending'];
    public const APPROVED = ['id' => 2, 'name' => 'Approved'];
    public const REJECTED = ['id' => 3, 'name' => 'Rejected'];
}
