<?php
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 19/10/2015
 * Time: 17:06
 */

namespace Larang\Validators;


use Prettus\Validator\LaravelValidator;

class ClientValidator extends LaravelValidator
{
    protected $rules = [
        'name' => 'required|max:255',
        'responsible' => 'required|max:255',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required'
    ];
}