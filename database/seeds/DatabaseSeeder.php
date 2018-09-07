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
        $this->call(RoleSeeder::class);
        $this->call(AuditorSeeder::class);
        $this->call(CriteriaSeeder::class);

        //factory(App\Auditor::class, 10)->create();
    }
}
