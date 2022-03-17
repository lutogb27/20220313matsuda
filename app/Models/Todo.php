<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'webtextdb.todo_contacts_teble';
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
    public static $rules = array( 
        'form-add' => 'input-update',
    );
    protected $fillable = [
        'content'
    ];
}