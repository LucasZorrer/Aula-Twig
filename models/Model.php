<?php

class Model
{
    private $driver = 'mysql';
    private $host = 'localhost';

    private $dbName = 'sistematwig';

    private $port = 3306;

    private $user = 'root';
    private $password = null;

    protected $conn;

    protected $table;

    public function __construct()
    {
        $table = get_class($this);
        $table .= 's';
        $this->table = $table;
        $this->conn = new PDO("{$this->driver}:host={$this->host};port={$this->port};dbname={$this->dbName}", $this->user, $this->password);
    }

    public function getAll()
    {
        $sql = $this->conn->query("SELECT * FROM {$this->table}");

        return $sql->fetchAll(PDO::FETCH_OBJ);
    }


    public function getById($id)
    {


        $sql = $this->conn->prepare("SELECT * FROM {$this->table} WHERE id = :id ");
        $sql->bindParam(":id", $id);
        $sql->execute();

        $user = $sql->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    public function create($data)
    {
        $sql = "INSERT INTO {$this->table}";

        foreach (array_keys($data) as $field) {
            $sql_fields[] = "{$field} = :{$field}";
        }

        $sql_fields = implode(', ', $sql_fields);

        $sql .= " SET {$sql_fields}";

        $insert = $this->conn->prepare($sql);
        

        // foreach ($data as $field => $value) {
        //     $insert->bindValue(":{$field}", $value);
        // }

        $insert->execute($data);

        return $insert->errorInfo();
    }


}