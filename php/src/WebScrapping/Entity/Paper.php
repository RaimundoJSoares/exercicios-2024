// src/Entity/Paper.php
<?php

namespace Chuva\Php\WebScrapping\Entity;

class Paper {

    public $id;
    public $title;
    public $type;
    public $authors;

    public function __construct($id, $title, $type, $authors = []) {
        $this->id = $id;
        $this->title = $title;
        $this->type = $type;
        $this->authors = $authors;
    }
}
