<?php

require_once "vendor/autoload.php";

/*
+-----------------------------------------------------------------------------------------------------------------------------------+
|                           Códigos dos Estados Brasileiros para extração dos seus respectivos municípios                           |
+-------+-----------------------+-------+-------------------------+---------+---------------------------+-------+-------------------+
|   12  |   Acre                |   32  |   Espírito Santo        |   25    |   Paraíba                 |   11  |   Rondônia        |             
|   27  |   Alagoas             |   52  |   Goiás                 |   41    |   Paraná                  |   14  |   Roraima         |         
|   16  |   Amapá               |   21  |   Maranhão              |   26    |   Pernambuco              |   42  |   Santa Catarina  |        
|   13  |   Amazonas            |   51  |   Mato Grosso           |   22    |   Piauí                   |   35  |   São Paulo       |     
|   29  |   Bahia               |   50  |   Mato Grosso do Sul    |   33    |   Rio de Janeiro          |   28  |   Sergipe         |
|   23  |   Ceará               |   31  |   Minas Gerais          |   24    |   Rio Grande do Norte     |   17  |   Tocantins       |      
|   53  |   Distrito Federal    |   15  |   Pará                  |   43    |   Rio Grande do Sul       |       |                   |
+-------+-----------------------+-------+-------------------------+---------+---------------------------+-------+-------------------+
 */

use Emso\LocalidadeX\Search;

$busca = new Search;

$resultado = $busca->searchLocal(12);

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
        <title>Municípios</title>
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
        <th rowspan=5 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>ID</font></th>
        <th rowspan=5 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Nome</font></th>
        <th colspan=10 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Microregião</font></th>
        <th colspan=10 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Região Imediata</font></th>
    </tr>
    <tr>
        <th rowspan=4 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>ID</font></th>
        <th rowspan=4 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Nome</font></th>
        <th colspan=8 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Mesorregião</font></th>
        <th rowspan=4 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>ID</font></th>
        <th rowspan=4 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Nome</font></th>
        <th colspan=8 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Região Intermediária</font></th>
    </tr>
    <tr>
        <th rowspan=3 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>ID</font></th>
        <th rowspan=3 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Nome</font></th>
        <th colspan=6 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>UF</font></th>
        <th rowspan=3 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>ID</font></th>
        <th rowspan=3 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Nome</font></th>
        <th colspan=6 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>UF</font></th>
    </tr>
    <tr>
        <th rowspan=2 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>ID</font></th>
        <th rowspan=2 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Sigla</font></th>
        <th rowspan=2 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Nome</font></th>
        <th colspan=3 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Região</font></th>
        <th rowspan=2 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>ID</font></th>
        <th rowspan=2 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Sigla</font></th>
        <th rowspan=2 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Nome</font></th>
        <th colspan=3 align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Região</font></th>
    </tr>
    <tr>
        <th align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>ID</font></th>
        <th align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Sigla</font></th>
        <th align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Nome</font></th>
        <th align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>ID</font></th>
        <th align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Sigla</font></th>
        <th align=center bgcolor=#d6d6d6><font face=arial color=#006600 size=1px>Nome</font></th>
    </tr>
";

foreach ($resultado as $key => $value) {
    echo "
    <tr>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->id}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->nome}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->microrregiao->id}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->microrregiao->nome}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->microrregiao->mesorregiao->id}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->microrregiao->mesorregiao->nome}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->microrregiao->mesorregiao->UF->id}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->microrregiao->mesorregiao->UF->sigla}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->microrregiao->mesorregiao->UF->nome}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->microrregiao->mesorregiao->UF->regiao->id}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->microrregiao->mesorregiao->UF->regiao->sigla}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->microrregiao->mesorregiao->UF->regiao->nome}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->{'regiao-imediata'}->id}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->{'regiao-imediata'}->nome}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->{'regiao-imediata'}->{'regiao-intermediaria'}->id}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->{'regiao-imediata'}->{'regiao-intermediaria'}->nome}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->{'regiao-imediata'}->{'regiao-intermediaria'}->UF->id}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->{'regiao-imediata'}->{'regiao-intermediaria'}->UF->sigla}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->{'regiao-imediata'}->{'regiao-intermediaria'}->UF->nome}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->{'regiao-imediata'}->{'regiao-intermediaria'}->UF->regiao->id}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->{'regiao-imediata'}->{'regiao-intermediaria'}->UF->regiao->sigla}</font></td>
        <td align=left bgcolor=#efefef><font face=arial color=#006600 size=1px>{$value->{'regiao-imediata'}->{'regiao-intermediaria'}->UF->regiao->nome}</font></td>
    </tr>
    ";
}

echo "</table>
        
<script src='' async defer></script>
</body>
</html>";
