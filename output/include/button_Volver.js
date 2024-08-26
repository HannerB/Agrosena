Runner.buttonEvents["Volver"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Volver';
	
	if ( !pageObj.buttonEventBefore['Volver'] ) {
		pageObj.buttonEventBefore['Volver'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Volver'] ) {
		pageObj.buttonEventAfter['Volver'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
window.location.href="../index.html";
		}
	}
	
	$('a[id="Volver"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Volver" + "_" + Runner.genId();
		
		// create object
		var button_Volver = new Runner.form.Button({
			id: this.id ,
			btnName: "Volver"
		});
		
		// init
		button_Volver.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

