<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        function randRole(){
            $a =random_int(0,2);
            if ($a==2) {
                return 'guest';
            } else if($a==1){
                return 'user';
            } else {
                return 'admin';
            }
    
        }
        for ($i=0; $i <  1000; $i++) { 
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
                'role'=> randRole(),
                'age' =>random_int(10,110)
            ]);
        }
    }

}