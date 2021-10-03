<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Address;
use Carbon\Carbon;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'streetname' => Str::random(10),
            'housenumber' => 33,
            'postal_code' => '5845hm',
            'city_name' => 'Sint Anthonis',
            'tel_nmr' => '+3106123456',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Address::insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'streetname' => Str::random(10),
            'housenumber' => 33,
            'postal_code' => '5845hm',
            'city_name' => 'Sint Anthonis',
            'tel_nmr' => '+3106123456',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Address::insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'streetname' => Str::random(10),
            'housenumber' => 33,
            'postal_code' => '5845hm',
            'city_name' => 'Sint Anthonis',
            'tel_nmr' => '+3106123456',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Address::insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'streetname' => Str::random(10),
            'housenumber' => 33,
            'postal_code' => '5845hm',
            'city_name' => 'Sint Anthonis',
            'tel_nmr' => '+3106123456',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Address::insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
            'streetname' => Str::random(10),
            'housenumber' => 33,
            'postal_code' => '5845hm',
            'city_name' => 'Sint Anthonis',
            'tel_nmr' => '+3106123456',
            'email' => Str::random(10).'@gmail.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
