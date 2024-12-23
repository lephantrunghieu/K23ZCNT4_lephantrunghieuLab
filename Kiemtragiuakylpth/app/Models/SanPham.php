<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $fillable = [
        'lpthTenSanPham', 
        'lpthMaSanPham', 
        'lpthHinhAnh', 
        'lpthSoLuong', 
        'lpthDonGia', 
        'lpthMaLoai', 
        'lpthTrangThai'
    ];
    protected $table = 'LPTH_SAN_PHAM';
}
