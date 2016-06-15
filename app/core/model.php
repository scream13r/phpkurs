<?php

class Model {

   function __construct()
   {
       $this->db = new DB();
       $this->faker = Faker\Factory::create();
   }

    public function get_data(){}

}