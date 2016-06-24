<?php

namespace Application\Database;

use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Sql;

class UsersTable{

  private $adapter;
  private $sql;

  public function __construct($username, $password, $database)
  {
    $this->adapter = new Adapter(array(

      "driver"    => "Pdo_MySql",
      "hostname"  => "127.0.0.1",
      "port"      => "3306",
      "username"  => $username,
      "password"  => $password,
      "database"  => $database,

    ));

    $this->sql = new Sql($this->adapter);

  }


  public function getAllUsers()
  {
    //select * from goodies;
    $select = $this->sql->select()->from("users");

    $query = $this->sql->buildSqlString($select);

    return $this->adapter->query($query)->execute();
  }

  public function getUserById($id){

    $select = $this->sql->select()->from("users")->where(array("id"=>$id));

    $query = $this->sql->buildSqlString($select);

    return $this->adapter->query($query)->execute();

  }

}//UsersTable

 ?>
