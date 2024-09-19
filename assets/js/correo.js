document.getElementById("contactForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Evitar el envío normal del formulario

    // Mostrar animación de carga con SweetAlert
    Swal.fire({
        title: 'Enviando...',
        text: 'Por favor, espera un momento.',
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading(); // Mostrar el indicador de carga
        }
    });

    // Desactivar el botón de envío
    const submitBtn = document.getElementById("submitBtn");
    submitBtn.disabled = true;

    // Enviar los datos mediante AJAX
    const formData = new FormData(this);
    fetch('correo.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            // Cerrar la animación de carga
            Swal.close();

            // Mostrar alerta de éxito o error según la respuesta
            if (data.message) {
                Swal.fire({
                    title: '¡Enviado!',
                    text: 'Tu mensaje ha sido enviado con éxito.',
                    icon: 'success',
                    customClass: {
                        popup: 'swal-popup',
                        title: 'swal-title',
                    }
                });

                // Vaciar el formulario
                document.getElementById("contactForm").reset();

            } else {
                Swal.fire({
                    title: 'Error',
                    text: data.error || 'Hubo un problema al enviar tu mensaje. Inténtalo de nuevo.',
                    icon: 'error',
                    customClass: {
                        popup: 'swal-popup',
                        title: 'swal-title',
                    }
                });
            }
            submitBtn.disabled = false; // Reactivar el botón
        })
        .catch(error => {
            // Cerrar la animación de carga
            Swal.close();

            // Mostrar alerta de error si hay algún fallo en la petición
            Swal.fire({
                title: 'Error',
                text: 'Hubo un problema con el servidor. Inténtalo más tarde.',
                icon: 'error',
                customClass: {
                    popup: 'swal-popup',
                    title: 'swal-title',
                }
            });
            submitBtn.disabled = false; // Reactivar el botón
        });
});