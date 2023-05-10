<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int    $id
 * @property int    $duree
 * @property int    $idclient
 * @property string $numero
 * @property string $type
 * @property string $date
 * @property string $createdAt
 */
class Contrat extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    use HasFactory;
    protected $table = 'contrat';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numero', 'type', 'date', 'createdAt', 'duree', 'idclient'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int', 'numero' => 'string', 'type' => 'string', 'date' => 'string', 'createdAt' => 'string', 'duree' => 'timestamp', 'idclient' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'duree'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
