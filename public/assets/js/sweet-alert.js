$(function () {
    "use strict";

    $("#buscarDNI_1").on("click", function (e) {
        var $dni = $("#miembro1").val();
        if ($dni == "") {
            swal({
                title: "¡Alerta!",
                text: "El campo DNI está vacio",
                type: "warning",
                showCancelButton: false,
                confirmButtonText: "OK",
            });
        }else{
            if ($dni.length != 8 ) {
                swal({
                    title: "¡Error!",
                    text: "Ingrese un DNI válido",
                    type: "error",
                    showCancelButton: false,
                    confirmButtonText: "OK",
                });
            }
        }	
    });

	$("#buscarDNI_2").on("click", function (e) {
		var $dni = $("#miembro2").val();
        if ($dni == "") {
            swal({
                title: "¡Alerta!",
                text: "El campo DNI está vacio",
                type: "warning",
                showCancelButton: false,
                confirmButtonText: "OK",
            });
        }else{
            if ($dni.length != 8 ) {
                swal({
                    title: "¡Error!",
                    text: "Ingrese un DNI válido",
                    type: "error",
                    showCancelButton: false,
                    confirmButtonText: "OK",
                });
            }
        }		
    });

	$("#buscarDNI_3").on("click", function (e) {
		var $dni = $("#miembro3").val();
        if ($dni == "") {
            swal({
                title: "¡Alerta!",
                text: "El campo DNI está vacio",
                type: "warning",
                showCancelButton: false,
                confirmButtonText: "OK",
            });
        }else{
            if ($dni.length != 8 ) {
                swal({
                    title: "¡Error!",
                    text: "Ingrese un DNI válido",
                    type: "error",
                    showCancelButton: false,
                    confirmButtonText: "OK",
                });
            }
        }	
    });

	$("#buscarDNI_4").on("click", function (e) {
		var $dni = $("#miembro4").val();
        if ($dni == "") {
            swal({
                title: "¡Alerta!",
                text: "El campo DNI está vacio",
                type: "warning",
                showCancelButton: false,
                confirmButtonText: "OK",
            });
        }else{
            if ($dni.length != 8 ) {
                swal({
                    title: "¡Error!",
                    text: "Ingrese un DNI válido",
                    type: "error",
                    showCancelButton: false,
                    confirmButtonText: "OK",
                });
            }
        }	
    });

	$("#buscarDNI_5").on("click", function (e) {
		var $dni = $("#miembro5").val();
        if ($dni == "") {
            swal({
                title: "¡Alerta!",
                text: "El campo DNI está vacio",
                type: "warning",
                showCancelButton: false,
                confirmButtonText: "OK",
            });
        }else{
            if ($dni.length != 8 ) {
                swal({
                    title: "¡Error!",
                    text: "Ingrese un DNI válido",
                    type: "error",
                    showCancelButton: false,
                    confirmButtonText: "OK",
                });
            }
        }	
    });

	$("#buscarDNI_6").on("click", function (e) {
		var $dni = $("#miembro6").val();
        if ($dni == "") {
            swal({
                title: "¡Alerta!",
                text: "El campo DNI está vacio",
                type: "warning",
                showCancelButton: false,
                confirmButtonText: "OK",
            });
        }else{
            if ($dni.length != 8 ) {
                swal({
                    title: "¡Error!",
                    text: "Ingrese un DNI válido",
                    type: "error",
                    showCancelButton: false,
                    confirmButtonText: "OK",
                });
            }
        }	
    });

    // Message
    $("#but1").on("click", function (e) {
        var message = $("#message").val();
        if (message == "") {
            message = "New Notification from Dashtic";
        }
        swal(message);
    });

    // With message and title
    $("#but2").on("click", function (e) {
        var message = $("#message").val();
        var title = $("#title").val();
        if (message == "") {
            message = "New Notification from Dashtic";
        }
        if (title == "") {
            title = "Notification Styles";
        }
        swal(title, message);
    });

    // Show image
    $("#but3").on("click", function (e) {
        var message = $("#message").val();
        var title = $("#title").val();
        if (message == "") {
            message = "New Notification from Dashtic";
        }
        if (title == "") {
            title = "Notification Styles";
        }
        swal({
            title: title,
            text: message,
            imageUrl: "../assets/images/brand/favicon.png",
        });
    });

    // Timer
    $("#but4").on("click", function (e) {
        var message = $("#message").val();
        var title = $("#title").val();
        if (message == "") {
            message = "New Notification from Dashtic";
        }
        if (title == "") {
            title = "Notification Styles";
        }
        message += "(close after 2 seconds)";
        swal({
            title: title,
            text: message,
            timer: 2000,
            showConfirmButton: false,
        });
    });

    //
    $("#click").on("click", function (e) {
        var type = $("#type").val();
        swal({
            title: "Notification Styles",
            text: "New Notification from Dashtic",
            type: type,
        });
    });

    // Prompt
    $("#prompt").on("click", function (e) {
        swal(
            {
                title: "Notification Alert",
                text: "your getting some notification from mail please check it",
                type: "input",
                showCancelButton: true,
                closeOnConfirm: false,
                inputPlaceholder: "Your message",
            },
            function (inputValue) {
                if (inputValue != "") {
                    swal("Input", "You have entered : " + inputValue);
                }
            }
        );
    });

    // Confirm
    $("#confirm").on("click", function (e) {
        swal({
            title: "Notification Styles",
            text: "New Notification from Dashtic",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Exit",
            cancelButtonText: "Stay on the page",
        });
    });

    $("#click").on("click", function (e) {
        swal(
            "Congratulations!",
            "Your message has been succesfully sent",
            "success"
        );
    });
    $("#click1").on("click", function (e) {
        swal({
            title: "Some Risk File Is Founded",
            text: "Some Virus file is detected your system going to be in Risk",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Exit",
            cancelButtonText: "Stay on the page",
        });
    });
    $("#click2").on("click", function (e) {
        swal({
            title: "Something Went Wrong",
            text: "Please fix the issue the issue file not loaded & items not found",
            type: "error",
            showCancelButton: true,
            confirmButtonText: "Exit",
            cancelButtonText: "Stay on the page",
        });
    });
    $("#click3").on("click", function (e) {
        swal({
            title: "Notification Alert",
            text: "your getting some notification from mail please check it",
            type: "info",
            showCancelButton: true,
            confirmButtonText: "Exit",
            cancelButtonText: "Stay on the page",
        });
    });
});
