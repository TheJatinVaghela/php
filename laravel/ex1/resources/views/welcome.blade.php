@php
    $furits = ["apple", "orange", "berries", "brownies"];
    $empty = [];
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document - @yield('title','defualt value')</title>
     @stack('style')
</head>
<body>

    @include("pages.header",["name"=>"jatin","fruits"=>$furits]);

    <a href={{"POST_PAGE"}}>post page</a>
    {{-- {{THis is comment}} --}}
    {{"HELLOW WORD"}}
    <br>
    {{ 1 + 5 }}
    {{-- {{"<h1> this willl not work</h1>"}} --}}
    {{-- {{"<script> consolelog("this will not work"); </script>" }} --}}
    {!!"<h1> this willl work</h1>"!!}
    {!!"<script>console.log('this will work')</script>"!!}

    @php
        echo "This is how to write PHP here";
        $loop_values = ["index", "itration", " remainings","count","first", "last", "even", "odd", "depth", "perent"];

        function add ($a,$b,$c){
            $d= $a + $b;
            if ($d == $c) {
                return true;
            }else{
                return false;
            }
        }
    @endphp
    <ul>
        @foreach ($loop_values as $key =>  $value)

            @if ($loop->odd)
            <li >its ODD => {{ "iteration = ".$loop->iteration .",   key = ".$key." = " .",   value = ". $value . ",  index = ". $loop->index}}</li>
            @elseif($loop->even)
            <li>its EVEN => {{"iteration = ".$loop->iteration .",   key = ".$key." = " .",   value = ". $value . ",  index = ". $loop->index}}</li>
            @endif

        @endforeach
    </ul>
    {{-- includeif means if the file exists then use it if not then dont use it  --}}
    @includeif("pages/footer",["sername"=>"vaghela","something"=>$empty])

   {{-- //it will chack that 1+1 =1 is true or false and if false it will use the file if true it will not --}}
    @includeUnless(add(1,1,0),"pages.header",["name"=>"jatin1"] )

   {{-- //it will chack that 1+1 = 2  is true or false and if false it will not use the file if true it will use the file --}}
    {{-- @includeWhen(add(1,1,2), "pages/footer",["sername"=>"vaghela2","something"=>$empty]) --}}
    {{--@hasSection('content')
        @yield('content')
    @else
        <h2>No Content Fount</h2>
    @endif
    --}}
    @stack('javascripts')

</body>
</html>
