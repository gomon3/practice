<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Section;

class Faq extends Model
{
    //
    protected $fillable = [
        'faq', 'section_id'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}
