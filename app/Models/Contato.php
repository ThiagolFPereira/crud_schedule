<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'mail', 'address', 'number', 'neighborhood', 'city', 'state', 'zip', 'phone', 'avatar'];


    //Acessar
    public function getAvatarImageAttribute($value) {
        return $this->avatar == null ? asset('images/null.png') : asset($this->avatar);
    }
    public function getAvatarFilenameAttribute($value) {
        return substr($this->avatar, 30, strlen($this->avatar));
    }

     // Mutator
    public function setAvatarAttribute($value) {
        $filename = substr(md5(rand(100000, 999999)),0,5) .'_'. $value->getClientOriginalName();
        $filepath = 'public/uploads/'.date('Y').'/'.date('m').'/';
        if ($value->isValid()) {
            $path = $value->storeAs($filepath, $filename);
        }
        $this->attributes['avatar'] = str_replace('public', 'storage', $filepath) . $filename;
    }

}
