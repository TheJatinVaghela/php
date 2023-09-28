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

    @php
        $name = "jatin";
    @endphp

    {{-- this is how to use php variables in JS --}}
    <script>
            let name = @json($name);
            console.log(name);
            /* or */
            let NAME = {{Js::from($name)}};
            console.log(NAME);
    </script>

    @push('javascripts')
        <script src="/firstJs.js"></script>
        <script src="/towJs.js"></script>
        <script src="/threeJs.js"></script>
    @endpush
    @push('javascripts')
        <script src="/multy.js"></script>
        let hellow  = "nice";
    @endpush
    {{-- is u use vueJs this works --}}
      @verbatim
          {{hellow}}
      @endverbatim
      {{-- end of varbatin --}}
    @push('style')
        <link rel="stylesheet" href="/style_one.css">
         <link rel="stylesheet" href="/style_two.css">
    @endpush

    @prepend('style')
       <style>
         body{
            background-color: rgb(255, 164, 164);
         }
        </style>
    @endprepend
</ul>
