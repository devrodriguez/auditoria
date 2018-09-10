<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insertar un role
        DB::table('roles')->insert([
            'description' => 'Master',
        ]);

        // Insertar un role
        DB::table('roles')->insert([
            'description' => 'Senior',
        ]);

        // Insertar un role
        DB::table('roles')->insert([
            'description' => 'Junior',
        ]);
    }
}
