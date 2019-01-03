<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Icon;

class Section extends Model
{
    //
    protected $fillable = [
        'nombre', 'icon_id'
    ];

    public function icon()
    {
        return $this->belongsTo(Icon::class, 'icon_id');
    }
}
