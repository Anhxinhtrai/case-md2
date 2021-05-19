<?php


namespace App\Model;


class BorrowingCard extends Model
{
    public function createCard($book_id, $user_id)
    {
        $sql = "INSERT INTO borrowing_cards VALUE (null,?,?,now(),(now()+5),'not return')";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $user_id);
        $stmt->bindParam(2, $book_id);
        return $stmt->execute();

    }

    public function getAllCard()
    {
        $sql = "SELECT * FROM borrowing_cards";
        $stmt=$this->conn->query($sql);
        return $stmt->fetchAll();
    }

    public function getCardByUserId($user_id)
    {
        $sql = "SELECT borrowing_cards.card_id,users.name,books.bookName,borrowing_cards.borrowing_date,borrowing_cards.return_date,borrowing_cards.status
FROM borrowing_cards
JOIN users ON borrowing_cards.user_id=users.id
JOIN books ON borrowing_cards.book_id=books.book_id
WHERE user_id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(1, $user_id);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}