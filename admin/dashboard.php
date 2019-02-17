<?php
require_once './inc/header.php';

$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_STRING);

$arrayPaginas = array(
    "dashboard" => "View/dashboard.phtml",
    "user" => "View/User/user.phtml",
    "editarUser" => "View/User/editarUser.phtml",
//    CATEGORIA
    "categoria" => "View/Categoria/categoria.phtml",
    "categoriaListar" => "View/Categoria/listaCategoria.phtml",
    "categoriaEditar" => "View/Categoria/editarCat.phtml",
//    PORTIFOLIO
    "portifolio" => "View/Portifolio/portifolio.phtml",
    "editarPortifolio" => "View/Portifolio/editarPortifolio.phtml",
    "listarPortifolio" => "View/Portifolio/listarPortifolio.phtml", 
//    BLOG
    "artigo" => "View/Blog/artigo.phtml",
    "editarArtigo" => "View/Blog/editarArtigo.phtml",
    "listarArtigo" => "View/Blog/listarArtigo.phtml", 
    
//    "agendamento" => "View/Agendamento/agendamento.phtml",
//     "listarAgendamento" => "View/Agendamento/listarAgendamento.phtml",
//    "editarAgendamento" => "View/Agendamento/editarAgendamento.phtml", 
//    "visualizarAgendamento" => "View/Agendamento/visualizarAgendamento.phtml", 
    
//    SLIDER
    "slider" => "View/Slider/slider.phtml",
    "listSlider" => "View/Slider/listSlider.phtml",       
    "updateSlider" => "View/Slider/updateSlider.phtml",
    "updateThumb" => "View/Slider/updateThumb.phtml"
    
);

if ($pagina) {
    $encontrou = false;

    foreach ($arrayPaginas as $page => $key) {
        if ($pagina == $page) {
            $encontrou = true;
            require_once($key);
        }
    }

    if (!$encontrou) {
        require_once("View/dashboard.phtml");
    }
} else {
    require_once("View/dashboard.phtml");
}

require_once './inc/footer.php';
