Dropzone.autoDiscover = false;
var previewTemplate,
    dropzone,
    dropzonePreviewNode = document.querySelector("#dropzone-preview-list"),
    inputMultipleElements =
        ((dropzonePreviewNode.id = ""),
        dropzonePreviewNode &&
            ((previewTemplate = dropzonePreviewNode.parentNode.innerHTML),
            dropzonePreviewNode.parentNode.removeChild(dropzonePreviewNode),
            (dropzone = new Dropzone(".dropzone", {
                url: "https://httpbin.org/post",
                method: "post",
                previewTemplate: previewTemplate,
                autoProcessQueue: false,
                previewsContainer: "#dropzone-preview",
            }))));

            $('#uploadFile').click(function(){
                dropzone.processQueue();
             });
// Dropzone.options.fileUploadForm = { // The camelized version of the ID of the form element

//     // The configuration we've talked about above
//     autoProcessQueue: false,
//     uploadMultiple: true,
//     parallelUploads: 25,
//     maxFiles: 25,

//     // The setting up of the dropzone
//     init: function() {
//         var myDropzone = this;

//         // Here's the change from enyo's tutorial...

//         $("#upload-file").click(function (e) {
//             e.preventDefault();
//             e.stopPropagation();
//             myDropzone.processQueue();
//         }); 
//     }
// }