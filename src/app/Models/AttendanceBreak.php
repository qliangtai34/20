<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttendanceBreak extends Model
{
    use HasFactory;

    protected $fillable = [
        'attendance_id',
        'correction_id',
        'break_start',
        'break_end',
    ];

    // ❌ 削除する（超重要）
    // protected $dates = [
    //     'break_start',
    //     'break_end',
    // ];

    public function attendance()
    {
        return $this->belongsTo(Attendance::class);
    }

    public function correction()
    {
        return $this->belongsTo(AttendanceCorrection::class, 'correction_id');
    }
}