@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sửa Nhà Cung Cấp</h2>
    <form action="{{ route('lpthnhacc.update', $nhacc->lpthMaNCC) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="lpthMaNCC">Mã Nhà Cung Cấp</label>
            <input type="text" name="lpthMaNCC" value="{{ $nhacc->lpthMaNCC }}" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="lpthTenNCC">Tên Nhà Cung Cấp</label>
            <input type="text" name="lpthTenNCC" value="{{ $nhacc->lpthTenNCC }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthDiachi">Địa Chỉ</label>
            <input type="text" name="lpthDiachi" value="{{ $nhacc->lpthDiachi }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthDienthoai">Điện Thoại</label>
            <input type="text" name="lpthDienthoai" value="{{ $nhacc->lpthDienthoai }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Cập Nhật</button>
    </form>
</div>
@endsection
