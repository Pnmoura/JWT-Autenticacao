<?php

namespace app\database;

use PDO;

class Connection
{
  public static function connect()
  {
    return new PDO("mysql:host=localhost:3306;dbname=laravel","root","theo@071020",[
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
  }
}