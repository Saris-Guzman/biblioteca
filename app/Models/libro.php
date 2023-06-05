<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Libro
 *
 * @property $id
 * @property $categoria_id
 * @property $autor_id
 * @property $editorial_id
 * @property $titulo
 * @property $nautor
 * @property $comentario
 * @property $created_at
 * @property $updated_at
 *
 * @property Autor $autor
 * @property Categoria $categoria
 * @property Editorial $editorial
 * @property Inventario[] $inventarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Libro extends Model
{
    
    static $rules = [
		'categoria_id' => 'required',
		'autor_id' => 'required',
		'editorial_id' => 'required',
		'titulo' => 'required',
		'nautor' => 'required',
		'comentario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['categoria_id','autor_id','editorial_id','titulo','nautor','comentario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function autor()
    {
        return $this->hasOne('App\Models\Autor', 'id', 'autor_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'categoria_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function editorial()
    {
        return $this->hasOne('App\Models\Editorial', 'id', 'editorial_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inventarios()
    {
        return $this->hasMany('App\Models\Inventario', 'libro_id', 'id');
    }
    

}
