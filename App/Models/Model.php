<?php

namespace App\Models;

use App\Core\Connection;

class Model{
    private ?array $content;
    protected $table = NULL;
    protected $idField = NULL;
    protected $logTimestamp;

    public function __construct()
    {

        if (!is_bool($this->logTimestamp)) {
            $this->logTimestamp = TRUE;
        }

        if ($this->table == NULL) {
            $this->table = strtolower(get_class($this));
        }
        if ($this->idField == NULL) {
            $this->idField = 'id';
        }
    }

    public function __set($parameter, $value)
    {
        $this->content[$parameter] = $value;
    }

    public function __get($parameter)
    {
        return $this->content[$parameter];
    }

    public function __isset($parameter)
    {
        return isset($this->content[$parameter]);
    }

    public function __unset($parameter)
    {
        if (isset($parameter)) {
            unset($this->content[$parameter]);
            return true;
        }
        return false;
    }

    private function __clone()
    {
        if (isset($this->content[$this->idField])) {
            unset($this->content[$this->idField]);
        }
    }

    public function toArray()
    {
        return $this->content;
    }

    public function fromArray(array $array)
    {
        $this->content = $array;
    }

    public function toJson()
    {
        return json_encode($this->content);
    }

    public function fromJson(string $json)
    {
        $this->content = json_decode($json);
    }

    private function format($value)
    {
        if (is_string($value) && !empty($value)) {
            return "'" . addslashes($value) . "'";
        } else if (is_bool($value)) {
            return $value ? 'TRUE' : 'FALSE';
        } else if ($value !== '') {
            return $value;
        } else {
            return "NULL";
        }
    }

    private function convertContent()
    {
        $newContent = array();
        foreach ($this->content as $key => $value) {
            if (is_scalar($value)) {
                $newContent[$key] = $this->format($value);
            }
        }
        return $newContent;
    }


    public function save()
    {
        $newContent = $this->convertContent();

        if (isset($this->content[$this->idField])) {
            $sets = array();
            foreach ($newContent as $key => $value) {
                if ($key === $this->idField)
                    continue;
                $sets[] = "{$key} = {$value}";
            }
            $sql = "UPDATE {$this->table} SET " . implode(', ', $sets) . " WHERE {$this->content[$this->idField]} = {$this->id};";
        } else {
            $sql = "INSERT INTO {$this->table} (" . implode(', ', array_keys($newContent)) . ') VALUES (' . implode(',', array_values($newContent)) . ');';
        }

        return $this->executar($sql);

    }

    protected function executar($sql){
        if ($connection = Connection::getInstance()) {
            return $connection->exec($sql);
        } else {
            throw new Exception("Não há conexão com Banco de dados!");
        }
    }

    public function all(){
        $connection = Connection::getInstance();
        $sql = "SELECT * FROM $this->table";
        $result = $connection->query($sql);
        if($result){
            return $result->fetchAll(\PDO::FETCH_ASSOC);
        }
    }

    public function findById(int $id){
        $connection = Connection::getInstance();
        $sql = "SELECT * FROM $this->table where id = :id";
        $result = $connection->prepare($sql);
        $result->bindValue(':id', $id);
        $result->execute();
        if($result){
            return $result->fetch(\PDO::FETCH_ASSOC);
        }
    }
}