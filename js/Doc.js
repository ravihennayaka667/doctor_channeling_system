


$(document).ready(function() {
    $('#CheckDetails').click(function() {
        $('#load').load('patients/pt.php');
    });
});

$(document).ready(function() {
    $('#AddPrescription').click(function() {
        $('#load').load('patients/addPres.php');
    });
});

$(document).ready(function() {
    $('#medi').click(function() {
        $('#load').load('patients/medi.php');
    });
});

