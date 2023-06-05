<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Editorial
 *
 * @property $id
 * @property $nombre
 * @property $direccion
 * @property $email
 * @property $contacto
 * @property $numero
 * @property $created_at
 * @property $updated_at
 *
 * @property Libro[] $libros
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Editorial extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'direccion' => 'required',
		'email' => 'required',
		'contacto' => 'required',
		'numero' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','direccion','email','contacto','numero'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function libros()
    {
        return $this->hasMany('App\Models\Libro', 'editorial_id', 'id');
    }
    

}
