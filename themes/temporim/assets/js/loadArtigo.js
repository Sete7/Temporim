$(document).ready(function () {

//    var urlpost = 'filtro/carregarPost.php';
    var urlpost = 'ajax/filtraArtigo.php';

    $.ajaxSetup({
        url: urlpost,
        type: 'POST',
        beforeSend: '',
        error: ''
    });
//-----------------------------lendo artigo-----------------
    var loadler = $('.lendoArtigos');
    var listler = $('#box_thumb_destaques');
    var loadmore = $('.j_read');

    //limpando a lista de imoveis
    listler.empty();
    loadmore.hide();

    function carregarPost(instrucoes) {
        $.ajax({
            data: instrucoes,
            beforeSend: '',
            error: '',
            success: function (leitura) {
                if (leitura != '3') {
                    listler.append(leitura);
                    loadler.delay(300).fadeOut("slow");
                    loadmore.delay(1000).fadeIn("slow");
                } else {
                    loadmore.text("Não temos artigos no momento. Recarregar página").click(function () {
                        location.reload();
                    });
                    loadler.delay(300).fadeOut("slow");
                }
            }
        });
    }//finaliza a funçao
    
    carregarPost('acao=ler&offset=0&limit=4');
    
    var offset = 2;
    
    loadmore.click(function(){
        loadler.fadeIn("fast");
        carregarPost('acao=ler&offset='+offset+'&limit=2');
        offset += 2;
    });
});