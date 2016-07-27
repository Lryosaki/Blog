<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPostedByToPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('posts', function (Blueprint $table) {
            $table->string('posted_by')->nullable()->after('category_id');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('posts', function (Blueprint $table) {
        $table->dropColumn('posted_by');
        });
    }
}
