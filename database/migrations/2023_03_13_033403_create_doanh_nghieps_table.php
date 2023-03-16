<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoanhNghiepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doanh_nghieps', function (Blueprint $table) {
            $table->id();
            $table->string('TenChuThe');
            $table->string('TenSanPhamDangKy');
            $table->string('BieuTuong');
            $table->string('MaSoThue');
            $table->string('NgayThanhLap');
            $table->string('VonDieuLe');
            $table->string('SoGiayDKKD');
            $table->string('LoaiHinhToChuc');
            $table->string('DiaChiDN');
            $table->string('SDT');
            $table->string('Email');
            $table->string('Website');
            $table->string('NguoiDaiDien_ID');
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
        Schema::dropIfExists('doanh_nghieps');
    }
}
