<?php

use Illuminate\Database\Seeder;

class Event_OrganizationTableSeeder_LC extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void'
     */
    public function run()
    {
        $dev_organization = DB::connection('NYAL-Development')->table('Event_Organizations')->get();

        foreach ($dev_organization as $row) {
            DB::connection('NYAL-Testing')->table('event_organizations')->insert([
                'id' => $row->id,
                'organization_name' => $row->organization_name,
                'organization_abbreviation' => $row->organization_abbreviation,
                'organization_website' => $row->organization_website,
                'contact_name' => $row->contact_name,
                'contact_phone' => $row->contact_phone,
                'rm_state' => $row->rm_state
            ]);
        }
        // App\EventOrganization::create(['organization_name' => 'Racing Inc']);
    }
}
