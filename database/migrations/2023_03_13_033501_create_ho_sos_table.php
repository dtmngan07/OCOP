<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHoSosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ho_sos', function (Blueprint $table) {
            $table->id();
            $table->string('SanPham');
            $table->string('TenDonVi');
            $table->string('BieuTuong');
            $table->string('GiayDKKD');
            $table->string('NgayDKKD');
            $table->string('SoDKKD');
            $table->string('MaSoThue');
            $table->string('DienThoai');
            $table->string('Email');
            $table->string('Website');
            $table->string('DiaChiXuong');
            $table->string('DiaChiCty');
            $table->string('VonDieuLe');

            $table->string('MoTaQuyCachSanPham');
            $table->string('TinhTrangCongBoChatLuong');
            $table->string('TinhTrangSoHuuTriTue');
            $table->string('LoaiHinhDangKySoHuuTriTue');
            $table->string('TinhTrangVeSinhAnToanThucPham');
            $table->string('LichSuHinhThanh');
            $table->string('LyDoThanhLap');
            $table->string('GiaTriSanPham');

            $table->string('DatvaVanPhong');
            $table->string('DatSanXuat');
            $table->string('NguonDien');
            $table->string('NguonNuoc');
            $table->string('PhuongTienVanTai');
            $table->string('PhuongTienTruyenThong');
            $table->string('KetQuaBanHang');
            $table->string('ChiPhi');
            $table->string('DoanhThu');
            $table->string('NhanLuc');
            $table->string('NguonCungCapNguyenLieu');
        
            $table->string('MucDoHoatDongSanXuat');
            $table->string('ThiTruong');
            $table->string('MucDoBanSanPham');
            $table->string('DoiTuongKhachHang');
            $table->string('LoaiHinhGopVon');
            $table->string('DiaChiSanXuat');

            $table->string('PhuongAnKinhDoanh');
            $table->string('QuyTrinhSanXuat');
            $table->string('YeuCauHoTro');
            $table->string('TanSuatHopMat');
            $table->string('CachChiaTien');
            $table->string('ThachThuc');
            $table->string('NhuCauHoTro');

            $table->string('SoLuongThanhVien');
            $table->string('NganhNghe');
            $table->string('NhanSu');
            $table->string('SoDoToChuc');
            $table->string('ChucNangNhiemVuNhanSu');

            $table->string('DanhGiaThiTruong');
            $table->string('DanhGiaKhaNangThamGiaThiTruong');
            $table->string('CanCuPhapLy');
            $table->string('PhanTichChung');
            $table->string('PhanTichCanhTranh');
            $table->string('MucTieuChienLuoc');
            $table->string('HoatDongSanXuat');
            $table->string('KenhPhanPhoi');

            $table->string('KeHoachXucTienThuongMai');
            $table->string('KeHoachMarketing');

            $table->string('CoSoHaTang');
            $table->string('TrangThietBi');
            $table->string('NhanLucDieuChinh');
            $table->string('DieuKienKhac');

            $table->string('NhuCauVon');
            $table->string('PhuongAnHuyDong');
            $table->string('TongDoanhThu');
            $table->string('TongChiPhi');
            $table->string('LoiNhuan');
            $table->string('PhuongAnTaiChinhKhac');

            $table->string('CoCauToChuc');
            $table->string('CongDong');
            $table->string('HoatDongKeToan');
            $table->string('TinhHinhTiepThi');
            $table->string('PhuongAnBaoVeMoiTruong');

            $table->timestamps();

            $table->unsignedBigInteger('don_vi_hanh_chinh_xa_id')->nullable();
            $table->foreign('don_vi_hanh_chinh_xa_id')->references('id')->on('don_vi_hanh_chinh_xas')->onDelete('cascade');

            $table->unsignedBigInteger('don_vi_hanh_chinh_huyen_id')->nullable();
            $table->foreign('don_vi_hanh_chinh_huyen_id')->references('id')->on('don_vi_hanh_chinh_huyens')->onDelete('cascade');

            $table->unsignedBigInteger('don_vi_hanh_chinh_tinh_id')->nullable();
            $table->foreign('don_vi_hanh_chinh_tinh_id')->references('id')->on('don_vi_hanh_chinh_tinhs')->onDelete('cascade');

            $table->unsignedBigInteger('loai_hinh_to_chuc_id')->nullable();
            $table->foreign('loai_hinh_to_chuc_id')->references('id')->on('loai_hinh_to_chucs')->onDelete('cascade');

            $table->unsignedBigInteger('nguoi_dai_dien_id')->nullable();
            $table->foreign('nguoi_dai_dien_id')->references('id')->on('nguoi_dai_diens')->onDelete('cascade');

            $table->unsignedBigInteger('phieu_dang_ki_id')->nullable();
            $table->foreign('phieu_dang_ki_id')->references('id')->on('phieu_dang_kies')->onDelete('cascade');

            $table->unsignedBigInteger('don_vi_duyet_id')->nullable();
            $table->foreign('don_vi_duyet_id')->references('id')->on('don_vi_duyets')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ho_sos');
    }
}
