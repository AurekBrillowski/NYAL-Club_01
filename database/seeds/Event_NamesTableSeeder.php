<?php

use Illuminate\Database\Seeder;

class Event_NamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // App\Event_Type::truncate();
        $dev_organization = DB::connection('NYAL-Development')->table('Event_Names')->get();

        foreach ($dev_organization as $row) {
            DB::connection('NYAL-Testing')->table('Event_Names')->insert([
                'id' => $row->id,
                'event_name' => $row->event_name,
                'alpha_sort_name' => $row->alpha_sort_name,
                'Event_Organization_id' => $row->Event_Organization_id,
                'Event_Type_id' => $row->Event_Type_id,
                'NYAL_Season_id' => $row->NYAL_Season_id,
                'club_race' => $row->club_race,
                'school_race' => $row->school_race,
                'month_id' => $row->month_id,
                'race_website' => $row->race_website,
                'tentative' => $row->tentative,
                'confirmed' => $row->confirmed,
                'data_updated' => $row->data_updated,
                'current_year_date' => $row->current_year_date
            ]);
        }
    }
}
