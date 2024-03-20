<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script>
    function validateAndSendData(obj, queryFunction) {
        var spanErrorArray;
        spanErrorArray = validate_data(obj);
        if (Array.isArray(spanErrorArray) && spanErrorArray.length === 0) {
            queryFunction();
        } else {
            spanErrorArray.forEach(e => {
                let input = e.split("_error")[0];
                // console.log($("[name='" + input + "']"));
                $("[name='" + input + "']").click(function(element) {
                    if ($("#" + e).show()) {
                        $("#" + e).hide();
                    }
                })
            });
        }

    }
</script>

<script>
    function validate_data(object) {
        let returnArr = [];
        for (const key in object) {
            if (object.hasOwnProperty.call(object, key)) {
                const element = object[key];
                if (element == false) {
                    returnArr.push(key)
                    $('#' + key).show();

                    // console.log(key);
                }
            }
        }
        return returnArr;
    };
</script>

</body>

</html>
