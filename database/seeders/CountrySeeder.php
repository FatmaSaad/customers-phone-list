<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'code' => '+237',
                'pattern' => '\(237\)?[2368]\d{7,8}$',
                'name' => 'cameroon'
            ],
            [
                'code' => '+251',
                'pattern' => '\(251\)?[1-59]\d{8}$',
                'name' => 'ethiopia'
            ],
            [
                'code' => '+212',
                'pattern' => '\(212\)?[5-9]\d{8}$',
                'name' => 'morocco'
            ],
            [
                'code' => '+258',
                'pattern' => '\(258\)?[28]\d{7,8}$',
                'name' => 'mozambique'
            ],

            [
                'code' => '+256',
                'pattern' => '\(256\)?\d{9}$',
                'name' => 'uganda'
            ]
        ];

        DB::table('countries')->upsert($countries, ['code']);
    }
}
