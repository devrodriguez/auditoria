<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Insertar un role
        DB::table('roles')->insert([
            'description' => 'Senior',
        ]);

        // Insertar un registro
        DB::table('auditors')->insert([
            'name' => 'John',
            'last_name' => 'Rodriguez',
            'email' => 'john@starqsoft.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'role_id' => 1
        ]);

        factory(App\Auditor::class, 10)->create();
    }
}
