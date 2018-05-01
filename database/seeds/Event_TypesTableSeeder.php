<?php

use Illuminate\Database\Seeder;

class Event_TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('Event_Types')->unguard();
        // \App\Event_Type::unguard();
        // App\Event_Type::truncate();
        $dev_organization = DB::connection('NYAL-Development')->table('Event_Types')->get();
        // $dev_organization = \App\Event_Type::on('NYAL-Development')->table('Event_Types')->get();

        foreach ($dev_organization as $row) {
            DB::connection('NYAL-Testing')->table('Event_Types')->insert([
                'id' => $row->id,
                'event_type_name' => $row->event_type_name
            ]);
        }
    }
}
