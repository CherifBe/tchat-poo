<?php

require_once('src/database.php');
abstract class Model {
    protected $db;
    protected $table;

    public function __construct()
    {
        $this->db = Database::getMyPDO();
    }

    public function findAll(?string $order = ""): array
    {
        $sql = "SELECT * FROM {$this->table}";
        if($order){
            $sql .= " ORDER BY " . $order;
        }
        $resultats = $this->db->query($sql);
        $items = $resultats->fetchAll();
        return $items;
    }

    public function find(int $id): array
    {
        $query = $this->db->prepare("SELECT * FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
        $item = $query->fetch();
        return $item;
    }

    public function delete(int $id): void
    {
        $query = $this->db->prepare("DELETE FROM {$this->table} WHERE id = :id");
        $query->execute(['id' => $id]);
    }

}
