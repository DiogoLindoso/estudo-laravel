<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            [
                'email'=>'admin@admin.com'
            ],
            [
                'name'=>'Administrador',
                'password'=>bcrypt('password')
            ]
        );

        User::firstOrCreate(
            [
                'email'=>'funcionario@gmail.com'
            ],
            [
                'name'=>'Funcionario',
                'password'=>bcrypt('password')
            ]
        );
    }
}
