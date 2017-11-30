<?php
class Article
{
private $dbhost = "localhost";
private $dataBase_username = 'root';
private $dataBase_password = 'edd_14235';
private $nameDB = "employees";
private $nameTable = "article";

    public function getNameDB(): string
    {
        return $this->nameDB;
    }
    public function getNameTable(): string
    {
        return $this->nameTable;
    }
    public  function getConnectionMySQL()
    {
        $pdo_conn = new PDO("mysql:host=$this->dbhost", $this->dataBase_username, $this->dataBase_password);
        return $pdo_conn;
    }
    public  function getConnectionDB()
    {
        $pdo_conn = new PDO("mysql:host=$this->dbhost;dbname=$this->nameDB", $this->dataBase_username, $this->dataBase_password);
        return $pdo_conn;
    }
    public function createDB(){
        $pdo_conn = $this->getConnectionMySQL();
        $sql_createDB = "CREATE DATABASE " .$this->nameDB;
        $pdo_statement = $pdo_conn->prepare($sql_createDB);
        $pdo_statement->execute();
        return $result = $pdo_statement->execute();
    }
    public function createTable(){
        $pdo_conn = $this->getConnectionDB();
        $sql_createTable = " CREATE TABLE $this->nameTable(id int(11) NOT NULL AUTO_INCREMENT,
 firstName varchar(255) CHARACTER SET utf8 NOT NULL,lastName text CHARACTER SET utf8 NOT NULL,
 hireDate datetime NOT NULL, PRIMARY KEY (id)) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;";
        $pdo_statement = $pdo_conn->prepare($sql_createTable);
        return $result = $pdo_statement->execute();
    }
    public function insertData($firstName, $lastName, $hireDate){
        $pdo_conn = $this->getConnectionDB();
        $sql = "INSERT INTO  $this->nameTable (firstName, lastName, hireDate) VALUES ( :firstName, :lastName, :hireDate)";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":firstName", $firstName);
        $pdo_statement->bindValue(":lastName", $lastName);
        $pdo_statement->bindValue(":hireDate", $hireDate);
        $pdo_statement->execute();
        return $result = $pdo_statement->execute();

    }
    public function updateData($firstName,$lastName,$hireDate,$id){
        $pdo_conn = $this->getConnectionDB();
        $sql = "UPDATE $this->nameTable SET firstName = :firstName, lastName = :lastName, hireDate = :hireDate WHERE id = :id";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $pdo_statement->bindValue(":firstName", $firstName);
        $pdo_statement->bindValue(":lastName", $lastName);
        $pdo_statement->bindValue(":hireDate", $hireDate);
        $pdo_statement->execute();
        return $result = $pdo_statement->execute();
    }
    public function deleteData($id){
        $pdo_conn = $this->getConnectionDB();
        $sql = "DELETE from  $this->nameTable WHERE id = :id";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->bindValue(":id", $id);
        $pdo_statement->execute();
        return $result = $pdo_statement->execute();
    }
    public function selectData(){
        $pdo_conn = $this->getConnectionDB();
        $sql = "SELECT * FROM $this->nameTable";
        $pdo_statement = $pdo_conn->prepare($sql);
        $pdo_statement->execute();
        return $result = $pdo_statement->fetchAll();
    }

}