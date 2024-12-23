@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Chỉnh sửa loại sản phẩm</h1>
    <form action="{{ route('lpthloaisanpham.update', $lpthLoaiSanPham->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="lpthMaLoai">Mã loại</label>
            <input type="text" name="lpthMaLoai" class="form-control" value="{{ $lpthLoaiSanPham->lpthMaLoai }}" required>
        </div>
        <div class="form-group">
            <label for="lpthTenLoai">Tên loại</label>
            <input type="text" name="lpthTenLoai" class="form-control" value="{{ $lpthLoaiSanPham->lpthTenLoai }}" required>
        </div>
        <div class="form-group">
            <label for="lpthTrangThai">Trạng thái</label>
            <select name="lpthTrangThai" class="form-control">
                <option value="1" {{ $lpthLoaiSanPham->lpthTrangThai ? 'selected' : '' }}>Hoạt động</option>
                <option value="0" {{ !$lpthLoaiSanPham->lpthTrangThai ? 'selected' : '' }}>Không hoạt động</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Cập nhật</button>
    </form>
</div>
@endsection
