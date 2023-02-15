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
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('yomigana');
            $table->string('company');
            $table->string('Tnumber')->nullable();
            $table->string('depart');
            $table->string('section');
            $table->string('job');
            $table->date('firstDay');
            $table->date('startDay');
            $table->date('endDay');
            $table->double('term',2,1)->nullable();
            $table->string('workType');
            $table->integer('hcost');
            $table->integer('tmcost')->nullable();
            $table->integer('tdcost')->nullable();
            $table->string('troute')->nullable();
            $table->string('pnumber')->nullable();
            $table->string('pname')->nullable();
            $table->string('tcontent');
            $table->string('HAname');
            $table->string('HAemail');
            $table->text('remark')->nullable();
            $table->string('confirmer');
            $table->string('Cemail');
            $table->text('CostMemo')->nullable();
            $table->string('kairan1');
            $table->string('kairan2')->nullable();
            $table->string('kairan3')->nullable();
            $table->string('kairan4')->nullable();
            $table->string('kairan5')->nullable();
            $table->string('CCmycompany1')->nullable();
            $table->string('CCmycompany2')->nullable();
            $table->string('CCmycompany3')->nullable();
            $table->string('CCmycompany4')->nullable();
            $table->string('CCmycompany5')->nullable();
            $table->string('CCmycompany6')->nullable();
            $table->string('CChaken1')->nullable();
            $table->string('CChaken2')->nullable();
            $table->string('CChaken3')->nullable();
            $table->string('CChaken4')->nullable();
            $table->string('CChaken5')->nullable();
            $table->string('CChaken6')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employes');
    }
};
