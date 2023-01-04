<?php

require_once('src/models/Model.php');
class Message extends Model
{
    protected $table = "messages";

    function insert(string $author, string $content): void
    {
        $query = $this->db->prepare("INSERT INTO messages SET author = :author, content = :content, created_at = NOW()");
        $query->execute(compact('author', 'content'));
    }
}
