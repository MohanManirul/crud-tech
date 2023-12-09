$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });



    $(document).on('submit','.ajax-form', function(e){
        e.preventDefault()
        $(':submit').attr('disabled', 'disabled');
        $(':submit').text('Please Wait...');
        $(".loading").show()

        let $this = $(this);
        let formData = new FormData(this);

        $this.find(".has-danger").removeClass('has-error');
        $this.find(".form-errors").remove();

        $.ajax({
            type: $this.attr('method'),
            url: $this.attr('action'),
            data: formData,
            contentType: false,
            processData: false,
            cache: false,
            success: function (response) {
                $(".loading").hide()

                if (response.success) {
                    swal("", `${response.success}`, "success");
                    $("#datatable").DataTable().ajax.reload();
                }
                if (response.warning) {
                    swal("", `${response.warning}`, "warning");
                    $("#datatable").DataTable().ajax.reload();
                }
                if (response.error) {
                    swal("", `${response.error}`, "error");
                    $("#datatable").DataTable().ajax.reload();
                }
                if (response.login) {
                    swal("Login Successfully Done","Redirecting Please Wait","success")
                    return window.location.href = response.login
                }
                if (response.register) {
                    swal("Registration Successfully Done","Redirecting Please Wait","success")
                    return window.location.href = response.register
                }
                
                // redirect swal
                if (response.redirect) {
                    swal("", `${response.redirectMessage}`,"success");
                    return window.location.href = response.redirect
                }

                console.clear()
            },
            error: function (response) {
                $(".loading").hide()

                $(':submit').removeAttr('disabled');
                $(':submit').text('Submit');

                let data = JSON.parse(response.responseText);
                $.each(data.errors, (key, value) => {
                    swal("", `${value}`, "warning");
                    $("[name^=" + key + "]").parent().addClass('has-error')
                    $("[name^=" + key + "]").parent().append('<small class="danger text-muted form-errors">' + value[0] + '</small>');
                })

                console.clear()
            }
        })
    })


    $(document).on('submit','#fileUploadForm',function(e){
        e.preventDefault();
        // $('input[name="file_name"]').val('');
        // return false;
        let $this = $(this);
        let formData = new FormData(this);
        $.ajax({
            xhr: function() {
            var xhr = new window.XMLHttpRequest();
            xhr.upload.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                    var percentage = (evt.loaded / evt.total) * 100;
                    $('.progress .progress-bar').text(percentage+"%");
                    $('.progress .progress-bar').css("width", percentage+'%', function() {
                    return $(this).attr("aria-valuenow", percentage) + "%";
                    })
                }
        }, false);
        return xhr;
        },
        type: $this.attr('method'),
        url: $this.attr('action'),
        data: formData,
        contentType: false,
        cache: false,
        processData:false,
        beforeSend: function(){
            $('.progress .progress-bar').css("display","block");
            $('.progress .progress-bar').css("width",'0%');
            $('.progress .progress-bar').text("0%");
        },
        success: function(data){
            console.log('File has uploaded');
            $('.container .image span').remove();
            $('.container .image').prepend('<span class="fas fa-check-double bg-success"></span>');
            $('.progress .progress-bar').text("File upload Complete!");
            setTimeout(hideProgressbar, 5000);
            function hideProgressbar(){
                 $('.progress .progress-bar').css("display","none");
            }
        }
    });
    });

    
})
