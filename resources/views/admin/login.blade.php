<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('main.css') }}" rel="stylesheet">
    <title>Admin | Login</title>
</head>

<body>
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12">
                <div class="tab-content">
                    <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                        <div class="main-card mb-3 card">
                            <div class="card-body">
                                <h5 class="card-title">Admin Login</h5>
                                <form class="" method="POST" action="{{ route('admin.login') }}">
                                    @csrf
                                    <div class="position-relative form-group"><label for="exampleAddress"
                                            class="">Email</label>
                                        <input name="email" id="exampleAddress" placeholder="Email" type="text"
                                            class="form-control">

                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="position-relative form-group">
                                        <label for="exampleAddress2" class="">Password</label>
                                        <input name="password" placeholder="Password" id="exampleAddress2"
                                            type="password" class="form-control">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                    </div>
                                    <div class="position-relative form-check">
                                        <button  type="submit" class="mt-2 btn btn-primary">Sign in</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>
