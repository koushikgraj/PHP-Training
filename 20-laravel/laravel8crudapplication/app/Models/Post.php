<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'email_id','mobile','adhar_number',
        'title', 'description',
        'address_line1','address_line2','city',
        'education','marks'
    ];
}