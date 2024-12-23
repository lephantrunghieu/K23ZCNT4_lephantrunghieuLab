@extends('layouts.app')

@section('content')
<div id="lpth-container-trang-tong-quan" name="lpth-container-trang-tong-quan" class="container">
    <h1 id="lpth-header-trang-tong-quan" name="lpth-header-trang-tong-quan">Trang Tổng Quan Quản Trị</h1>
    <div class="row">
        <!-- Thẻ tổng số loại sản phẩm -->
        <div class="col-md-6" id="lpth-col-loai-san-pham" name="lpth-col-loai-san-pham">
            <div class="card" id="lpth-card-loai-san-pham" name="lpth-card-loai-san-pham">
                <div class="card-body">
                    <h5 class="card-title" id="lpth-title-loai-san-pham" name="lpth-title-loai-san-pham">Tổng Số Loại Sản Phẩm</h5>
                    <p class="card-text" id="lpth-text-loai-san-pham" name="lpth-text-loai-san-pham">{{ $lpthTongSoLoaiSanPham }}</p>
                </div>
            </div>
        </div>

        <!-- Thẻ tổng số người dùng -->
        <div class="col-md-6" id="lpth-col-nguoi-dung" name="lpth-col-nguoi-dung">
            <div class="card" id="lpth-card-nguoi-dung" name="lpth-card-nguoi-dung">
                <div class="card-body">
                    <h5 class="card-title" id="lpth-title-nguoi-dung" name="lpth-title-nguoi-dung">Tổng Số Người Dùng</h5>
                    <p class="card-text" id="lpth-text-nguoi-dung" name="lpth-text-nguoi-dung">{{ $lpthTongSoNguoiDung }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Danh sách liên kết -->
        <div class="col-md-12" id="lpth-col-lien-ket" name="lpth-col-lien-ket">
    <h2 id="lpth-header-lien-ket" name="lpth-header-lien-ket">Quản Lý Nhanh</h2>
    <ul id="lpth-list-lien-ket" name="lpth-list-lien-ket">
        <!-- Quản Lý Loại Sản Phẩm -->
        <li id="lpth-li-loai-san-pham" name="lpth-li-loai-san-pham">
            <a href="{{ route('lpth_quan_tri.loai_san_pham') }}" id="lpth-link-loai-san-pham" name="lpth-link-loai-san-pham">
                Quản Lý Loại Sản Phẩm
            </a>
        </li>

        <!-- Quản Lý Sản Phẩm -->
        <li id="lpth-li-san-pham" name="lpth-li-san-pham">
            <a href="{{ route('sanpham.index') }}" id="lpth-link-san-pham" name="lpth-link-san-pham">
                Quản Lý Sản Phẩm
            </a>
        </li>

        <!-- Quản Lý Người Dùng -->
        <li id="lpth-li-nguoi-dung" name="lpth-li-nguoi-dung">
            <a href="{{ route('lpth_quan_tri.nguoi_dung') }}" id="lpth-link-nguoi-dung" name="lpth-link-nguoi-dung">
                Quản Lý Người Dùng
            </a>
        </li>
    </ul>
</div>


@endsection
