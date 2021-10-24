<?php

 /* Pedimos para o PHP mostrar os erros, caso esteja desativado */
 error_reporting(E_ALL|E_STRICT);
 ini_set('display_errors', 1);

$regioes = json_decode('[
{"id":5,"sigla":"CO","nome":"Centro-Oeste"},
{"id":2,"sigla":"NE","nome":"Nordeste"},
{"id":1,"sigla":"N","nome":"Norte"},
{"id":3,"sigla":"SE","nome":"Sudeste"},
{"id":4,"sigla":"S","nome":"Sul"}
]');

$estados = '[{"id":12,"sigla":"AC","nome":"Acre","regiao":{"id":1,"sigla":"N","nome":"Norte"}},{"id":27,"sigla":"AL","nome":"Alagoas","regiao":{"id":2,"sigla":"NE","nome":"Nordeste"}},
{"id":16,"sigla":"AP","nome":"Amapá","regiao":{"id":1,"sigla":"N","nome":"Norte"}},{"id":13,"sigla":"AM","nome":"Amazonas","regiao":{"id":1,"sigla":"N","nome":"Norte"}},
{"id":29,"sigla":"BA","nome":"Bahia","regiao":{"id":2,"sigla":"NE","nome":"Nordeste"}},{"id":23,"sigla":"CE","nome":"Ceará","regiao":{"id":2,"sigla":"NE","nome":"Nordeste"}},
{"id":53,"sigla":"DF","nome":"Distrito Federal","regiao":{"id":5,"sigla":"CO","nome":"Centro-Oeste"}},{"id":32,"sigla":"ES","nome":"Espírito Santo","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}},
{"id":52,"sigla":"GO","nome":"Goiás","regiao":{"id":5,"sigla":"CO","nome":"Centro-Oeste"}},{"id":21,"sigla":"MA","nome":"Maranhão","regiao":{"id":2,"sigla":"NE","nome":"Nordeste"}},
{"id":51,"sigla":"MT","nome":"Mato Grosso","regiao":{"id":5,"sigla":"CO","nome":"Centro-Oeste"}},{"id":50,"sigla":"MS","nome":"Mato Grosso do Sul","regiao":{"id":5,"sigla":"CO","nome":"Centro-Oeste"}},
{"id":31,"sigla":"MG","nome":"Minas Gerais","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}},{"id":15,"sigla":"PA","nome":"Pará","regiao":{"id":1,"sigla":"N","nome":"Norte"}},
{"id":25,"sigla":"PB","nome":"Paraíba","regiao":{"id":2,"sigla":"NE","nome":"Nordeste"}},{"id":41,"sigla":"PR","nome":"Paraná","regiao":{"id":4,"sigla":"S","nome":"Sul"}},
{"id":26,"sigla":"PE","nome":"Pernambuco","regiao":{"id":2,"sigla":"NE","nome":"Nordeste"}},{"id":22,"sigla":"PI","nome":"Piauí","regiao":{"id":2,"sigla":"NE","nome":"Nordeste"}},
{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}},{"id":24,"sigla":"RN","nome":"Rio Grande do Norte","regiao":{"id":2,"sigla":"NE","nome":"Nordeste"}},
{"id":43,"sigla":"RS","nome":"Rio Grande do Sul","regiao":{"id":4,"sigla":"S","nome":"Sul"}},{"id":11,"sigla":"RO","nome":"Rondônia","regiao":{"id":1,"sigla":"N","nome":"Norte"}},
{"id":14,"sigla":"RR","nome":"Roraima","regiao":{"id":1,"sigla":"N","nome":"Norte"}},{"id":42,"sigla":"SC","nome":"Santa Catarina","regiao":{"id":4,"sigla":"S","nome":"Sul"}},
{"id":35,"sigla":"SP","nome":"São Paulo","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}},{"id":28,"sigla":"SE","nome":"Sergipe","regiao":{"id":2,"sigla":"NE","nome":"Nordeste"}},
{"id":17,"sigla":"TO","nome":"Tocantins","regiao":{"id":1,"sigla":"N","nome":"Norte"}}]';

$municipios = '[{"id":3300100,"nome":"Angra dos Reis","microrregiao":{"id":33013,"nome":"Baía da Ilha Grande","mesorregiao":{"id":3305,"nome":"Sul Fluminense","UF":{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}}}},"regiao-imediata":{"id":330002,"nome":"Angra dos Reis","regiao-intermediaria":{"id":3301,"nome":"Rio de Janeiro","UF":{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}}}}},{"id":3300159,"nome":"Aperibé","microrregiao":{"id":33002,"nome":"Santo Antônio de Pádua","mesorregiao":{"id":3301,"nome":"Noroeste Fluminense","UF":{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}}}},"regiao-imediata":{"id":330012,"nome":"Santo Antônio de Pádua","regiao-intermediaria":{"id":3304,"nome":"Campos dos Goytacazes","UF":{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}}}}},{"id":3300209,"nome":"Araruama","microrregiao":{"id":33010,"nome":"Lagos","mesorregiao":{"id":3304,"nome":"Baixadas","UF":{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}}}},"regiao-imediata":{"id":330013,"nome":"Cabo Frio","regiao-intermediaria":{"id":3305,"nome":"Macaé - Rio das Ostras - Cabo Frio","UF":{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}}}}},
{"id":1200013,"nome":"Acrelândia","microrregiao":{"id":12004,"nome":"Rio Branco","mesorregiao":{"id":1202,"nome":"Vale do Acre","UF":{"id":12,"sigla":"AC","nome":"Acre","regiao":{"id":1,"sigla":"N","nome":"Norte"}}}},"regiao-imediata":{"id":120001,"nome":"Rio Branco","regiao-intermediaria":{"id":1201,"nome":"Rio Branco","UF":{"id":12,"sigla":"AC","nome":"Acre","regiao":{"id":1,"sigla":"N","nome":"Norte"}}}}},{"id":1200054,"nome":"Assis Brasil","microrregiao":{"id":12005,"nome":"Brasiléia","mesorregiao":{"id":1202,"nome":"Vale do Acre","UF":{"id":12,"sigla":"AC","nome":"Acre","regiao":{"id":1,"sigla":"N","nome":"Norte"}}}},"regiao-imediata":{"id":120002,"nome":"Brasiléia","regiao-intermediaria":{"id":1201,"nome":"Rio Branco","UF":{"id":12,"sigla":"AC","nome":"Acre","regiao":{"id":1,"sigla":"N","nome":"Norte"}}}}}]';

$_33 = json_decode('[{"id":3300100,"nome":"Angra dos Reis","microrregiao":{"id":33013,"nome":"Baía da Ilha Grande","mesorregiao":{"id":3305,"nome":"Sul Fluminense","UF":{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}}}},"regiao-imediata":{"id":330002,"nome":"Angra dos Reis","regiao-intermediaria":{"id":3301,"nome":"Rio de Janeiro","UF":{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}}}}},{"id":3300159,"nome":"Aperibé","microrregiao":{"id":33002,"nome":"Santo Antônio de Pádua","mesorregiao":{"id":3301,"nome":"Noroeste Fluminense","UF":{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}}}},"regiao-imediata":{"id":330012,"nome":"Santo Antônio de Pádua","regiao-intermediaria":{"id":3304,"nome":"Campos dos Goytacazes","UF":{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}}}}},{"id":3300209,"nome":"Araruama","microrregiao":{"id":33010,"nome":"Lagos","mesorregiao":{"id":3304,"nome":"Baixadas","UF":{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}}}},"regiao-imediata":{"id":330013,"nome":"Cabo Frio","regiao-intermediaria":{"id":3305,"nome":"Macaé - Rio das Ostras - Cabo Frio","UF":{"id":33,"sigla":"RJ","nome":"Rio de Janeiro","regiao":{"id":3,"sigla":"SE","nome":"Sudeste"}}}}}]');
$_12 = json_decode('[{"id":1200013,"nome":"Acrelândia","microrregiao":{"id":12004,"nome":"Rio Branco","mesorregiao":{"id":1202,"nome":"Vale do Acre","UF":{"id":12,"sigla":"AC","nome":"Acre","regiao":{"id":1,"sigla":"N","nome":"Norte"}}}},"regiao-imediata":{"id":120001,"nome":"Rio Branco","regiao-intermediaria":{"id":1201,"nome":"Rio Branco","UF":{"id":12,"sigla":"AC","nome":"Acre","regiao":{"id":1,"sigla":"N","nome":"Norte"}}}}},{"id":1200054,"nome":"Assis Brasil","microrregiao":{"id":12005,"nome":"Brasiléia","mesorregiao":{"id":1202,"nome":"Vale do Acre","UF":{"id":12,"sigla":"AC","nome":"Acre","regiao":{"id":1,"sigla":"N","nome":"Norte"}}}},"regiao-imediata":{"id":120002,"nome":"Brasiléia","regiao-intermediaria":{"id":1201,"nome":"Rio Branco","UF":{"id":12,"sigla":"AC","nome":"Acre","regiao":{"id":1,"sigla":"N","nome":"Norte"}}}}}]');

$categorias = '[{ "Id": 1, "Categoria": "Linguagem de programação" },{ "Id": 2, "Categoria": "Banco de dados" }]';

//$estados = json_decode($estados);
$municipios = json_decode($municipios);



$estados = json_decode($categorias);
$estados = json_encode($estados);

/*
$estados = json_decode($estados);
$estados = json_encode($estados);
*/


//https://cbsa.com.br/post/combobox-dinamico-com-json-e-jquery-sem-requisicao-ajax.aspx

print_r($estados);

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





        
        <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
        <script type='text/javascript'>
        //Array de Categoria em JSON puro
        var categoriasx = [
            { 'Id': '1', 'Categoria': 'Linguagem de programação' },
            { 'Id': '2', 'Categoria': 'Banco de dados' }]
        //Array de Subcategoria em JSON puro
        var subCategorias = [
            { Id: 1, IdCategoria: 1, Nome: 'C#' },
            { Id: 2, IdCategoria: 1, Nome: 'Java' },
            { Id: 3, IdCategoria: 2, Nome: 'SQL Server' },
            { Id: 4, IdCategoria: 2, Nome: 'My Sql' }]


            var subCategorias = subCategorias;
            //console.log(subCategorias[0]['Nome']);
            subCategorias.forEach(function(cor) {
            console.log(cor);
            });


        console.log(\"---------------------------------0-----------------------------------\");
            
        var categorias = $estados;
        console.log(categorias);
        console.log(categorias[0]);

        console.log(\"---------------------------------1-----------------------------------\");
/*
        var dados = [];
        for(let elemento of categorias[0]){
        dados.push(elemento.Categoria);
        }
        console.log(dados);

        console.log(\"---------------------------------2-----------------------------------\");

        var dados = categorias[0].map(function(e) { return e.Categoria; } );
        console.log(dados);

        //console.table(categorias)

        console.log(\"---------------------------------3-----------------------------------\");

        dados.forEach(function(cor) {
         console.log(cor);
        });

        console.log(\"---------------------------------4-----------------------------------\");

        categoriasx.forEach(function(cor) {
            console.log(cor);
        });
*/       
        console.log(\"---------------------------------select-----------------------------------\");

        $(document).ready(function () {
            //Percorre o array de categorias para popular o combo de categorias
            $.each(categorias, function (i, categoria) {
                //Faz o append (adiciona) cada um dos itens do array como options do select de id combo1
                $('#combo1').append($('<option>', {
                    //neste caso o value do option vai ser a pripriedade Id (é case sensitive, então cuide da nomenclatura)
                    value: categoria.Id,
                    //no text estou usando a propriedade Categoria dos objetos dentro do array categoria (case sensitive também)
                    text: categoria.Categoria
                }))
            })
            //Vai ser acionado cada vez que o combo1 tracar de item selecionado
            $('#combo1').change(function () {
                //Pegando o novo valor selecionado no combo
                var categoria = $(this).val()
                carregaCombo2(categoria);
            })

            //Definir o item selecionado no carregamento da página
            $('#combo1').val(2)
            //carregar o combo2 baseado na categoria selecionada
            carregaCombo2(2)
            //Selecionar a subcategoria passando o id dela
            $('#combo2').val(3)
        })

        function carregaCombo2(categoria) {
            //Fazer um filtro dentro do array de categorias com base no Id da Categoria selecionada no combo1
            var subCategoriasFiltradas = $.grep(subCategorias, function (e) { return e.IdCategoria == categoria; });
            //Faz o append (adiciona) cada um dos itens do array filtrado no combo2
            $('#combo2').html('<option>Selecione</option>');
            $.each(subCategoriasFiltradas, function (i, subcategoria) {
                $('#combo2').append($('<option>', {
                    value: subcategoria.Id, //Id do objeto subcategoria
                    text: subcategoria.Nome //Nome da Subcategoria
                }))
            })
        }

    </script>

    <select id='combo1'>
    <option>Selecione</option>
</select>
<select id='combo2'>
    <option>Selecione</option>
</select>


</body>
</html>";

