<?php
class Comment{
    private $id;
    private $video_id;
    private $autora_id;
    private $teksts;

    public function __construct($id, $video_id, $autora_id, $teksts) {
        $this->id = $id;
        $this->video_id = $video_id;
        $this->autora_id = $autora_id;
        $this->teksts = $teksts;
    }
}
?>