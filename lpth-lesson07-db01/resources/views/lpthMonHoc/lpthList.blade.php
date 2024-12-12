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
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h1>Danh sach mon hoc</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ma mon hoc</th>
                            <th>Ten mon hoc</th>
                            <th>So tiet</th>
                            <th>Chuc nang</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($lpthMonHocs as $item)
                            <tr>
                                <td>1</td>
                                <td>{{$item->LPTHMAMH}}</td>
                                <td>{{$item->LPTHTENMH}}</td>
                                <td>{{$item->LPTHSOTIET}}</td>
                                <td>
                                    view / edit / delete
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">
                                    <h3>Tong so mon hoc: {{$lpthMonHocs->count()}}</h3>
                                </th>
                            </tr>
                        </tfoot>
                </table>
            </div>
        </div>

    </section>
</body>
</html>