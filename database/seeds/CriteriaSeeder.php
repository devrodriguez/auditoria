<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Criteria;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Criteria::truncate();
        factory(Criteria::class, 20)->create();
    }
}
