<?php


namespace App\Controller;

use App\Model\BorrowingCard;

class CardController
{
    protected $cardModel;

    public function __construct()
    {
        $card = new BorrowingCard();
        $this->cardModel = $card;
    }

    public function addCard($request)
    {
        $user_id = $request["user_id"];
        $book_id = $request["book_id"];
        try {
            $this->cardModel->createCard($book_id, $user_id);
        } catch (\PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }

    public function getAllCardById($user_id)
    {
        return $this->cardModel->getCardByUserId($user_id);
    }
}