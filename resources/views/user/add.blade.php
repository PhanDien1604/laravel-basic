<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaravelBasic</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-8">
                <div class="card">
                    <form action="{{route('user.store')}}" method="post">
                        @csrf

                        <div class="card-header bg-success">
                            <span>Thêm dữ liệu</span>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">Vui lòng kiểm tra lại dữ liệu</div>
                            @endif
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="mail_address">Email address</label>
                                        <input type="text" class="form-control" name="mail_address" id="mail_address" value="{{old('mail_address')}}" placeholder="Enter email">
                                        @error('mail_address')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password" value="{{old('password')}}" placeholder="Enter password">
                                        @error('password')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirm">Confirm Password</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirm" value="{{old('password_confirmation')}}" placeholder="Enter confirm password">
                                        @error('password_confirmation')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="fullname">Full name</label>
                                        <input type="text" class="form-control" name="name" id="fullname" value="{{old('name')}}" placeholder="Enter name">
                                        @error('email_address')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" name="address" id="address" value="{{old('address')}}" placeholder="Enter address">
                                        @error('address')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" name="phone" id="phone" value="{{old('phone')}}" placeholder="Enter phone">
                                        @error('phone')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary">Submit</button>
                                    <a href="{{route('user.index')}}" class="btn btn-secondary float-right">Quay lại</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    if($('.form-group').find('span')) {
        $('.form-group span').parent().find('input').css('border-color','red')
    }
</script>
</body>
</html>
