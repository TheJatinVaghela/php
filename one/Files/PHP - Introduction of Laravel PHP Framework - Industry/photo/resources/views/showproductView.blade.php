@include('headerView')
<pre>

{{-- @php
    print_r($data);
@endphp --}}

</pre>
<div class="container">
    <h1 class="text-center">Show Product</h1>
    @foreach ($data as $key => $value)

     <div class="card" style="width:400px">
        <img class="card-img-top" src="product/{{$value['image']}}" alt="Card image" style="width:100%">
        <div class="card-body">
            <h4 class="card-title">{{ $value['name']}}</h4>
            <p class="card-text">{{ $value['discription']}}</p>
            {{-- <a href="#" class="btn btn-primary">See Details</a> --}}
        </div>
    </div>
    @endforeach
</div>
@include('footerView')
