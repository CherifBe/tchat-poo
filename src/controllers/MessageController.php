<?php

namespace Controllers;

require_once('src/utils/utils.php');
class MessageController extends Controller
{
    protected $modelName = \Models\Message::class;
    public function index()
    {
        /**
         * Récupération des messages
         */
        $messages = $this->model->findAll("date DESC");
        /**
         * Affichage
         */
        $pageTitle = "Accueil";

        render('messages/index', compact('pageTitle', 'messages'));
    }

    public function insert()
    {
        // ici recevoir le $_POST et les balancer dans la fonction insert
        $this->model->insert();
        redirect("index.php");
    }

    public function show()
    {

    }

    public function delete()
    {

    }
}