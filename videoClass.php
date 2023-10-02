<?php
class Video{
    private $id;
    private $url;
    private $autora_id;
    private $nosaukums;

    public function __construct($id, $url, $autora_id, $nosaukums) {
        $this->id = $id;
        $this->url = $url;
        $this->autora_id = $autora_id;
        $this->nosaukums = $nosaukums;
    }
}


?>