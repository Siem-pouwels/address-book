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
            'last_name' => Str::random(10).'@gmail.com',
            'tel_nmr' => 123123123,
            'streetname' => Str::random(10),
            'housenumber' => 3,
            'date_of_birth' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Address::insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10).'@gmail.com',
            'tel_nmr' => 123123123,
            'streetname' => Str::random(10),
            'housenumber' => 3,
            'date_of_birth' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Address::insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10).'@gmail.com',
            'tel_nmr' => 123123123,
            'streetname' => Str::random(10),
            'housenumber' => 3,
            'date_of_birth' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Address::insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10).'@gmail.com',
            'tel_nmr' => 123123123,
            'streetname' => Str::random(10),
            'housenumber' => 3,
            'date_of_birth' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Address::insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10).'@gmail.com',
            'tel_nmr' => 123123123,
            'streetname' => Str::random(10),
            'housenumber' => 3,
            'date_of_birth' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Address::insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10).'@gmail.com',
            'tel_nmr' => 123123123,
            'streetname' => Str::random(10),
            'housenumber' => 3,
            'date_of_birth' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Address::insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10).'@gmail.com',
            'tel_nmr' => 123123123,
            'streetname' => Str::random(10),
            'housenumber' => 3,
            'date_of_birth' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Address::insert([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10).'@gmail.com',
            'tel_nmr' => 123123123,
            'streetname' => Str::random(10),
            'housenumber' => 3,
            'date_of_birth' => Carbon::now(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
