<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LpthNhacc extends Model
{
    use HasFactory;

    protected $table = 'lpthnhacc';
    protected $primaryKey = 'lpthMaNCC';
    public $timestamps = false;

    protected $fillable = ['lpthMaNCC', 'lpthTenNCC', 'lpthDiachi', 'lpthDienthoai'];
}
