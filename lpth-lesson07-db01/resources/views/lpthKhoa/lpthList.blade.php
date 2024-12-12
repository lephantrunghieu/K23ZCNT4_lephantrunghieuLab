<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPTH- Danh sach khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css
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
                                <i class="fa-solid fa-eye"></i>
                            <a href="/khoas/edit/{{$item->LPTHMAKHOA}}" class="btn btn-primary">
                                Sua
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="khoas/delete/{{$item->LPTHMAKHOA}}" class="btn btn-danger"
                                onclick="return confirm('Ban co chac chan muon xoa khoa nay khong')">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/khoas/insert" class="btn btn-primary">Them Moi</a>
    </section>
</body>
</html>