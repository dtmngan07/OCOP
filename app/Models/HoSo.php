<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoSo extends Model
{
    use HasFactory;
    protected $table = 'ho_sos';

    protected $fillable = [
        'id',
        'TrangThai',
        'SanPham',
        'TenDonVi',
        'BieuTuong',
        'GiayDKKD',
        'NgayDKKD',
        'SoDKKD',
        'MaSoThue',
        'DiaChi',
        'NguoiDaiDien',
        'DiaChi_NguoiDaiDien',
        'DienThoai',
        'Email',
        'Website',
        'DiaChiXuong',
        'DiaChiCty',
        'VonDieuLe',
        /* mau 2 */
        'MoTaQuyCachSanPham',
        'TinhTrangCongBoChatLuong',
        'TinhTrangSoHuuTriTue',
        'LoaiHinhDangKySoHuuTriTue',
        'TinhTrangVeSinhAnToanThucPham',
        'LichSuHinhThanh',
        'LyDoThanhLap',
        'GiaTriSanPham',

        'DatvaVanPhong',
        'DatSanXuat',
        'NguonDien',
        'NguonNuoc',
        'PhuongTienVanTai',
        'PhuongTienTruyenThong',
        'KetQuaBanHang',
        'ChiPhi',
        'DoanhThu',
        'NhanLuc',
        'NguonCungCapNguyenLieu',

        'MucDoHoatDongSanXuat',
        'ThiTruong',
        'MucDoBanSanPham',
        'DoiTuongKhachHang',
        'LoaiHinhGopVon',
        'DiaChiSanXuat',

        'PhuongAnKinhDoanh',
        'QuyTrinhSanXuat',
        'HoTroKhac',
        'HoTroDaoTao',
        'TanSuatHopMat',
        'CachChiaTien',
        'ThachThuc',
        'NhuCauHoTro',

       /*  mẫu 3 */
        'SoLuongThanhVien',
        'NganhNghe',
        'NhanSu',
        'TongDienTichDat',
        'SoDoToChuc',
        'ChucNangNhiemVuNhanSu',

        'DanhGiaThiTruong',
        'DanhGiaKhaNangThamGiaThiTruong',
        'CanCuPhapLy',
        'PhanTichChung',
        'PhanTichCanhTranh',
        'MucTieuChienLuoc',
        'HoatDongSanXuat',
        'KenhPhanPhoi',

        'KeHoachXucTienThuongMai',
        'KeHoachMarketing',

        'CoSoHaTang',
        'TrangThietBi',
        'NhanLucDieuChinh',
        'DieuKienKhac',

        'NhuCauVon',
        'PhuongAnHuyDong',
        'TongDoanhThu',
        'TongChiPhi',
        'LoiNhuan',
        'PhuongAnTaiChinhKhac',

        'CoCauToChuc',
        'CongDong',
        'HoatDongKeToan',
        'TinhHinhTiepThi',
        'PhuongAnBaoVeMoiTruong'

        ];
        public function add_HoSo ($data){
            return DB::table($this->table)->insert($data);
        }

}
