<?php

abstract class AbstractPDO
{

    protected PDO $pdo;

    private string $dsn = "mysql:host=127.0.0.1:3307;dbname=db_centrale-ish";
    private string $username = "root";
    private string $password = "";

    public function __construct(private string $ns, private string $table) {
        $this->pdo = new PDO(
            $this->dsn,
            $this->username,
            $this->password,
            [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            ]
        );
    }

    public function findAll(): array
    {
        $query = $this->pdo->query("SELECT * FROM {$this->table}");
        return $query->fetchAll(PDO::FETCH_CLASS, $this->ns);
    }

}