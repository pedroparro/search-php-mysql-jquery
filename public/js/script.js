// PESQUISAR NO BANCO DE DADOS
$(document).ready(function(){
    $("button#submit").click(function(){
        //variavel
        var search = $("#search").val();

        //empty
        if(search.trim() == ""){
            $("#result").show().addClass("msg").html("Preencha o campo");
        }
        //ajax
        $.ajax({
            url: 'http://127.0.0.1/busca/controllers/ControllerProcessa.php',
            method: 'POST',
            dataType: 'html',
            data: {search: search},
            success: function(data){
                console.log(data);
                $("#resultado").empty().html(data);
            }
        });

        return false;
    });
});



