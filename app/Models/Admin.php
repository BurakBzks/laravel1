<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    //Laravel admin girişinde AuthController kütüphanesini kullanmak için
    //öncelikle üst tarafa use olarak çağırıyoruz.-> config->auth.php-> gidip users olanları admins olarak değiştiriyoruz.
    //daha sonrasında gidip auth controller içinde fonksiyon tanımlayıp reguest ile alıp yolluyoruz.
    use HasFactory;
}
