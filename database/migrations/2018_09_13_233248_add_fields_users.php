<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('scorers', function (Blueprint $table) {
            $table->string('first_name')->nullable()->after('id');
            $table->string('identification')->nullable()->after('id');
            $table->string('dependence')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('scorers', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('identification');
            $table->dropColumn('dependence');
        });
    }
}
