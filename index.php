<html>
    <head>
        <script src="assets/dropzone.min.js"></script>
        <link rel="stylesheet" href="assets/dropzone.min.css" type="text/css" />
    </head>
    <body>


    <form class="form" action="#" method="post">
        <div class="fv-row">
            <div class="dropzone" id="formulario">
                <div class="dz-message needsclick">
                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                    <div class="ms-4">
                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Suelta archivos aquí para subirlos.</h3>
                        <span class="fs-7 fw-bold text-gray-400">Puedes subir solo un archivo de hasta 50MB.</span>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        var myDropzone = new Dropzone("#formulario", {
        url: "upload.php",
        maxFiles: 1,
        maxFilesize: 50,
        addRemoveLinks: true
        });
    </script>
    </body>
</html>