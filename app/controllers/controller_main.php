<?php

class Controller_Main extends Controller
{

    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();
    }

    function action_index()
    {
        $files = $this->model->get_data();
        $data = array('title' => 'Главная страница', 'arrFiles' => $files);
        $this->view->generate('main_view.php', $data);
    }

    function action_view()
    {
        $this->model->param1 = $this->param1;
        $content = $this->model->get_data_one_file();

        $data = array('title' => 'Детальный просмотр файла ' . $this->param1, 'content' => $content);
        $this->view->generate('main_view_detail.php', $data);
    }

    function action_download()
    {
        $file ='./files/' . $this->param1;

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

}