<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Insertar un registro
        DB::table('auditors')->insert([
            'name' => 'John',
            'last_name' => 'Rodriguez',
            'email' => 'john@starqsoft.com'
        ]);

        factory(App\Auditor::class, 10)->create();
    }
}
