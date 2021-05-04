<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string ('code');
            $table->string('name');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('phone');
            $table->date('joindate');
            $table->string('email')->unique();    
            $table->string('npwp');
            $table->string('ktp');
            $table->string('type')->nullable();
            $table->date('unactivedate')->Nullable();
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
        Schema::dropIfExists('clients');
    }
}
