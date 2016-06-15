<?php

class DB {

    public $db = null;

    public function __construct()
    {

           try {
              $db = new PDO("mysql:host=localhost;dbname=phpkurs_dz4", 'root', '');
              $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e) {
                echo $e->getMessage();
            }

          return $this->db;
    }

    public function query ($sql){
            $this->db->query($sql);
    }
}
