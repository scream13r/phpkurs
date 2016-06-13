<?php

class Controller_About extends Controller {
    public function action_index()
    {
        $this->view->generate('onas_view.twig', array(
            "title" => "О сайте"
        ));
    }
}