<?php
# @Date:   2021-01-10T16:17:20+00:00
# @Last modified time: 2021-01-10T16:38:50+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCoverToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('books', function (Blueprint $table) {
        //     $table->string('cover')->nullable()->default('default-cover.png');
        //});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('books', function (Blueprint $table) {
        //     $table->dropColumn('cover');
        //});
    }
}
