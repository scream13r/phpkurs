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
        $content = $this->model->get_data_one();

        if (count($content['value']) == 0) {

                $files = $this->model->get_data();
                $data['status'] = 0;
                $data['status_text'] = 'Все таблицы пусты. Загрузите данные.';
                $data['arrFiles'] = $files;

                $this->view->generate('main_view.php', $data);

        } else {

            $data = array('title' => 'Детальный просмотр таблицы ' . $this->param1, 'table' => $content);
            $this->view->generate('main_view_detail.php', $data);

        }

    }


    function action_delete()
    {
        $result = $this->model->delete();
        if ($result == 1) {
                $data['status'] = 1;
                $data['status_text'] = 'Все данные успешно удалены';
            } else {
                $data['status'] = 0;
                $data['status_text'] = 'Не удалилось :( ';
            }
            $data['arrFiles'] = $files = $this->model->get_data();
           $this->view->generate('main_view.php', $data);
    }


    function action_create()
    {

        $result = $this->model->create();
        if ($result == 1) {
                $data['status'] = 1;
                $data['status_text'] = 'Все данные успешно добавлены';
            } else {
                $data['status'] = 0;
                $data['status_text'] = 'Не удалилось :( ';
            }
           $data['arrFiles'] = $files = $this->model->get_data();
           $this->view->generate('main_view.php', $data);

    }

}