<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreatedByToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     
     Schema::table('posts', function (Blueprint $table) {
            $table->string('created_by')->unique()->after('category_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     
      Schema::table('posts', function (Blueprint $table) {
        $table->dropColumn('created_by');
        });

    }
}
