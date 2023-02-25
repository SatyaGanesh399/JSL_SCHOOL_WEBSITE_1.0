$(document).on('submit', '#contact_form', function (e) {
    e.preventDefault();

    let formData = new FormData(),
        formSerialize = $(this).serialize(),
        form_status = $(this).find('#form_status'),
        submit_btn = $(this).find('#submit_btn'),
        formSerializeArr = $(this).serializeArray();

    for (var i = 0; i < formSerializeArr.length; i++) {

        if (formSerializeArr[i].name != 'security') {
            if ($('#' + formSerializeArr[i].name).val() === '') {
                var err_msg = $('#' + formSerializeArr[i].name).data('err');
                form_status.html('<div class="alert alert-danger" role="alert">' + err_msg + '</div>');
                setTimeout(() => {
                    form_status.html('');
                }, 3000);
                return;
            }
            else {
                //console.log(formSerializeArr[i].value);
                formData.append(formSerializeArr[i].name, formSerializeArr[i].value);
            }
        }

        if ($('#security').val()) {
            console.warn('Bot hitting the online reg form');
            return;
        }
    }

    submit_btn.html('Sending...');

    jQuery.ajax({
        url: 'sendmail.php',
        type: 'POST',
        processData: false,
        contentType: false,
        data: formData
    }).done(function (response) {
        var res = JSON.parse(response);
        console.log(res);
        if (res.status == 'ok') {
            submit_btn.html('Submit');
            form_status.html('<div class="alert alert-success" role="alert">Form submitted successfully !</div>');
            setTimeout(() => {
                location.reload();
            }, 5000);
        }
    }).fail(function (jqxhr, status) {
        console.log("xhr: %s ", jqxhr);
        console.log("status: %s ", status);
    });
});