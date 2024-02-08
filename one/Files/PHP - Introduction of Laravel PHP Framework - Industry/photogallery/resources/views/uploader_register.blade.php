@include('header')
<form action="{{route('uploader_register_api')}}" method="POST" enctype="multipart/form-data" id="uploader_register">
    @csrf
    @method('POST')
    <div class="mb-3">
      <label for="exampleInputName1" class="form-label">Name</label>
      <input type="name" name="name" class="form-control" id="exampleInputName1" aria-describedby="nameHelp" required>
      <div id="nameHelp" class="form-text">We'll never share your name with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
      <label class="form-check-label" for="exampleCheck1" >Check me out</label>
    </div>
    <button id="uploader_register_submit" class="btn btn-primary">Submit</button>
</form>
@include('footer')
<script>

        $('#uploader_register').on('submit',function(e){
            e.preventDefault();
            let url = "http://127.0.0.1:8000/api/uploader_register";
            jQuery.ajax({
                url:url,
                data:jQuery('#uploader_register').serialize(),
                type: 'POST',
                success:function(result){
                    console.log(result);
                    // if(result.status == 200){
                    //     window.location.href = "http://localhost/login";
                    // }else{
                    //     console.log(result);
                    // };
                }
            });
        });

</script>
