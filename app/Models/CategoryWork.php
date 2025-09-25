<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CategoryWork extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'category_works';

    // Asignación Masiva
    protected $fillable = [
        'name_category'
    ];
    protected $guarded = ['id'];
    // Campos a ocultar
    protected $hidden = [
        'created_at',
        'updated_at',
        'id'
    ];

    // Relación muchos a muchos con HomeWorks
    public function homeWorks()
    {
        return $this->belongsToMany(HomeWorks::class, 'category_word_home_word', 
        'category_work_id', 'home_work_id');
    }

}
