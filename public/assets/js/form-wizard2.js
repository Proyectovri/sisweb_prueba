$(function() {
	'use strict'
	$('#wizard1').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>'
	});
	$('#wizard2').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
		labels: {
        finish: 'Submit'
    },
		onStepChanging: function(event, currentIndex, newIndex) {
			if (currentIndex < newIndex) {
				// Step 1 form validation
				if (currentIndex === 0) {
					var fname = $('#Proy_Ubicacion').parsley();
					var lname = $('#Pdet_Titulo').parsley();
					if (fname.isValid() && lname.isValid()) {
						return true;
					} else {
						fname.validate();
						lname.validate();
					}
				}
				// Step 2 form validation
				if (currentIndex === 1) {
					var fperiodo = $('#Proy_PeriodoEjecucion').parsley();
					var ffinicio = $('#Proy_FechaInicio').parsley();
					var fname = $('#Pdet_BienesServicios').parsley();
					var lname = $('#Pdet_BienesCapital').parsley();
					if (fname.isValid() && lname.isValid() && fperiodo.isValid() && ffinicio.isValid()) {
						return true;
					} else {
						fname.validate();
						lname.validate();
						fperiodo.validate();
						ffinicio.validate();
					}
				}

				if (currentIndex === 2) {
					var fname = $('#miembro1').parsley();
					var lname = $('#miembro2').parsley();
					if (fname.isValid() && lname.isValid()) {
						return true;
					} else {
						fname.validate();
						lname.validate();
					}
				}
				// Always allow step back to the previous step even if the current step is not valid.
			} else {
				return true;
			}
		},
		onFinishing: function (event, currentIndex)
    {
        $("#form").submit()

    },
    onFinished: function (event, currentIndex)
    {
        alert("Submitted!");
    }
	});
	$('#wizard3').steps({
		headerTag: 'h3',
		bodyTag: 'section',
		autoFocus: true,
		titleTemplate: '<span class="number">#index#<\/span> <span class="title">#title#<\/span>',
		stepsOrientation: 1
	});
});