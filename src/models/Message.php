<?php

namespace Models;

require_once('src/models/Model.php');
class Message extends Model
{
    protected $table = "messages";

    function insert(string $author, string $content): void
    {
        $query = $this->db->prepare("INSERT INTO messages SET author = :author, message = :content, date = NOW()");
        $query->execute(compact('author', 'content'));
    }
}
