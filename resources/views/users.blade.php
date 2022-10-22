<h1>users {{$users[0]}}</h1>

@foreach ($users as $user)
    <p>This is user {{ $user->name }}</p>
@endforeach