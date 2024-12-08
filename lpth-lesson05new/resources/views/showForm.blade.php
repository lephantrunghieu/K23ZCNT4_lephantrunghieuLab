<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <title>{{$title}}</title>
</head>
<body>
    <div class="container">
        <div class="alert alert-info text-center">
            {{$title}}
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="gmail">Gmail:</label>
                <input type="text" name="gmail" id="gmail" class="form-control" placeholder="Nhập Gmail ...">
            </div>
            <div class="form-group">
                <label for="name">Tên: </label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nhập Tên ...">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Gửi</button>
            </div>
        </form>
    </div>
</body>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</html>
