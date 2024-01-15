<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    // app/Models/Employee.php

public function meetings()
{
    return $this->belongsToMany(Meeting::class, 'meeting_participants');
}

}
