<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employes', function (Blueprint $table) {
            $table->string('report1')->nullable()->after('CChaken6');
            $table->string('report2')->nullable()->after('report1');
            $table->string('report3')->nullable()->after('report2');
            $table->string('report4')->nullable()->after('report3');
            $table->string('report5')->nullable()->after('report4');
            $table->string('report6')->nullable()->after('report5');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employes', function (Blueprint $table) {
            $table->dropColumn('report1');
            $table->dropColumn('report2');
            $table->dropColumn('report3');
            $table->dropColumn('report3');
            $table->dropColumn('report4');
            $table->dropColumn('report5');
            $table->dropColumn('report6');
        });
    }
};
