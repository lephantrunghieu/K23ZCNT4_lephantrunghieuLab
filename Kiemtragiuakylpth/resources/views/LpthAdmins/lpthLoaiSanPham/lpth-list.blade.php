@extends('_layouts.admins._master')
@section('title','Danh sach san pham')

@section('content-body')
<div class="container border">
    <div class="row">
        <div class="col-12"><h1>Danh sach san pham</h1>
    </div>
    </div>

    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ma Loai</th>
                    <th>Ten Loai</th>
                    <th>Trang Thai</th>
                    <th>Chuc nang</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($lpthLoaiSanPham as $item)
                <tr>
                    <td class="text-center">{{$loop->iteration}}</td>
                    <td>{{$item->lpthMaLoai}}</td>
                    <td>{{$item->lpthTenLoai}}</td>
                    <td>{{$item->lpthTrangThai}}</td>
                    <td>
                        view / edit / delete
                    </td>
                </tr>
                @empty
                <tr>
                    <th colspan="5">Chua co thong tin loai san pham</th>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>