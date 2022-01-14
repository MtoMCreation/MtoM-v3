<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function etat()
    {
        return $this->belongsTo(Etat::class);
    }

    public function publie()
    {
        if ($this->etat_id == 1) {
            return false;
        }
        return true;
    }

    public function articlesPublie()
    {
        return $this->where('etat_id', 2);
    }

}
