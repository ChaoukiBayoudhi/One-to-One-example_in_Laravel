<?php
//use DB;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->BigIncrements('id')->unsigned()->from(100);
            $table->unsignedBigInteger('user_id');
            $table->integer('house_number')->nullable();
            $table->string('street',50);
            $table->string('province',20);
            $table->integer('postal_code')->unsigned();
            $table->index('user_id');
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
        });
        // $prefix = DB::getTablePrefix();
        // DB::update("ALTER TABLE ".$prefix."address AUTO_INCREMENT = 1000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('address');
    //     Schema::table('address', function(Blueprint $table)
    // {
    //     $table->dropForeign('user_id');
    //     $table->dropIndex('user_id');
    //     $table->dropColumn('user_id');
    // });
    }
}
