<?php

interface cidadeDaoInterface {
    public static function consultar();
    public static function editar($nome,$id);
    public static function excluir($id);
    public static function inserir($nome);
}