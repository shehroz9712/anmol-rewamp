<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Reset the site_settings table
         */


        DB::table('settings')->insert([
            'title'           => 'Anmol Eats',
            'email'           => 'info@anmoleats.com',
            'phone'           => '123456789',
            'address'         => '',
            'dark_logo'       => 'dark-logo.png',
            'logo'            => 'logo.png',
            'favicon'         => 'favicon.png',
            'facebook'        => 'facebook.com',
            'twitter'         => 'twitter.com',
            'instagram'         => 'instagram.com',
            'linkedin'         => 'linkedin.com',
            'footer_scripts'  => '',
            'footer_sentence' => 'Anmol Eats .com SV Ltd',
            'copyright'       => 'Anmol Eats .com SV Ltd',
            'created_at'      => date('Y-m-d H:i:s'),
            'updated_at'      => date('Y-m-d H:i:s')
        ]);
    }
}
