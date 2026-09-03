<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = DB::table('roles')
        ->where('name','Administrador')
        ->first();

        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' =>'admin@adminsenalu.test',
            'password'=> Hash::make('Admin12345'),
            'role_id'=>$adminRole->id,
            'created_at' => now(),
            'updated_at'=>now(),
        ]);
    }
}
