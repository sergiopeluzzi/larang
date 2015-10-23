<?php
/**
 * Created by PhpStorm.
 * User: Sergio
 * Date: 23/10/2015
 * Time: 14:01
 */

namespace Larang\Validators;


use Prettus\Validator\LaravelValidator;

class ProjectValidator extends LaravelValidator
{
    protected $rules = [
        'owner_id' => 'required',
        'client_id' => 'required',
        'name' => 'required|max:255',
        'status' => 'required',
        'due_date' => 'required'
    ];
}