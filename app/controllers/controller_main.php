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
        $this->model->param1 = $this->param1;
        $this->model->download();
    }

    function action_delete()
    {
        $this->model->param1 = $this->param1;
        $this->model->delete();
    }

    function action_load()
    {
        $this->model->param1 = $this->param1;
        $this->model->delete();
    }

    function action_upload()
    {
        $result_upload = $this->model->upload();

        if (strlen($result_upload) > 1) {
            $data = array('upload_status' => 1, 'upload_text' => 'Файл ' . $result_upload . ' успешно загружен');
        } else {
            $data = array('upload_status' => 0, 'upload_text' => 'Загрузка файла не удалась :( ');
        }

        $files = $this->model->get_data();
        $data['arrFiles'] = $files;
        $this->view->generate('main_view.php', $data);
    }

    function action_create()
    {
        $data = '';
        $result_upload = $this->model->create();

        if (count($_POST) > 0) {
            if (strlen($result_upload) > 1) {
                $data = array('upload_status' => 1, 'upload_text' => 'Файл ' . $result_upload . ' успешно создан');
            } else {
                $data = array('upload_status' => 0, 'upload_text' => 'Создание файла не удалась :( ');
            }
        }

        $this->view->generate('main_create.php', $data);
    }

    function action_edit()
    {
        $this->model->param1 = $this->param1;
        
        if (count($_POST) > 0) {
            $result = $this->model->edit();
            if ($result == 1) {
                $data['result_status'] = 1;
                $data['result_text'] = 'Файл успешно изменен';
            } else {
                $data['result_status'] = 0;
                $data['result_text'] = 'Изменение файла не удалась :( ';
            }
        }

        $content = $this->model->get_data_one_file();
        $data['title'] = 'Редактирование файла ';
        $data['text'] = $content;
        $this->view->generate('main_edit.php', $data);
    }
}