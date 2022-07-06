<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Board extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table='boards';
    protected $guarded = false;

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    public function problems(): HasMany
    {
        return $this->hasMany(Problem::class,'board_id', 'id');
    }

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class,'board_id', 'id');
    }

    public function admin(): BelongsTo
    {
        return $this->belongsTo(User::class,'admin_id', 'id');
    }


}
