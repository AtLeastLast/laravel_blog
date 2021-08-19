<!doctype html>

@section('content')
<h1 class="mx-6">All Users</h1>

<html>


<body>
    <article class="mx-6">
        <table border = "1">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </table>
    </article>
</body>
</html>
</head>
<a href="/" class="btn btn-outline-primary btn-sm mx-6 my-3">Go Back</a>
@endsection
@extends('welcome')

