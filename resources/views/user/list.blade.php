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
    <div class="container mt-4">
        @if (session('success'))
        <div class="alert alert-success">
            <span>{{session('success')}}</span>
        </div>
        @endif
        <a href="{{route('user.create')}}" class="btn btn-success">Add User</a>
        <table class="table table-striped mt-4">
            <thead>
                <th>STT</th>
                <th>Mail Address</th>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
            </thead>
            <tbody>
                @if (!empty($users[0]))
                @foreach ($users as $key => $user)
                <tr>
                    <td>{{$users->firstItem() + $key}}</td>
                    <td>{{$user->mail_address}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->phone}}</td>
                </tr>
                @endforeach
                @else
                    <tr>
                        <td colspan="5">Không có user nào</td>
                    </tr>
                @endif

            </tbody>

        </table>
        @if ($users->hasPages())
        <div class="d-flex justify-content-center">
            {{$users->links()}}
        </div>
        @endif
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
