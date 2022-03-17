<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';
    use HasFactory;
    //protected $guarded = [];
    public static $rules = array( 
        'form-add' => 'input-update',
    );
    protected $fillable = [
        'created_at','updated_at','content'
    ];
}