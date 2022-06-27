function init(){

}

$(document).ready(function(){
    var tick_id = getUrlParameter('ID');
    listardetalle(tick_id);

    $.post("../../contoller/ticket.php?op=listardetalle",{tick_id : tick_id}, function(data){
        $('#lbldetalle').html(data);
    });

    $.post("../../contoller/ticket.php?op=mostrar",{tick_id : tick_id}, function(data){
        data = JSON.parse(data);
        $('#lblestado').html(data.tick_estado);
        $('#lblnomusuario').html(data.usu_nom+' '+data.usu_ape);
        $('#lblfechcrea').html(data.fech_crea);
        $('#lblfechcrea').html(data.fech_crea);
        $('#lblnomidticket').html("Detalle Ticket - "+data.tick_id);

        $('#cat_nom').val(data.cat_nom);
        $('#tick_titulo').val(data.tick_titulo);
        $('#tickd_descripusu').summernote('code', data.tick_descrip);

        if(data.tick_estado_texto=="Cerrado"){
            $('#pnldetalle').hide();
        }
        
    });

    $('#tickd_descrip').summernote({
        height: 250,
        lang: "es-ES",
        popover:{
            image:[],
            link:[],
            air:[]
        },
        callbacks:{
            onImageUpload: function(image){
                console.log("Image detect...");
                myimagetreat(image[0]);
            },
            onPaste: function(e){
                console.log("Text detect...");
            }
        }
    });

    $('#tickd_descripusu').summernote({
        height: 250,
        lang: "es-ES",
        popover:{
            image:[],
            link:[],
            air:[]
        },
    });
    $('#tickd_descripusu').summernote('disable');
});

var getUrlParameter = function getUrlParameter(sParam){
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
    sURLVariables = sPageURL.split('&'),
    sParameterName,
    i;

    for(i = 0; i < sURLVariables.length; i++){
        sParameterName = sURLVariables[i].split('=');
        if(sParameterName[0] === sParam){
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

$(document).on("click","#btnenviar", function(){
    var tick_id = getUrlParameter('ID');
    var usu_id =  $('#user_idx').val();
    var tickd_descrip = $('#tickd_descrip').val();

    if ($('#tickd_descrip').summernote('isEmpty')){
        swal("!Advertencia!", "Mensaje Vacio", "warning");
    }else{
        $.post("../../contoller/ticket.php?op=insertdetalle",{tick_id : tick_id, usu_id:usu_id, tickd_descrip:tickd_descrip}, function(data){
            listardetalle(tick_id);
            $('#tickd_descrip').summernote('reset');
            swal("Correcto!","Enviado Correctamente","success");
        });
    }
});

$(document).on("click","#btncerrarticket", function(){
    swal({
        title: "Se va a cerrar el Ticket",
        text: "Esta seguro de ello?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-warning",
        confirmButtonText: "Si, cerrar!",
        cancelButtonText: "No, cancelar!",
        closeOnConfirm: false
    },
    function(isConfirm) {
        if (isConfirm) {
            var tick_id = getUrlParameter('ID');
            $.post("../../contoller/ticket.php?op=update",{tick_id : tick_id}, function(data){
            });
            swal({
                title: "Cerrado!",
                text: "El ticket se ha cerrado con exito.",
                type: "success",
                confirmButtonClass: "btn-success"
            });
        }
    });
});

function listardetalle(tick_id){
    $.post("../../contoller/ticket.php?op=listardetalle",{tick_id : tick_id}, function(data){
        $('#lbldetalle').html(data);
    });
}

init();