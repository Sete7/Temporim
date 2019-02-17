<?php require './app/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br" itemscope="" itemtype="http://schema.org/Article">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index, follow">
        <link rel="canonical" href="">
        <link rel="shortcut icon" href="assets/image/favicon.png" type="image/x-icon">
        <link rel="icon" href="<?= INCLUDE_PATH; ?>/assets/image/apple-icon-144x144.png" type="image/x-icon">              
        <meta http-equiv="content-type" content="text/html; charset=utf-8">    
        <meta name="author" content="Junio Santos">       
        <meta name="author" content="KMB DIGITAL">        

        <title>TEMPORIM</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,800" rel="stylesheet"> 
        <link href="<?= INCLUDE_PATH ?>/assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH ?>/assets/css/jcarousel.responsive.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>

        <header class="main-header container">
            <div class="info-header content">
                <div class="main-logo">
                    <a id="logo" href="<?= HOME; ?>" title="Temporim Engenharia & Consultoria">
                        <img src="<?= INCLUDE_PATH ?>/assets/image/logo.png" alt=""/>
                    </a>
                </div>
                <!--END LOGO-->
                <div class="bx-contato-top">
                    <!--CONTACT ONE-->
                    <div class="one-contact">
                        <div class="icon-phone">
                            <img src="<?= INCLUDE_PATH ?>/assets/image/icon-phone.png" alt=""/>
                        </div>
                        <div class="desc-contact-one">
                            <p class="info-week">Seg à Sex das 8h as 20h</p>
                            <p class="p-naumbe"><span>(61)</span><strong>  3254-3079</strong></p>                        
                        </div>
                    </div>

                    <!--CONTACT TWO-->
                    <div class="one-contact">
                        <div class="icon-phone">
                            <img src="<?= INCLUDE_PATH ?>/assets/image/icon-phone.png" alt=""/>
                        </div>
                        <div class="desc-contact-one">
                            <p class="info-week">Seg à Sex das 8h as 20h</p>
                            <p class="p-naumbe"><span>(61)</span><strong> 98250-2000 </strong></p>                        
                        </div>
                        <?php
                        ?>
                    </div>
                </div>
                <!------------------------------------------------------ MENU MOBI ------------------------------------------>
                <div class="sidebar_menu">   
                    <div  class="favicon-mobile">
                        <a href="<?= HOME; ?>" title="Temporim Engenharia & Consultoria">
                            <img src="<?= INCLUDE_PATH ?>/assets/image/apple-icon-144x144.png" alt=""/>
                        </a>
                    </div>
                    <ul class="menu_mobile"> 
                        <li><a title="Home" href="<?= HOME; ?>/index">Home</a></li>
                        <li><a title="Quem Somos" href="<?= HOME; ?>/quem-somos">Quem Somos</a></li>
                        <li><a title="Pacotes" href="<?= HOME; ?>/#area-atuacao">Área de Atuação</a></li>
                        <li><a title="Pacotes" href="<?= HOME; ?>/#portfolio">Portfólio</a></li>
                        <li><a title="Pacotes" href="<?= HOME; ?>/blog">Blog</a></li>
                        <li><a title="Fale Conosco" href="<?= HOME; ?>/#contato">Contato</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <!--END ONE INFO--> 
            <div class="bx-nav container bg-topo">
                <!--MENU--> 
                <div class="content">
                    <div class="bx-menu">
                        <button class="sidebarBtn">
                            <span></span>
                        </button>
                        <!--MENU MOBILE-->
                        <ul class="menu-mobile">
                            <li class="icon-social">                              
                                <a  href="#" class="icone">
                                    <img src="<?= INCLUDE_PATH ?>/assets/image/icon-instagram.png" alt=""/>                               
                                </a>
                            </li>
                            <li class="icon-social">
                                <a  href="#" class="icone">
                                    <img src="<?= INCLUDE_PATH ?>/assets/image/icon-facebook.png" alt=""/>
                                </a>
                            </li>
                        </ul>

                        <!--MENU DESKTOP-->
                        <ul class="menu">
                            <li  class="parent">
                                <a  href="<?= HOME; ?>/#servicos" class="child" title="Serviços">SERVIÇOS</a>
                            </li>
                            <li id="active" class="active_menu">
                                <a  href="<?= HOME; ?>/#area-atuacao" title="Área de Atuação">AREA DE ATUAÇÃO</a>
                            </li>
                            <li  class="parent">
                                <a  href="<?= HOME; ?>/quem-somos" class="child" title="Quem Somos">QUEM SOMOS</a>
                            </li>
                            <li  class="parent">
                                <a  href="<?= HOME; ?>/#portfolio" class="child" title="Portfólio">PORTFÓLIO</a>
                            </li>
                            <li  class="parent">
                                <a  href="<?= HOME; ?>/blog" class="child" title="Blog">BLOG</a>
                            </li>
                            <li  class="parent">
                                <a  href="<?= HOME; ?>/#contato" class="child" title="Contato">CONTATO</a>
                            </li>
                            <div class="bx-social-topo">
                                <li class="icon-social">                         
                                    <a  href="<?= HOME; ?>/#">
                                        <img src="<?= INCLUDE_PATH ?>/assets/image/icon-instagram.png" alt=""/>                               
                                    </a>
                                </li>
                                <li class="icon-social">
                                    <a  href="<?= HOME; ?>/#">
                                        <img src="<?= INCLUDE_PATH ?>/assets/image/icon-facebook.png" alt=""/>
                                    </a>
                                </li>
                            </div>
                        </ul>  

                    </div>
                    <!--AGENDA | REDE SOCIAL-->

                </div>
            </div>
            <!--END MENU-->
            <div class="clear"></div>
        </header>
        <!--END HEADER-->

        <!-- --------------------------------- conteudo ---------------------------- -->
        <?php
        $Url[1] = (empty($Url[1]) ? null : $Url[1]);
        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
        else:
            require REQUIRE_PATH . '/404.php';
        endif;
        ?>
        <!-- --------------------------------- conteudo ---------------------------- -->



        <footer class="main-footer container">
            <section class="sec-contact">
                <h1 class="font-zero">Contato Temporim</h1>
                <div class="content animeTop">
                    <article class="art-contact">

                        <h2>Envie-nos sua dúvida através
                            do nosso Painel:</h2>
                        <p>
                            <span class="icon-footer">
                                <img src="<?= INCLUDE_PATH ?>/assets/image/icon-phone-footer.png" alt=""/>
                            </span>   <span class="ft-weigth">(61)</span> 9 8250-2000 <span class="ft-weigth">/ (61)</span> 3254-3079
                        </p>
                        <p>
                            <span class="icon-footer">
                                <img src="<?= INCLUDE_PATH ?>/assets/image/icon-envelope-footer.png" alt=""/>
                            </span>    <span class="ft-weigth">contato@</span>temporimengenharia.com.br
                        </p>
                        <p>
                            <span class="icon-footer">
                                <img src="<?= INCLUDE_PATH ?>/assets/image/icon-envelope-footer.png" alt=""/>
                            </span>    <span class="ft-weigth">raira@</span>temporimengenharia.com.br
                        </p>

                    </article>
                    <article class="art-contact">
                        <div class="bx-contact">
                            <h2>CONTATO</h2>
                            <div class="bx-form-contact">
                                <form class="form-contato">
                                    <div class="form-group">
                                        <input type="text" name="nome" class="name" placeholder="SEU NOME">
                                        <div class="bx-icon">
                                            <img src="<?= INCLUDE_PATH ?>/assets/image/icon-user.png" alt=""/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="nome" class="email" placeholder="E-MAIL">
                                        <div class="bx-icon">
                                            <img src="<?= INCLUDE_PATH ?>/assets/image/icon-envelope.png" alt=""/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="msg" name="msg" class="msg"></textarea>
                                        <div class="bx-icon">
                                            <img src="<?= INCLUDE_PATH ?>/assets/image/icon-pencil.png" alt=""/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="nome" class="phone" placeholder="TELEFONE">
                                        <div class="bx-icon">
                                            <img src="<?= INCLUDE_PATH ?>/assets/image/icon-phone-contact.png" alt=""/>
                                        </div>
                                    </div>

                                    <input type="submit" class="btnEnviar" value="ENVIAR">
                                </form>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </article>
                </div>
                <div class="clear"></div>
            </section>
            <!--LOCALIZACAO TEMPORIM-->
            <section  class="container">
                <article class="location-map">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3838.342005747634!2d-48.0276042!3d-15.8386122!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1a4cb722cb5e7eeb!2sCoworkcenter+-+%C3%81guas+Claras+Office!5e0!3m2!1spt-BR!2sbr!4v1549392587637" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <div class="clear"></div>
                    </div>
                </article>
            </section>
            <!--FIM LOCALIZACAO MANAH-->
            <div class="bx-copy container">
                <div class="copy">
                    <p>&COPY; <?php echo date('Y'); ?>  <a href="#">Desenvolvido por KMB Digital</a></p>
                </div>
                <div class="clear"></div>
            </div>
            <!--FIM CONTACT PAGE-->
        </footer>
        <!--FIM RODAPE-->
        <script src="<?= INCLUDE_PATH ?>/assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="<?= INCLUDE_PATH ?>/assets/js/help-scripts.js" type="text/javascript"></script>
        <script src="<?= INCLUDE_PATH ?>/assets/js/setActiveMenu.js" type="text/javascript"></script>
        <script src="<?= INCLUDE_PATH ?>/assets/js/jquery.js" type="text/javascript"></script>       
        <script src="<?= INCLUDE_PATH ?>/assets/js/jquery.jcarousel.min.js" type="text/javascript"></script>
        <script src="<?= INCLUDE_PATH ?>/assets/js/jcarousel.responsive.js" type="text/javascript"></script>
        <script src="<?= INCLUDE_PATH ?>/assets/js/scrollAnimacao.js" type="text/javascript"></script>
        <script src="<?= INCLUDE_PATH ?>/assets/js/loadArtigo.js" type="text/javascript"></script>
        <script src="<?= INCLUDE_PATH ?>/assets/js/pace.min.js" type="text/javascript"></script>
        <script language=javascript type="text/javascript">
//            dayName = new Array("domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado")
//            monName = new Array("janeiro", "fevereiro", "março", "abril", "maio", "junho", "agosto", "outubro", "novembro", "dezembro")
//            now = new Date
        </script>

    </body>
</html>

