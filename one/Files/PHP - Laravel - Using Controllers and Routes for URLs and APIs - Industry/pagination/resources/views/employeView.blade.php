@include('headerView')
<h1>EMPLOYEE TABLE</h1>

@isset($data)
{{-- @dd($data) --}}
@endisset

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">password</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($data->toArray()['data'] as $e)
        <tr>
            <th scope="row">{{$e['id']}}</th>
            <td>{{$e['e_name']}}</td>
            <td>{{$e['e_mail']}}</td>
            <td>{{$e['e_password']}}</td>
        </tr>
        @empty
        <h1>NO DATA</h1>
        @endforelse


    </tbody>
</table>

<div class="mt-5">{{$data->links()}}</div>

@include('footerView')
