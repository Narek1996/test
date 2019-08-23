<?php
namespace Console;
use Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * Author: Narek Vardanyan <vardanyan703@gmail.com>
 */
class User extends Eloquent
{
    protected $fillable = [
        'github_id', 'github_login'
    ];
    public $timestamps = false;
}