<?php

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::forceCreate([
            'name' => "Jean-Philippe Murray",
            'email' => 'curieuxmurray@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
