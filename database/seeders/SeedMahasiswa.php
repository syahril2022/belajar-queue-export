<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedMahasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_id');

        for($i=2; $i<=100000; $i++){
        	DB::table('mahasiswas')->insert([
                'nama' => $faker->name($gender='male'),
        		'nim' => $faker->numberBetween(2000,9999),
        		'kelas' => $faker->jobTitle()
        	]);
        }
    }
}
