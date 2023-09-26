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
    <title>Document</title>

</head>
<body>

    @include("pages.header",["name"=>"jatin","fruits"=>$furits]);

    <a href="{{ asset('{{route(') }}"POST_PAGE")}}">post page</a>
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

    @include("pages/footer",["sername"=>"vaghela","something"=>$empty]);
</body>
</html>
