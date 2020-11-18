<?php
require_once "./libs/smarty/Smarty.class.php";

class TemporadaView{

    private $title;
    

    function __construct(){
        $this->title = "Inicio";
    }

    function ShowCatalogoTemporadas($temporadas){
         $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('catalogoTemp_s', $temporadas);
        $smarty->display('../templates/usuario/catalogoTemporadas.tpl'); // muestro el template 
    }

    function ShowTemporadas($temporadas){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('temporadas_s', $temporadas);
        $smarty->display('./templates/admin/temporadas.tpl'); // muestro el template 
    }

    function editarTemporada($id){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('editTemporada_s', $id);
        $smarty->display('../templates/admin/editarTemporada.tpl'); // muestro el template 
    }

    function ShowTemporadaUnica($id){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('temporada_s', $id);
        $smarty->display('../templates/usuario/temporada.tpl'); // muestro el template 

    }

    function ShowTemporadaAdm($id){
        $smarty = new Smarty();
        $smarty->assign('titulo_s', $this->title);
        $smarty->assign('temporadaAdm_s', $id);
        $smarty->display('../templates/admin/temporadaAdmin.tpl'); // muestro el template 

    }
}