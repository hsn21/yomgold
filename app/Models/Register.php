<?php

namespace App\Models;

use Auth; 
use Notifiable;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    
    protected $fillable = [
        'uid','display_name', 'user_name', 'email','password','retypepassword','secret_key'
    ];
    protected $hidden = ['password','retypepassword','secret_key'];

    public function roles(){
        return $this->belongsToMany(Role::class,'role_users');
    }
    public function hasAccess(array $permissions){
        foreach($this->roles as $role){
            if($role->hasAccess($permissions)){
                return true;
            }
        }
    }
}
