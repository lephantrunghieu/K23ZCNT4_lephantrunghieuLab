<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assest/css/bootstrap.min.css')}}">
    <title>{{$title}}</title>
</head>
<body>
    <div class="container">
        <div class="alert alert-info text-center text-dark">
            {{$title}}
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="address">Gmail:</label>
                <input type="text" name="name" id="name_id" placeholder="Nhập Gmail ..." class="form-control">
            </div>
            <div class="form-group">
                <label for="name_id">Tên:</label>
                <input type="text" name="name" id="name_id" placeholder="Nhập Tên ..." class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Gửi</button>
            </div>
        </form>
    </div>
    <script src="{{asset('assest/js/bootstrap.min.js')}}"></script>
</body>
</html>
