<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public function getFullName(){
        return $this->first_name.' '.$this->last_name;
    }
    public static function getUsername($first_and_last_name){
        
        $username = str_replace(" ","-",$first_and_last_name);
        $username = mb_strtolower($username,'UTF-8');
        $username = strtr($username, ['ü'=>'u','ö'=>'o','ı'=>'i','ş'=>'s','ğ'=>'g']);
        return $username;
    }

    public function scopeSearch($query,$term){
        $term = '%'.$term.'%';
        $query->where(function($query) use($term){
            $query->where('first_name','like',$term)
            ->orWhere('last_name','like',$term);
        });
    }
}
