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
        Schema::create('daftar_festivals', function (Blueprint $table) {
            $table->id();
            $table->text('pimpinan');
            $table->string('wa');
            $table->text('band');
            $table->string('jumlah');
            $table->text('alamat');
            $table->text('vocal');
            $table->text('drum');
            $table->text('guitar');
            $table->text('bass');
            $table->text('keyboard');
            $table->text('other');
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
        Schema::dropIfExists('daftar_festivals');
    }
};
