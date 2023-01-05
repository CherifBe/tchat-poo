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
        // ajouter sécurité
        $author = $_POST['user'];
        $content = $_POST['message'];
        $this->model->insert($author, $content);
        header("Location: index.php");
    }

    public function show()
    {

    }

    public function delete()
    {

    }
}