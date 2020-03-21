<?php

namespace App\Modules\Admin\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //
    protected $table = 'contact_messages';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'text',
    ];
}
