<?php

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
        $this->call(UsersTableSeeder::class);


       
        DB::table('users')->truncate();
        App\User::create([
        	'name' => 'admin',
        	'email' =>'admin@gmail.com',
        	'password' => bcrypt('12345678')
        ]);
    
    }
}
