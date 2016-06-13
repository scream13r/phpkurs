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

    public function download()
    {
        $file = './files/' . $this->param1;

        if (file_exists($file)) {

            if (ob_get_level()) {
                ob_end_clean();
            }
            // заставляем браузер показать окно сохранения файла
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file));
            // читаем файл и отправляем его пользователю
            readfile($file);
            exit;
        }
    }

    public function delete()
    {
        $file ='./files/' . $this->param1;
        if (file_exists($file)) {

            unlink($file);
        }
        header('Location: /');
    }

    public function upload()
    {
        $file_name =  strip_tags($_POST['file_name']);
        if (strlen($file_name) == 0) return 0;

        $new_file_name = "files/".basename($file_name) .  '.' . end(explode(".", $_FILES['file']['name']));
        copy($_FILES['file']['tmp_name'], $new_file_name);

        if (file_exists($new_file_name)) {
            return $new_file_name;
        } else {
            return 0;
        }

    }

    public function create()
    {
        $file_name =  strip_tags($_POST['file_name']);
        $text =  strip_tags($_POST['text']);
        if (strlen($file_name) == 0 || strlen($text) == 0) return 0;

        $new_file_name = "files/".basename($file_name) .  '.txt';
        $fp = fopen($new_file_name, "w");
        fwrite($fp, $text);
        fclose($fp);

        if (file_exists($new_file_name)) {
            return $new_file_name;
        }

    }

    public function edit()
    {
        $file ='./files/' . $this->param1;
        $text =  strip_tags($_POST['text']);
        if (strlen($text) == 0) return 0;

        $fp = fopen($file, "w");
        fwrite($fp, $text);
        fclose($fp);

         return 1;

    }
}