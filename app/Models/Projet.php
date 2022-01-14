<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projet extends Model
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

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }

    public function projetsPublie()
    {
        return $this->where('etat_id', 2);
    }

    public function siteWeb()
    {
        return $this->projetsPublie()
            ->whereHas('categories', function (Builder $query) {
            $query->where('nom', 'like', 'Site web vitrine')
                ->orWhere('nom', 'like', 'Site web marchand')
                ->orWhere('nom', 'like', 'Site web one page');
        });

    }

    public function sitesVitrines()
    {
        return $this->projetsPublie()->whereHas('categories', function (Builder $query) {
            $query->where('nom', 'like', 'Site web vitrine');
        });
    }

    public function sitesMarchands()
    {
        return $this->projetsPublie()->whereHas('categories', function (Builder $query) {
            $query->where('nom', 'like', 'Site web marchand');
        });
    }

    public function sitesOnePage()
    {
        return $this->projetsPublie()->whereHas('categories', function (Builder $query) {
            $query->where('nom', 'like', 'Site web one page');
        });
    }

}
