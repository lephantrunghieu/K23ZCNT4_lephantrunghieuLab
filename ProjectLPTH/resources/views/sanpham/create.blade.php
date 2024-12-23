@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Thêm mới sản phẩm</h1>
    <form action="{{ route('sanpham.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="lpthTenSanPham">Tên sản phẩm</label>
            <input type="text" name="lpthTenSanPham" id="lpthTenSanPham" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthMaSanPham">Mã sản phẩm</label>
            <input type="text" name="lpthMaSanPham" id="lpthMaSanPham" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthHinhAnh">Hình ảnh (URL)</label>
            <input type="text" name="lpthHinhAnh" id="lpthHinhAnh" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthSoLuong">Số lượng</label>
            <input type="number" name="lpthSoLuong" id="lpthSoLuong" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthDonGia">Đơn giá</label>
            <input type="number" step="0.01" name="lpthDonGia" id="lpthDonGia" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthMaLoai">Loại sản phẩm</label>
            <input type="number" name="lpthMaLoai" id="lpthMaLoai" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthTrangThai">Trạng thái</label>
            <select name="lpthTrangThai" id="lpthTrangThai" class="form-control">
                <option value="1">Hoạt động</option>
                <option value="0">Không hoạt động</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Thêm mới</button>
    </form>
</div>
@endsection
