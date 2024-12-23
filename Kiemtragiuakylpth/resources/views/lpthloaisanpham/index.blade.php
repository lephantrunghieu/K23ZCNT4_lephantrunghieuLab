@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Danh sách loại sản phẩm</h1>
    <a href="{{ route('lpthloaisanpham.create') }}" class="btn btn-primary mb-3">Thêm mới loại sản phẩm</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lpthLoaiSanPhams as $lpthLoaiSanPham)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $lpthLoaiSanPham->lpthMaLoai }}</td>
                <td>{{ $lpthLoaiSanPham->lpthTenLoai }}</td>
                <td>{{ $lpthLoaiSanPham->lpthTrangThai ? 'Hoạt động' : 'Không hoạt động' }}</td>
                <td>
                    <a href="{{ route('lpthloaisanpham.edit', $lpthLoaiSanPham->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('lpthloaisanpham.destroy', $lpthLoaiSanPham->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc muốn xóa?')">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
