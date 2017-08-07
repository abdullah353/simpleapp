<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Validator;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
    * Validation rules for user.
    */
    private $rules = array(
        'name' => 'required|min:3|max:35',
        'password' => 'required|min:5',
        'email' => 'required|email|unique:users'
    );

    /**
     * Errors variable.
     * @var array
     */
    private $errors;

    /**
    * Validate User Model.
    */
    public function validate($data)
    {
        // make a new validator object
        $v = Validator::make($data, $this->rules);

        // check for failure
        if ($v->fails())
        {
            // set errors and return false
            $this->errors = $v->errors();
            return false;
        }

        // validation pass
        return true;
    }

    /**
    * Retrieve any validation error occured.
    * @return Array validation errors.
    */
    public function errors()
    {
        return $this->errors;
    }
}
