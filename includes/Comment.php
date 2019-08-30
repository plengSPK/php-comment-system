<?php

require_once 'config/db.php';


class Comment
{

    public function fetch_all()
    {
        global $conn;

        $query = $conn->prepare("SELECT * FROM tbl_comment ORDER BY parent_comment_id asc, comment_id asc");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_comment($comment)
    {
        global $conn;
        $date = date('Y-m-d H:i:s');

        $query = $conn->prepare('INSERT INTO tbl_comment(parent_comment_id,comment,comment_sender_name,date) VALUES (?, ?, ?, ?)');
        $query->bindValue(1, $comment['comment_id']);
        $query->bindValue(2, $comment['comment']);
        $query->bindValue(3, $comment['name']);
        $query->bindValue(4, $date);

        $query->execute();
    }
}