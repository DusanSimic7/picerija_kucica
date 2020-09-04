<?php


class News extends Database
{
    protected $table = "news";


    public function createNews($text)
    {

        $this->query("INSERT INTO news(text) VALUES(:text)");

        $this->bind(":text", $text);

        $this->execute();

    }

    public function deleteNews($id)
    {
        $this->query("DELETE FROM news WHERE id = :id");
        $this->bind(":id", $id);

        $this->execute();

    }


}