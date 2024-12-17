@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sửa Vật Tư</h2>
    <form action="{{ route('lpthvattu.update', $vattu->lpthMaVTu) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="lpthMaVTu">Mã Vật Tư</label>
            <input type="text" name="lpthMaVTu" value="{{ $vattu->lpthMaVTu }}" class="form-control" readonly>
        </div>
        <div class="form-group">
            <label for="lpthTenVTu">Tên Vật Tư</label>
            <input type="text" name="lpthTenVTu" value="{{ $vattu->lpthTenVTu }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthDvTinh">Đơn Vị Tính</label>
            <input type="text" name="lpthDvTinh" value="{{ $vattu->lpthDvTinh }}" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthPhanTram">Phần Trăm</label>
            <input type="number" name="lpthPhanTram" value="{{ $vattu->lpthPhanTram }}" class="form-control" step="0.01" min="0" max="100" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Cập Nhật</button>
    </form>
</div>
@endsection
