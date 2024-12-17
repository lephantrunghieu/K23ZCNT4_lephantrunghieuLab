<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LpthVattu extends Model
{
    use HasFactory;

    protected $table = 'lpthvattu';
    protected $primaryKey = 'lpthMaVTu';
    public $timestamps = false;

    protected $fillable = ['lpthMaVTu', 'lpthTenVTu', 'lpthDvTinh', 'lpthPhanTram'];
}
