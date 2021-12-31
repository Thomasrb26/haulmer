<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class allSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $useradmin=User::create([
            'name' =>'admin thomas',
            'email'=>'thomas@gmail.com',
            'password'=> Hash::make ('admin'),
            'fullacces' => 'yes',
            'codigo' => 'adm1,'
        ]);
        $user1=User::create([
            'name' =>'Usuario Juan',
            'email'=>'juan@gmail.com',
            'password'=> Hash::make ('1234'),
            'fullacces' => 'no',
            'codigo' => 'perrogato,'
        ]);
        
    }
}
