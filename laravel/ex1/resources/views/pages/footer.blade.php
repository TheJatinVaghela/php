<h1>footer</h1>
<h2>sername = {{$sername}}</h2>
<ul>
    @forelse ($something as $key => $value)
        <li>{{$key}} = {{$value}}</li>
    @empty
        <li>no value found</li>
    @endforelse
</ul>
