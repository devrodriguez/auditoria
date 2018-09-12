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
        $this->call(FindingSeeder::class);
        $this->call(EvidenceSeeder::class);
        $this->call(SupportTypeSeeder::class);
        $this->call(SupportSeeder::class);
    }
}
