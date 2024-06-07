<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoLists extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'done', // migration eke hdpu column name tik methn(model) ekt pass krnw  //table eke columns tik lesiyen gnn thm fillable ek use kre methn 
    ];
}
