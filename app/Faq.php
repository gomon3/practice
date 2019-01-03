<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Section;
use App\Solution;

class Faq extends Model
{
    //
    protected $fillable = [
        'faq', 'section_id', 'solution_id'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }

    public function solution()
    {
        return $this->belongsTo(Solution::class, 'solution_id');
    }
}
