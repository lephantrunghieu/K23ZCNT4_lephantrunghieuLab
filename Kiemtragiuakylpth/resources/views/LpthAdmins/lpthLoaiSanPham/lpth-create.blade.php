@extends('_layouts.admins._master')
@section('title','Them moi loai san pham')

@section('content-body')
<div class="container border">
    <div class="row">
        <div class="col">
            <form action="{{route('lpthadmins.lpthloaisanpham.lpthcreatesubmit')}}" method="post">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h2>Them moi loai san pham</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="lpthmaloai" class="col-sm-2 col-form-label">Ten Loai</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lpthmaloai" name="lpthmaloai>                                
                            </div>
                            
                        </div>
                    </div>
                </div>
            </form>
    </div>
    </div>