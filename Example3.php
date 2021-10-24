<?php

require_once "vendor/autoload.php";

use Emso\LocalidadeX\Search;

$busca = new Search;

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
        <title>Select Option</title>
        <meta name='description' content=''>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' href=''>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class='browsehappy'>You are using an <strong>outdated</strong> browser. Please <a href='#'>upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <form id='form-estados-municipios' name='form-estados-municipios' action='Example3.php' method='POST' onSubmit=''>

        <label for='estados'>Estados</label>
        <select class='validation' id='estados' type='text' name='estados' placeholder='Estados' onchange='' required>
            <option value='0'>Selecione um estado</option>
";
$estados = $busca->searchLocal();
foreach ($estados as $key => $value) {
    echo "
            <option value='{$value->id}'>{$value->sigla} - {$value->nome}</option>
    ";
}
echo "
        </select>

        <label for='municipios'>Municípios</label>
        <select class='validation' id='municipios' type='text' name='municipios' placeholder='Municípios' onchange='' required>
        <option data-city='0' value='0'>Selecione um município</option>
        ";
$municipios = $busca->searchLocal(12);
foreach ($municipios as $key => $value) {
            echo "
            <option data-city='{$value->id}' value='{$value->id}'>{$value->nome}</option>
    ";
}
echo "
        </select>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
        
        <script src=''>
        var municipios = $('select[name='municipios'] option');
        $('select[name='estados']').on('change', function () {
            var estados = this.value;
            var novoSelect = municipios.filter(function () {
                return $(this).data('city') == estados;
            });
            $('select[name='municipios']').html(novoSelect);
        });
        </script>

</body>
</html>";
