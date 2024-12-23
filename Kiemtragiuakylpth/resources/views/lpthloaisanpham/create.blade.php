@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Thêm mới loại sản phẩm</h1>
    <form action="{{ route('lpthloaisanpham.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="lpthMaLoai">Mã loại</label>
            <input type="text" name="lpthMaLoai" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthTenLoai">Tên loại</label>
            <input type="text" name="lpthTenLoai" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthTrangThai">Trạng thái</label>
            <select name="lpthTrangThai" class="form-control">
                <option value="1">Hoạt động</option>
                <option value="0">Không hoạt động</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Thêm</button>
    </form>
</div>
@endsection
