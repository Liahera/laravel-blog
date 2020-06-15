<?php


namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Abouts extends Model {

    protected $table = "abouts";
    protected $primaryKey = "id";

    protected $fillable = [

        'full_text'
    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];

}
