


@section('content')

<h1>user {{$teste->name}}</h1>

@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }} <br>
@endfor
@endsection


