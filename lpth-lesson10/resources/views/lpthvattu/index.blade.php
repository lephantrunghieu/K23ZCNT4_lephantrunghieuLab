@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Vật Tư</h2>
    <a href="{{ route('lpthvattu.create') }}" class="btn btn-success">Thêm Vật Tư</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Mã Vật Tư</th>
                <th>Tên Vật Tư</th>
                <th>Đơn Vị Tính</th>
                <th>Phần Trăm</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vattus as $vattu)
            <tr>
                <td>{{ $vattu->lpthMaVTu }}</td>
                <td>{{ $vattu->lpthTenVTu }}</td>
                <td>{{ $vattu->lpthDvTinh }}</td>
                <td>{{ $vattu->lpthPhanTram }}</td>
                <td>
                    <a href="{{ route('lpthvattu.edit', $vattu->lpthMaVTu) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('lpthvattu.destroy', $vattu->lpthMaVTu) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
