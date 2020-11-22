<?php
# @Date:   2020-11-22T13:51:42+00:00
# @Last modified time: 2020-11-22T14:07:52+00:00




use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPublisherIdToBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
          $table ->dropColumn('publisher');
          $table->unsignedBigInteger('publisher_id');

          $table->foreign('publisher_id')->references('id')->on('publishers')->onUpdate('cascade')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropForeign(['publisher_id']);
              $table ->dropColumn('publisher_id');
              $table->string('publisher');
        });
    }
}
