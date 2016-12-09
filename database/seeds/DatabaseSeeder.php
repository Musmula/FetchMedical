<?php

use App\Vet;
use App\User;
use App\UserContact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // User::truncate();
        
        User::create([
            'name'      => 'Oliver',
            'email'     => 'oliver.dvorski@gmail.com',
            'is_admin'  => 1,
            'password'  => 'password',
        ]);

        UserContact::create([
            'user_id' => 1
        ]);

        Vet::create([
            'user_id' => 1
        ]);
    }
}
