@include('headerView')
<div class="container">

<h1 class="text-center">ADMIN HOME</h1>
<a type="button" href="{{route('addproduct')}}" class="btn btn-primary"> ADD PRODUCTS</a>
<a type="button" href="{{route('showproduct')}}" class="btn btn-primary"> SEE PRODUCTS</a>
</div>
@include('footerView')
