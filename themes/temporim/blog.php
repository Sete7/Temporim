<main class="main-blog container">
    <div class="content">
        <section class="sec-blog">
            <h1 class="font-zero">Listagem de Todos os artigos Temporim</h1>

            <div class = "box_thumb_destaques" id="box_thumb_destaques">
                <!-------------------------------------- AQUI CARREGA AS TAG HTML ----------------------------------->
            </div>                
            <!-------------------------------------- BOTAO CARREGAR MAIS PACOTES ----------------------------------->
            <div class="bx-carregar">
                <div class="btn-carregar">
                    <a href="#box_thumb_destaques" class="btn-carregar-mais j_read">Carregar Mais Artigo</a>
                </div>                
                <div class="lendoArtigos">
                    <div class="thumb-loading">
                        <img class="load" src="<?= REQUIRE_PATH ?>/assets/image/load.gif">
                    </div>
                    <p>Aguarde, carregando imóveis</p>
                </div>
            </div>

        </section>
        <div class="clear"></div>
    </div>
</main>