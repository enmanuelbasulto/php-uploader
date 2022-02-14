<html>
    <head>
        <script src="assets/dropzone.min.js"></script>
        <script src="assets/bootstrap.min.js"></script>
        <link rel="stylesheet" href="assets/dropzone.min.css" type="text/css" />
        <link rel="stylesheet" href="assets/bootstrap.min.css" type="text/css" />
    </head>
    <body>

    <!--begin::Form-->
    <form class="form" action="#" method="post">
        <!--begin::Input group-->
        <div class="fv-row">
            <!--begin::Dropzone-->
            <div class="dropzone" id="kt_dropzonejs_example_1">
                <!--begin::Message-->
                <div class="dz-message needsclick">
                    <!--begin::Icon-->
                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="ms-4">
                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Suelta archivos aquí para subirlos.</h3>
                        <span class="fs-7 fw-bold text-gray-400">Puedes subir solo un archivo de hasta 50MB.</span>
                    </div>
                    <!--end::Info-->
                </div>
            </div>
            <!--end::Dropzone-->
        </div>
        <!--end::Input group-->
    </form>
    <!--end::Form-->
<!--
        <form action="upload.php" class="dropzone"></form>
-->
    <script>
        var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
        url: "upload.php", // Set the url for your upload script location
        maxFiles: 1,
        maxFilesize: 50, // MB
        addRemoveLinks: true
        });
    </script>
    </body>
</html>