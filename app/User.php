<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $fillable = ['id','nom','prenom','date_nais','email','vef_email','pays','ville','address','numero','usser','password','passgener','token','isadmin','solde','maxmontant','avatar','remember_token','pourcentange'];


    /*
     * Cet mutatteur permet de crypter le mot de passe avant de l'envoie dans la base de données
     *
     * @return string
     */
    public function setPasswordAttribute($value){
         return $this->attributes['password'] = bcrypt($value);
        }


    /*
     * Cette function convertir l'email en miniscule avent d'uploader dans la base de données
     *
     * @return string
     */
    public function setEmailAttribute($value){
        return $this->attributes['email'] = strtolower($value);
    }


    protected $hidden = [
        'id','password' ,'passgener', 'remember_token','isadmin','maxmontant','vef_email'
    ];
}
