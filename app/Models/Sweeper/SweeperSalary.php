<?php

namespace App\Models\Sweeper;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SweeperSalary extends Model
{
    use HasFactory;

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function cleaner()
    {
        return $this->belongsTo(Cleaner::class);
    }
}
