<?php

namespace Emso\LocalidadeX;

/**
 * Classe Search
 * Classe final para busca e listamento de Estados e Municípios via Api do IBGE
 * @author Estênio Mariano <dev.emso.exe@gmail.com>
 * @version 1.0.0
 */

final class Search
{

    /**
     * Variáveis para armazenar url de estados e municipíos
     * @var array $urlstates
     * @var string $urlcities
     */
    private static $urlstates = ["https://servicodados.ibge.gov.br/api/v1/localidades/estados/", "?orderBy=nome"];
    private static $urlcities = "/municipios";

    /**
     * Método makeUrl
     * Método privado, estático para construção da URL de listagem de estados ou municípios.
     * @param string $code
     * Parâmetro para recebimento de código de estado ou null para municípios.
     * @return string self
     */
    private static function makeUrl($code)
    {
        if (func_get_args()[0] == null) {
            return (string) self::$urlstates[0] . self::$urlstates[1];
        } else {
            return (string) self::$urlstates[0] . $code . self::$urlcities;
        }
    }

    /**
     * Método validateUrl
     * Método privado, estático para verificar se a URL é válida.
     * @param string $url
     * Parâmetro para recebimento da URL.
     * @return string $url
     */
    private static function validateURL(string $url)
    {
        if (filter_var($url, FILTER_VALIDATE_URL) == false) {
            die('URL enviada não é válida!');
        }

        return (string) $url;
    }

    /**
     * Método makeCurl
     * Método privado, estático para requisição GET e obtenção de conteúdo remoto.
     * @param string $url
     * Parâmetro para recebimento da URL.
     * @return array $result
     */
    private static function makeCurl($url)
    {
        $ch = curl_init();

        $options = [
            CURLOPT_URL            => $url,
            CURLOPT_HEADER         => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_CUSTOMREQUEST  => 'GET',
            CURLOPT_RETURNTRANSFER => true,
        ];

        curl_setopt_array($ch, $options);

        $result = curl_exec($ch);

        curl_close($ch);

        return json_decode($result);
    }

    /**
     * Método searchLocal
     * Método público que ao ser instanciado recebe o código de estado ou null para municípios
     * retornano uma listagem de estados ou municípios pertencentes ao estado selecionado.
     * @param string $param
     * Parâmetro para recebimento de código de estado ou null para municípios. 
     * @return self
     */
    public function searchLocal($param = null)
    {
        return self::makeCurl(self::validateURL(self::makeUrl($param)));
    }

}
