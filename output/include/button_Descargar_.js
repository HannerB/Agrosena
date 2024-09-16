Runner.buttonEvents["Descargar_"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Descargar_';
	
	if ( !pageObj.buttonEventBefore['Descargar_'] ) {
		pageObj.buttonEventBefore['Descargar_'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Descargar_'] ) {
		pageObj.buttonEventAfter['Descargar_'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
 var id = result.name
fetch('registros_asistentes_view.php?editid1=' + id)
  .then(response => response.text()) // Procesa la respuesta como texto
  .then(data => {
    // Muestra la respuesta en la consola (opcional)
    console.log(data);

 

    // Espera a que la página cargue completamente
    window.onload = function() {
      // Encuentra el botón una vez que la página ha cargado
      const pdfButton = document.querySelector('.pdflink');
      if (pdfButton) {
        // Simula el clic en el botón
        pdfButton.click();
      } else {
        console.error('Botón no encontrado');
      }
    };
  })
		}
	}
	
	$('a[id="Descargar_"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Descargar_" + "_" + Runner.genId();
		
		// create object
		var button_Descargar_ = new Runner.form.Button({
			id: this.id ,
			btnName: "Descargar_"
		});
		
		// init
		button_Descargar_.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

