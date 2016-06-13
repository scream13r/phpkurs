<?php

class Model_Main extends Model {

    public function get_data()
    {

            $filelist = array();
            if ($handle = opendir("./files")) {
                while ($entry = readdir($handle)) {

                     if( !in_array( $entry, array('.', '..') ) ) {
                         $filelist[] = $entry;
                     }

                }
                closedir($handle);
            }

            return $filelist;
    }

    public function get_data_one_file()
    {
            $content = file_get_contents('./files/'.$this->param1, true);
            return $content;
    }
}