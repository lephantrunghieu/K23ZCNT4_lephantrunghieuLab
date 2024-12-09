<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LPTH - Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('lpthaccount.lpthloginsubmit')}}" method="post">
            @csrf
            <div class="card">
                <div class="card header">
                    <h1>LPTH -Login</h1>
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="lpthEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" 
                            id="lpthEmail" name="lpthEmail"
                            placeholder="lpthEmail@example.com"/>
                            @error('lpthEmail')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <span id="email-error"></span>
                </div>
                    <div class="mb-3">
                        <label for="lpthPass" class="form-label">Email</label>
                        <input type="password" class="form-control" 
                            id="lpthPass" name="lpthPass"
                            placeholder="*************"/>
                            @error('lpthPass')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        <span id="email-error"></span>
                    </div>
                </div>

                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>

                    @if (Session::has('lpth-error'))
                        <div class="alert alert-danger">
                            <ul>
                                {{ Session::get('lpth-error')}}
                            </ul>
                        </div>
                    @endif
                </div>

            </div>

        </form>
    </section>
</body>
</html>