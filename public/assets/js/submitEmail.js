$('#submitEmail').click(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type: "POST",
        url: $(this).data('route'),
        data: {
            email: $("#email").val()
        },
        dataType: "JSON",
        success: function (response) {
            $("#validator-newsletter").append('<span class="text-error-email" style="color: green!important;">' + response.message + '</span>')
            $("input[name=email]").val('')
            setTimeout(() => {
                $("span.text-error-email").hide()
            }, 4000);
        },
        error: function (response) {
            $("span.text-error-email").text('')
            $("#validator-newsletter").append('<span class="text-error-email">' + response.responseJSON.errors.email + '</span>')
            setTimeout(() => {
                $("span.text-error-email").hide()
            }, 4000);
        }
    });
})
