<?php

namespace Repository;

require_once('src/repository/Repository.php');
class Message extends Repository
{
    protected $table = "messages";

    function insert(string $author, string $content): void
    {
        $query = $this->db->prepare("INSERT INTO messages SET author = :author, message = :content, date = NOW()");
        $query->execute(compact('author', 'content'));
    }
}
