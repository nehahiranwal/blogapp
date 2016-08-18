<?php
use Illuminate\Database\Seeder;
class UsersTableSeeder extends Seeder {
public function run()
 {
    DB::table('users')->insert([
            'name' => 'neha',
            'email' => 'neha.hiranwal14@gmail.com',
            'password' => Hash::make('neha'),
        'created_at'=> date("Y-m-d H:i:s"),
     'updated_at'=>date("Y-m-d H:i:s"),
        ]);
    
 }
}