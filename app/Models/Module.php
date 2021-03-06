<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    public function sub_modules(){
        return $this->HasMany(SubModule::class);
    }
}
