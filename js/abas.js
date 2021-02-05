$(document).ready(function() {

    //quando carregar a pagina
    $(".conteudo").hide(); // esta primeira linha serve para esconder as divs do conteudo

    $("ul.menu li:first").addClass("active").show(); //Ativar primeira aba
    $(".conteudo:first").show('slow'); //Abre a pagina suavemente

    //On click Event

    $("ul.menu li").click(function() { //Quando clicar no link menu ira executar a seguinte função

        $("ul.menu li").removeClass("active"); //Remove a classe no link clicado para q nao fique marcado
        $(this).addClass("active"); //Adiciona a classe no link clicado para q o usuario saiba em qual link esta

        $(".conteudo").hide(); //esconder as dvis do conteudo
        var activeaba = $(this).find("a").attr("href");
        $(activeaba).fadeIn('slow');

        return false;
    });

});