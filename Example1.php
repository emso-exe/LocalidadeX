<?php

require_once "vendor/autoload.php";

use Emso\LocalidadeX\Search;

$busca = new Search;

$resultado = $busca->searchLocal();

echo "
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class='no-js lt-ie9 lt-ie8 lt-ie7'> <![endif]-->
<!--[if IE 7]>         <html class='no-js lt-ie9 lt-ie8'> <![endif]-->
<!--[if IE 8]>         <html class='no-js lt-ie9'> <![endif]-->
<!--[if gt IE 8]>      <html class='no-js'> <!--<![endif]-->
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Estados</title>
        <meta name='description' content=''>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href=''>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class='browsehappy'>You are using an <strong>outdated</strong> browser. Please <a href='#'>upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <table border=0 align=center width=95% cellspacing=1>
        <tr>
            <th colspan=6 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=2px>Estado</font></th>
        </tr>
        <tr>
            <th rowspan=2 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=2px>ID</font></th>
            <th rowspan=2 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=2px>Sigla</font></th>
            <th rowspan=2 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=2px>Nome</font></th>
            <th colspan=3 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=2px>Região</font></th>
            <tr>
                <th align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=2px>ID</font></th>
                <th align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=2px>Sigla</font></th>
                <th align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=2px>Nome</font></th>
            <tr>
        </tr>
";

foreach ($resultado as $key => $value) {
    echo "
        <tr>
            <td align=left bgcolor=#efefef><font face=arial color=#006600 size=2px>{$value->id}</font></td>
            <td align=left bgcolor=#efefef><font face=arial color=#006600 size=2px>{$value->sigla}</font></td>
            <td align=left bgcolor=#efefef><font face=arial color=#006600 size=2px>{$value->nome}</font></td>
            <td align=left bgcolor=#efefef><font face=arial color=#006600 size=2px>{$value->regiao->id}</font></td>
            <td align=left bgcolor=#efefef><font face=arial color=#006600 size=2px>{$value->regiao->sigla}</font></td>
            <td align=left bgcolor=#efefef><font face=arial color=#006600 size=2px>{$value->regiao->nome}</font></td>
        </tr>
    ";
}

echo "</table>
        
<script src='' async defer></script>
</body>
</html>";
