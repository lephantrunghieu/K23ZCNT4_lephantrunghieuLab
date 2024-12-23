<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LPTH_Loai_San_Pham extends Model
{
    use HasFactory;

    protected $table = 'LPTH_LOAI_SAN_PHAM';

    protected $fillable = [
        'lpthMaLoai',
        'lpthTenLoai',
        'lpthTrangThai',
    ];
}
