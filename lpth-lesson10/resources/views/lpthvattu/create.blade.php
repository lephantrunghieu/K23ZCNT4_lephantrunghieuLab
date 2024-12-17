@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Thêm Vật Tư</h2>
    <form action="{{ route('lpthvattu.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="lpthMaVTu">Mã Vật Tư</label>
            <input type="text" name="lpthMaVTu" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthTenVTu">Tên Vật Tư</label>
            <input type="text" name="lpthTenVTu" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthDvTinh">Đơn Vị Tính</label>
            <input type="text" name="lpthDvTinh" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="lpthPhanTram">Phần Trăm</label>
            <input type="number" name="lpthPhanTram" class="form-control" step="0.01" min="0" max="100" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Thêm</button>
    </form>
</div>
@endsection
