$(document).ready(function(){
    $(function(){
        $('#cats li',this).click(function(){
            var elid = $(this).attr('id');
            $("#container").text('consultando....');
            $.post(
                "muestra_negocios.php",
                {action:"consultar",query:elid},
                function(arg){
                    var jdata = JSON.stringify(arg); // hace cadena los datos recibidos del json_encode
                    $("#container").html(jdata.replace(/\"/g, '')); //inserta los datos en el receptor
                },
                'json'
            )
        })
    })
})
