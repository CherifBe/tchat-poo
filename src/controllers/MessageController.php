<?php

require_once('src/models/Message.php');
class MessageController
{
    public function index()
    {
        $model = new Message();
        /**
         * Récupération des messages
         */
        $messages = $model->findAll("create_at DESC");
        /**
         * Affichage
         */
        $pageTitle = "Accueil";

        render('messages/index', compact('pageTitle', 'messages'));
    }

    public function show()
    {

    }

    public function delete()
    {

    }
}