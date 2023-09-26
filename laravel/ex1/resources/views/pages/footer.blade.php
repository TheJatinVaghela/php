<h1>footer</h1>
<h2>sername = {{$sername}}</h2>
<ul>
    @forelse ($something as $key => $value)
        <li>{{$key}} = {{$value}}</li>
    @empty
        <li>no value found</li>
    @endforelse

    {{-- @extends('welcome') --}}
    {{-- @section('content')
        <h1>From section</h1>
    @endsection --}}

    {{-- @section('title')
      footer
    @endsection --}}
</ul>
