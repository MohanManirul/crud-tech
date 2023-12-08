$(window).on('load', function () {
    // console.clear()
})


$(document).ready(function(){
    $(document).on('click','[data-bs-toggle="modal"]', function(e){


        var target_modal_element = $(e.currentTarget).data('content');
        var target_modal = $(e.currentTarget).data('bs-target');

        var modal = $(target_modal);
        var modalBody = $(target_modal + ' .modal-content');

        console.clear();

        modalBody.load(target_modal_element);

        $this = $(this);

        $(document).on('click', '.media-file', function(e) {
            $(e.target).closest('.gallery-container').toggleClass('gallery-box-border');
            var id = [];
            $('.gallery-box-border').each(function() {
                id.push(this.id)
            })
            $('#selected-file-set').on('click', function() {
                $this.closest('.uploader').find('.file-count').text(id.length + " file chosen");
                $this.closest('.uploader').find('.file-id').val(id);
                $('#multipleUploaderModal').modal('hide');
            })
        });

        $(document).on('click', '.single-media-file', function(e) {
            var $media = $(e.target).closest('.gallery-container');

            // if ($media.hasClass('single-gallery-box-border')) {
            //     $media.removeClass('single-gallery-box-border');
            // } else {
            //     $media.addClass('single-gallery-box-border');
            // }

            $media.toggleClass('single-gallery-box-border');
            $('.single-media-file .gallery-container').not($media).removeClass('single-gallery-box-border');
            var single_id = [];
            $('.single-gallery-box-border').each(function() {
                single_id.push(this.id)
            })
            $('#single-selected-file-set').on('click', function() {
                $this.closest('.uploader').find('.file-count').text(single_id.length + " file chosen");
                $this.closest('.uploader').find('.file-id').val(single_id);
                $('#singleUploaderModal').modal('hide');
            })
        });

    })
})



