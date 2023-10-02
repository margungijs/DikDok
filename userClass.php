<?php
class User{
    private $id;
    private $lietotajvards;
    private $epasts;
    private $parole;

    public function __construct($id, $lietotajvards, $epasts, $parole) {
        $this->id = $id;
        $this->lietotajvards = $lietotajvards;
        $this->epasts = $epasts;
        $this->parole = $parole;
    }
}
?>