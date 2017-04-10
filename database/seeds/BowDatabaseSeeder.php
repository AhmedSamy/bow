<?php

use Illuminate\Database\Seeder;

class BowDatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ExtraPagesDataRowsTableSeeder');
        $this->call('BowPagesTableSeeder');
    }
}
