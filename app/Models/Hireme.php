<?php

// app/Models/HireMe.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireMe extends Model
{
    use HasFactory;

    protected $table = 'hiremes';

    protected $fillable = ['fullname', 'email', 'phone', 'date', 'plan', 'location'];

}
