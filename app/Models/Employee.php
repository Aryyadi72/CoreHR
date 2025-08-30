<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'employee_id',
        'status_id',
        'grade_id',
        'dept_id',
        'jabatan_id',
        'name',
        'email',
        'no_telp',
        'alamat',
        'kota',
        'provinsi',
        'pendidikan',
        'agama',
        'gender',
        'born_on',
        'start_work',
        'end_work',
        'is_active',
        'inputed_by',
    ];

    public function Dept() : BelongsTo
    {
        return $this->belongsTo(Dept::class);
    }

    public function Grade(): BelongsTo
    {
        return $this->belongsTo(Grade::class);
    }

    public function Jabatan() : BelongsTo
    {
        return $this->belongsTo(Jabatan::class);
    }

    public function Status() : BelongsTo
    {
        return $this->belongsTo(Status::class);
    }
}
