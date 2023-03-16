<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonViDuyetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_vi_duyets', function (Blueprint $table) {
            $table->id();
            $table->string('tendonvi');
            $table->string('diachi');
            $table->string('sodienthoai');
            $table->timestamps();


            $table->unsignedBigInteger('phieu_dang_ki_id')->nullable();
            $table->foreign('phieu_dang_ki_id')->references('id')->on('phieu_dang_kies')->onDelete('cascade');

            $table->unsignedBigInteger('cap_duyet_id')->nullable();
            $table->foreign('cap_duyet_id')->references('id')->on('cap_duyets')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('don_vi_duyets');
    }
}
