<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.08.2019
 * Time: 12:38
 */

use Illuminate\Database\Capsule\Manager as Capsule;

class User{
    public function __construct()
    {
        Capsule::schema()->create('users', function ($table) {
            $table->string('github_id');
            $table->string('github_login');
            $table->primary('github_id');
        });
    }
}
