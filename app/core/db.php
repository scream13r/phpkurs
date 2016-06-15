<?php

class DB {

    public $db = null;

    public function __construct()
    {

           try {
                $this->db = new PDO("mysql:host=localhost;dbname=phpkurs_dz4", 'root', '');
                $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e) {
                echo $e->getMessage();
            }

          return $this->db;
    }

    public function query ($sql){
            return  $this->db->query($sql);
    }

    public function prepare ($sql){
            return $this->db->prepare($sql);
    }

    public function execute($array){
            return $this->db->execute($array);
    }
}
