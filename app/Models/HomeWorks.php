<?php

namespace App\Models;

use Carbon\Carbon;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class HomeWorks extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'home_works';
    
    // Asignación Masiva 
    protected $fillable = [
        'title_work',
        'description_work',
        'initial_date',
        'final_date',
        'user_id'
    ];

    protected $guarded = ['id', 'status', 'user_id'];

    // Campos que se debe ocultar
    protected $hidden = [
        'created_at',
        'updated_at',
        'user_id'
    ];

    // Casting de atributos
    protected function casts(): array
    {
        return [
            'initial_date' => 'date',
            'final_date' => 'date',
            'status' => 'boolean'
        ];
    }

    // Mutadores y accesores
    public function titleWork(): Attribute
    {
        return Attribute::make(
            // Accesor para que devuelva el titulo con su primera letra en mayuscula
            get: function($value){
                return ucfirst($value);
            },
            // Mutador para que guarde el titulo en minuscula
            set: function($value){
                return strtolower($value);
            }
        );
    }

    public function descriptionWork(): Attribute
    {
        return Attribute::make(
            // Accesor para que devuelva la descripcion con su primera letra en mayuscula
            get: function($value){
                return ucfirst($value);
            },
            // Mutador para que guarde la descripcion en minuscula
            set: function($value){
                return strtolower($value);
            }
        );
    }

    public function categoryWork(): Attribute
    {
        return Attribute::make(
            // Accesor para que devuelva la categoria con su primera letra en mayuscula
            get: function($value){
                return ucfirst($value);
            },
            // Mutador para que guarde la categoria en minuscula
            set: function($value){
                return strtolower($value);
            }
        );
    }

    public function initialDate(): Attribute
    {
        return Attribute::make(
            // Mutador para guardar la fecha en formato Y-m-d
            set: function($value){
                return Carbon::parse($value)->format('Y-m-d');
            }
        );
    }

    public function finalDate(): Attribute
    {
        return Attribute::make(
            // Mutador para guardar la fecha en formato Y-m-d
            set: function($value){
                return Carbon::parse($value)->format('Y-m-d');
            }
        );
    }


    // Relación inversa con User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
