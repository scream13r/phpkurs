<?php

class Model_Main extends Model {

    public function get_data()
    {
          $filelist = array();
          $stmt = $this->db->query("SHOW TABLES");
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $filelist[] = $row['Tables_in_phpkurs_dz4'].' '.$row['field2'];
          }
          return $filelist;
    }


   public function get_data_one()
    {

          $mainArray = array();
          $stmtTable = $this->db->query("SELECT * FROM " . $this->param1 . " ");

          $stmt = $this->db->query("SHOW FIELDS FROM " . $this->param1 . " ");
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              $mainArray['col'][] = $row['Field'];
          }


          while($row2 = $stmtTable->fetch(PDO::FETCH_ASSOC)) {

                    foreach ($mainArray['col'] as $elem => $nameCol) {
                          $tempArray[$nameCol] = $row2[$nameCol];
                    }
                    $mainArray['value'][] =  $tempArray;
           }

          return $mainArray;
    }

    public function delete()
    {
         $this->db->query("
         TRUNCATE TABLE users;
         TRUNCATE TABLE products;
         TRUNCATE TABLE order_items;
         TRUNCATE TABLE orders;
         TRUNCATE TABLE category");

        return 1;
    }

    public function create()
    {

        for($i = 0; $i <= 9; $i++) {
                $sth = $this->db->prepare("INSERT INTO users SET name=?, lastname=?, birthday=?, email=?,  password=?, is_active='1', reg_date=?, last_update=?, status='1' ");
                $sth->execute( array(
                    $this->faker->name,
                    $this->faker->lastName,
                    $this->faker->date,
                    $this->faker->email,
                    $this->faker->password(6),
                    $this->faker->date,
                    $this->faker->date
                ));

                $sth = $this->db->prepare("INSERT INTO products SET id_catalog=?, title=?, mark=?, count=?, price=?, description=?, status='1' ");
                $sth->execute( array(
                    $this->faker->numberBetween($min = 1, $max = 10),
                    $this->faker->jobTitle,
                    $this->faker->word,
                    $this->faker->numberBetween($min = 1, $max = 100),
                    $this->faker->randomFloat(),
                    $this->faker->realText
                ));

                $sth = $this->db->prepare("INSERT INTO category SET title=?, status='1' ");
                $sth->execute( array(
                    $this->faker->company
                ));

                $sth = $this->db->prepare("INSERT INTO orders SET id_user=?, date_order=?, status='1' ");
                $sth->execute( array(
                    $this->faker->numberBetween($min = 1, $max = 10),
                    $this->faker->date
                ));

                $sth = $this->db->prepare("INSERT INTO order_items SET id_order=?,  id_product=?, price=?, count=? ");
                $sth->execute( array(
                    $this->faker->numberBetween($min = 1, $max = 10),
                    $this->faker->numberBetween($min = 1, $max = 10),
                    $this->faker->randomFloat(),
                    $this->faker->numberBetween($min = 1, $max = 100)
                ));

        }

        return 1;
    }

}