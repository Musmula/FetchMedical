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
        Eloquent::unguard();

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        User::truncate();
        Vet::truncate();
        UserContact::truncate();
        
        User::create([
            'name'      => 'Oliver',
            'email'     => 'oliver.dvorski@gmail.com',
            'is_admin'  => 1,
            'password'  => bcrypt('password'),
        ]);

        UserContact::create([
            'user_id' => 1
        ]);

        Vet::create([
            'user_id' => 1
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
