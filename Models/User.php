<?php
namespace Models;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * Author: Narek Vardanyan <vardanyan703@gmail.com>
 */
class User extends Eloquent
{
    protected $fillable = [
        'name', 'email'
    ];
}