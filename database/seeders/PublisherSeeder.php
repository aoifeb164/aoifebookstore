<?php
# @Date:   2020-11-22T14:03:18+00:00
# @Last modified time: 2020-11-22T14:06:48+00:00




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
        $publisher = new Publisher();
        $publisher->name = "O'Rielly Media";
        $publisher->address= "USA";
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = "Wrox Press";
        $publisher->address= "UK";
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = "New Riders";
        $publisher->address= "USA";
        $publisher->save();

        $publisher = new Publisher();
        $publisher->name = "John Wiley";
        $publisher->address= "UK";
        $publisher->save();

    }
}
