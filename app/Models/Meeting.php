<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    // app/Models/Meeting.php

public function participants()
{
    return $this->belongsToMany(Employee::class, 'meeting_participants');
}

}
