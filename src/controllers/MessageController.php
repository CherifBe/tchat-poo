<?php

namespace Controllers;

use Models\Message;

require_once('src/utils/utils.php');
class MessageController extends Controller
{
    protected $modelName = \Repository\Message::class;

    /**
     * @throws \Exception
     */
    public function index()
    {
        /**
         * Récupération des messages
         */
        $messages = $this->repository->findAll("date DESC");

        $allMyMessages = [];
        foreach ($messages as $message){
            $myMessage = new Message();
            $myMessage->setId($message['id']);
            $myMessage->setMessage($message['message']);
            $myMessage->setAuthor($message['author']);
            $myMessage->setDate(new \DateTime($message['date']));

            $allMyMessages[] = $myMessage;
        }
        /**
         * Affichage
         */
        $pageTitle = "Accueil";

        render('messages/index', compact('pageTitle', 'allMyMessages'));
    }

    public function insert()
    {
        $author = trim($_POST['user']);
        $content = trim($_POST['message']);
        if(strlen($author) < 1 or strlen($content) < 1){
            return;
        }
        // TODO: ADD SECURITE
        $this->repository->insert($author, $content);
        header("Location: index.php");
    }

    public function show()
    {

    }

    public function delete()
    {

    }
}