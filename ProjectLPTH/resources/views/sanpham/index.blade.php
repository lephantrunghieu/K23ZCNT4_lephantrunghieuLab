@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Danh sách sản phẩm</h1>
    <a href="{{ route('sanpham.create') }}" class="btn btn-primary mb-3">Thêm sản phẩm mới</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên sản phẩm</th>
                <th>Mã sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Loại sản phẩm</th>
                <th>Trạng thái</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sanPhams as $sanPham)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sanPham->lpthTenSanPham }}</td>
                <td>{{ $sanPham->lpthMaSanPham }}</td>
                <td><img src="{{ $sanPham->lpthHinhAnh }}" alt="Hình ảnh" width="50"></td>
                <td>{{ $sanPham->lpthSoLuong }}</td>
                <td>{{ $sanPham->lpthDonGia }}</td>
                <td>{{ $sanPham->lpthMaLoai }}</td>
                <td>{{ $sanPham->lpthTrangThai ? 'Hoạt động' : 'Không hoạt động' }}</td>
                <td>
                    <!-- Nút Sửa/Xóa -->
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
