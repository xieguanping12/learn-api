<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Client
 *
 * @mixin \Eloquent
 */
class Client extends Model
{
    protected $table = 'oauth_clients';

    protected $fillable = [
        'id',
        'secret',
        'name',
    ];
}
