<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Book extends Authenticatable
{
    use Notifiable;

    
    // public function books(){
    //     return $this->hasMany('App\Book');
    // }
    
    protected $fillable=[
        'Book_Name','Book_Author','Qunatity_Available',
    ];
    protected $hidden = [
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
