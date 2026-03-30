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

    protected function getOneOrNullResult(PDOStatement $query): object|null {
        if (false === $result = $query->fetchObject($this->ns)) {
            $result = null;
        }

        return $result;
    }

    public function findOneById(int $id): object|null
    {
        $query = $this->pdo->prepare("SELECT * FROM {$this->table} WHERE id = ?");
        $query->bindValue(1, $id, PDO::PARAM_INT);
        $query->execute();
        return $this->getOneOrNullResult($query);
    }

    public function findAll(): array
    {
        $query = $this->pdo->query("SELECT * FROM {$this->table}");
        return $query->fetchAll(PDO::FETCH_CLASS, $this->ns);
    }

}