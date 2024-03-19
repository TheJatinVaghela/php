
@include('headerView')
<div class="mt-3">

    <form action="{{ route('apiAddProduct') }}" method="POST" enctype="multipart/form-data">
        <!-- Email input -->
        @csrf
        @method('POST')
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form1Example1">name</label>
            <input type="text" name="name" id="form1Example1" class="form-control" placeholder="name" />
            @if($errors->has('name'))
                <span class="text-denger">{{$errors->first('name')}}</span>
            @endif
        </div>

        <!-- Password input -->
        <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form1Example2">discription</label>
            <textarea name="discription" id="discription" class="form-control" placeholder="discription"></textarea>
        </div>

        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">


            <div class="mb-3">
                <label for="formFile"  class="form-label">Default file input example</label>
                <input class="form-control" type="file" name="image" id="formFile">
            </div>
        </div>
</div>

<!-- Submit button -->
<button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block">Sign in</button>
</form>

</div>
@include('footerView')
