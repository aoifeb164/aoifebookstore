<?php
# @Date:   2020-12-20T16:18:27+00:00
# @Last modified time: 2020-12-20T16:42:22+00:00




namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = new Review();
        $review->title ='Good Book';
        $review->body ='Great Read, I enjoyed it!';
        $review->user_id = 2;
        $review->book_id = 1;
        $review->save();
        $review = new Review();
        $review->title ='Good Book';
        $review->body ='Great Read, I enjoyed it!';
        $review->user_id = 3;
        $review->book_id = 5;
        $review->save();
        $review = new Review();
        $review->title ='Good Book';
        $review->body ='Great Read, I enjoyed it!';
        $review->user_id = 7;
        $review->book_id = 9;
        $review->save();

    }
}
