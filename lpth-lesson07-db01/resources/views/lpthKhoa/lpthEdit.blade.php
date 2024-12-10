<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPTH- Thong tin chi tiet khoa can sua</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('lpthkhoa.lpthEditSubmit')}}" method="post">
            @csrf
        <div class="card">
            <div class="card-header">
                <h3>Thông tin chi tiết khoa can sua </h3>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                <label for="LPTHMAKH" class="col-sm-2 col-form-label">Ma khoa</label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control" 
                            id="LPTHMAKH" name="LPTHMAKH"
                            value="{{$khoa->LPTHMAKHOA}}">
                </div>
        </div>
        <div class="mb-3 row">
                <label for="LPTHTENKH" class="col-sm-2 col-form-label">Ten khoa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" 
                            id="LPTHTENKH" name="LPTHTENKH"
                            value="{{$khoa->LPTHTENKH}}">
                </div>
            </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Submit</button>
                    <a href="/khoas" class="btn btn-primary">Back</a>
            </div>
        </div>
        </form>
</section>
</body>
</html>