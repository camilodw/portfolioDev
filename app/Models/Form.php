<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $email
 * @property string $name
 * @property string $lastName
 * @property string $affair
 */
class Form extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'form';
    public $timestamps = false;

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['email', 'name', 'lastName', 'affair'];

}
