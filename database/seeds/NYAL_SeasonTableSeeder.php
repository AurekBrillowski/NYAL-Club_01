<?php

use Illuminate\Database\Seeder;

class NYAL_SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // App\Event_Type::truncate();
        $dev_organization = DB::connection('NYAL-Development')->table('NYAL_Seasons')->get();

        foreach ($dev_organization as $row) {
            DB::connection('NYAL-Testing')->table('NYAL_Seasons')->insert([
                'id' => $row->id,
                'season_name' => $row->season_name,
                'season_month_desc' => $row->season_month_desc
            ]);
        }
    }
}
