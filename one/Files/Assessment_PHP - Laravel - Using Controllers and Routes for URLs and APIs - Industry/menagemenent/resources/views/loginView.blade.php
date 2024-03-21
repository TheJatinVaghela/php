@include('headerView')
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">

<section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    <span></span> <span></span> <span></span> <span></span> <span></span>

    <div class="signin">

        <form class="content" enctype="multipart/form-data" method="POST" id="memberLoginForm">
            @csrf
            @method('POST')
            <h2>Sign In</h2>

            <div class="form" >

                <div class="inputBox">

                    <input type="number" name="faltNumber" required> <i>Falt Number</i>
                    <span id="faltNumber_error" class="text-danger bold" style="display:none;">Enter Correct Falt
                        Number</span>
                </div>

                <div class="inputBox">

                    <input type="password" name="password" required> <i>Password</i>
                    <span id="password_error" class="text-danger bold" style="display:none;">Enter Correct Falt
                        password</span>

                </div>

            </div>

            <div class="inputBox">

                <input type="submit" value="Login">

            </div>

        </form>

    </div>

    </div>

</section> <!-- partial -->

<script>
    $(function() {
        $("input[name='faltNumber']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
    });


    $(document).ready(function() {
        $('#memberLoginForm').on('submit', function(e) {
            e.preventDefault();
            let data = new FormData(this);
            let url = "{{route('chackMemberLogin')}}";
            let href = "{{route('home')}}";
            console.log(data , url , href);
            validateAndSendData({
                "faltNumber_error": function("input[name='faltNumber']", '3') {
                    var inputValue = $(inputSelector).val();
                    return !isNaN(inputValue) && inputValue.length >= minLength;
                },
                "password_error": (
                    ($("input[type='password'][name=password]", '#memberLoginForm')) &&
                    (/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{3,}$/.test($(
                        "input[type='password'][name=password]",
                        '#memberLoginForm').val()))
                ) ? true : false,

                "seller_terms_error": (
                    ($("input:checkbox[name='seller_terms']", '#memberLoginForm')) &&
                    ($("input:checkbox[name='seller_terms']", '#memberLoginForm').is(
                        ':checked'))
                ) ? true : false,

            }, function() {
                jQuery.ajax({
                    url: url,
                    data: data,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function(result) {
                        result = JSON.parse(result);
                        if (result.status == 200) {
                            window.location.href(href);
                        } else {
                            alert(result.message);

                        };
                    }
                });
            });

        });
    });
</script>

@include('footerView')
