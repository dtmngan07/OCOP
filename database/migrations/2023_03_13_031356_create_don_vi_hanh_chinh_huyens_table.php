<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonViHanhChinhHuyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_vi_hanh_chinh_huyens', function (Blueprint $table) {
            $table->id();
            $table->string('ma')->unique();
            $table->string('ten');
            $table->timestamps();

            $table->unsignedBigInteger('don_vi_hanh_chinh_tinh_id')->nullable();

            $table->foreign('don_vi_hanh_chinh_tinh_id')->references('id')->on('don_vi_hanh_chinh_tinhs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('don_vi_hanh_chinh_huyens');
    }
}
