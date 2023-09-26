<h1>header</h1>
<h2>name = {{$name}}</h2>
<ul>

    @foreach ($furits as $value => $key)
    <li>{{$key}} = {{$value}}</li>
    @endforeach

</ul>

{{-- @section('title')
    header
@endsection --}}
