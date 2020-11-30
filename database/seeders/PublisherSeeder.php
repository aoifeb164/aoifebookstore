<?php
# @Date:   2020-11-22T14:03:18+00:00
# @Last modified time: 2020-11-30T15:27:04+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i = 1; $i <=10; $i++) {
        Publisher::factory()->hasBooks(mt_rand(1,15))->create();  
      }
    }
}
