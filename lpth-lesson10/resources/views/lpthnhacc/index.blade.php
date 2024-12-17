@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Danh sách Nhà Cung Cấp</h2>
    <a href="{{ route('lpthnhacc.create') }}" class="btn btn-success mb-3">Thêm Nhà Cung Cấp</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã NCC</th>
                <th>Tên NCC</th>
                <th>Địa Chỉ</th>
                <th>Điện Thoại</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nhaccs as $nhacc)
            <tr>
                <td>{{ $nhacc->lpthMaNCC }}</td>
                <td>{{ $nhacc->lpthTenNCC }}</td>
                <td>{{ $nhacc->lpthDiachi }}</td>
                <td>{{ $nhacc->lpthDienthoai }}</td>
                <td>
                    <a href="{{ route('lpthnhacc.edit', $nhacc->lpthMaNCC) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('lpthnhacc.destroy', $nhacc->lpthMaNCC) }}" method="POST" style="display:inline;">
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
