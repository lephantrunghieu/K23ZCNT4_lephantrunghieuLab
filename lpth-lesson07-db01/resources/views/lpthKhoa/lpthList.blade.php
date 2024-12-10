<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPTH- Danh sach khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
</head>
<body>
    <section class="container border my-3">
        <h1>Danh sach khoa</h1>
        <table class="table table-bordered">
            <thead>
                <tr>      
                    <th>#</th>   
                    <th>Ma Khoa</th>
                    <th>Ten Khoa</th>
                    <th>Chuc nang</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0;
                @endphp
                @foreach ($lpthKhoas as $item)
                    @php
                        $stt++;
                    @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item->LPTHMAKHOA}}</td>
                        <td>{{$item->LPTHTENKH}}</td>
                        <td>
                            <a href="/khoas/detail/{{$item->LPTHMAKHOA}}" class="btn btn-success">
                                Chi Tiet</a>
                            <a href="/khoas/edit/{{$item->LPTHMAKHOA}}" class="btn btn-primary">
                                Sua</a>
                            delete
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>