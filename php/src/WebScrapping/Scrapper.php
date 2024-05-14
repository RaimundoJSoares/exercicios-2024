// src/Scrapper.php
<?php

namespace Chuva\Php\WebScrapping;

require_once 'Entity/Paper.php';

use Chuva\Php\WebScrapping\Entity\Paper;

class Scrapper {

    public function scrap(\DOMDocument $dom): array {
        // Extrai os dados da página HTML e retorna um array de objetos Paper
        $data = [];

        // Lógica para extrair os dados e criar objetos Paper aqui...

        return $data;
    }
}
