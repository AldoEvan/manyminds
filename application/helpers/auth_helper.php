<?php


function permission()
{
    $ci = get_instance();
    $usuarioLogado = $ci->session->userdata("logado");
    if(!$usuarioLogado){
        $ci->session->set_flashdata("danger", "Você não está logado");
        redirect("login");
    }
    return $usuarioLogado;
}