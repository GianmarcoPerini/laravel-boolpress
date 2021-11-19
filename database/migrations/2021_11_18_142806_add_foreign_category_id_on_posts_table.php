<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignCategoryIdOnPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    // CREAZIONE DI UNA FOREIGN KEY
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            //assegnazione di un id alla tabella post DOPO il valore id che è uguale a NULL
            $table->unsignedBigInteger('category_id')->after('id')->nullable();
        
            $table->foreign('category_id')      // prendere il nome della tabella che abbiamo appena creato
            ->references('id')                  // la colonna di riferimento
            ->on('categories')                  // e dove dobbiamo collegarci
            ->onDelete('set null');             // comportamento in caso di delete
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

            $table->dropForeign('posts_category_id_foreign');
            $table->dropColumn('category_id');
        });
    }
}
