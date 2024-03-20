@include('headerView')

<form method="POST" id="AddEmploye" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="mb-3">
        <label class="form-label" for="exampleInputName1">Name</label>
        <input type="text" name="e_name" class="form-control" id="exampleInputName1">
        <span id="e_name_error" class="text-danger bold" style="display:none;">Enter Name</span>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="e_mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        <span id="e_mail_error" class="text-danger bold" style="display:none;">Enter Correct Email</span>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="e_password" class="form-control" id="exampleInputPassword1">
        <span id="e_password_error" class="text-danger bold" style="display:none;">Enter Correct Password</span>
    </div>
    {{-- <input type="file" name="IMG" id=""> --}}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<script>
    $(document).ready(function() {
        $('#AddEmploye').on('submit', function(e) {
            e.preventDefault();
            let data = new FormData(this);
            validateAndSendData({

                "e_name_error": (
                    ($("input[name='e_name']", '#AddEmploye')) &&
                    ($("input[name='e_name']", '#AddEmploye').val().trim() !== '')
                ) ? true : false,
                "e_email_error": (
                    ($("input[name='e_mail']", '#AddEmploye')) &&
                    ($("input[name='e_mail']", '#AddEmploye').val()) &&
                    (/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test($(
                            "input[type='email'][name='e_mail']", '#AddEmploye')
                        .val()))
                    /*&&
                             (chackIsUniqueMail($("input[name='e_mail']", '#AddEmploye'), $('#e_mail_error'),'seller')) */
                ) ? true : false,

                "e_password_error": (
                    ($("input[type='password'][name=e_password]", '#AddEmploye')) &&
                    (/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{3,}$/.test($(
                        "input[type='password'][name=e_password]",
                        '#AddEmploye').val()))
                ) ? true : false,

            }, function() {
                jQuery.ajax({
                    type: 'POST',
                    url: "{{ route('addEmploye') }}",
                    data: data,
                    processData: false,
                    contentType: false,
                    cache: false,
                    success: function(result) {
                        result = JSON.parse(result);
                        if (result.status == 200) {
                            window.location.href = "{{ route('employeTables') }}";
                        } else {
                            alert(result.error);
                        };
                    }
                });
            });

        });
    });
</script>


@include('footerView')
