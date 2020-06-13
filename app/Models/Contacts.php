<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Contacts extends Model

{
    protected $table = "contacts";
    protected $primaryKey = "id";

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];
    protected $dates = [
        'created_at',
        'updated_at'
    ];




}
