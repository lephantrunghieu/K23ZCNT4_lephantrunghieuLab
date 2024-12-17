@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm Nhà Cung Cấp</h2>
    <form action="{{ route('lpthnhacc.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="lpthMaNCC">Mã Nhà Cung Cấp</label>
            <input type="text" name="lpthMaNCC" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthTenNCC">Tên Nhà Cung Cấp</label>
            <input type="text" name="lpthTenNCC" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthDiachi">Địa Chỉ</label>
            <input type="text" name="lpthDiachi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthDienthoai">Điện Thoại</label>
            <input type="text" name="lpthDienthoai" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Thêm</button>
    </form>
</div>
@endsection
