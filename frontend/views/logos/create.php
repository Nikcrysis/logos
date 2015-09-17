<?php
$this->registerJsFile('@web/js/dropzone.js');
$this->registerCssFile('@web/css/dropzone.css');
?>

<section class="upload">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <form action=""
                      class="dropzone"
                      id="my-awesome-dropzone">
                      </form>

                <div class="upload-btn-cont">
                        <input type="text" name="cat" id="cat" placeholder="Category"/>

                        <button type="button" class="btn-primary" id="submit-btn">Submit data and files!</button>
                    </div>

            </div>
        </div>
    </div>
</section>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

    $( document ).ready(function() {
        var myDropzone;

        Dropzone.options.myAwesomeDropzone = {
            parallelUploads: 20,
            maxFilesize :200,
            uploadMultiple: true,// MB
            autoProcessQueue: false,
            url : '/logos/upload',
            init: function() {
                myDropzone = this;
                this.on("addedfile", function(file) {

                    // Create the remove button
                    var removeButton = Dropzone.createElement("<button class='btn-primary remove-btn'>Remove file</button>");


                    // Capture the Dropzone instance as closure.
                    var _this = this;

                    // Listen to the click event
                    removeButton.addEventListener("click", function(e) {
                        // Make sure the button click doesn't submit the form:
                        e.preventDefault();
                        e.stopPropagation();

                        // Remove the file preview.
                        _this.removeFile(file);
                        // If you want to the delete the file on the server as well,
                        // you can do the AJAX request here.
                    });

                    // Add the button to the file preview element.
                    file.previewElement.appendChild(removeButton);
                });


                this.on("sendingmultiple", function(file,xhr,formData) {
//                    alert('sendins');
                    formData.append('cat',$('#cat').val());
                });

                this.on('success', function(file, responseText) {
                    this.removeAllFiles();
                });
            }
        };

        $('#submit-btn').click(function(){
                if (myDropzone.getQueuedFiles()[0] != null) {
                    myDropzone.processQueue();
                } else {
                   alert('Add Images');
                }
        });




    });
</script>