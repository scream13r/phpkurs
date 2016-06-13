<?php

class Controller_Contact extends Controller {
    public function action_index()
    {
        $this->view->generate('contact_view.twig', array(
            "title"=> "Контакты"
        ));
    }
}