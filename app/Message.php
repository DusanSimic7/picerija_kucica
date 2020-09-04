<?php


class Message extends Database
{
    protected $table = "message";



    public function sendMessage($person_name, $text)
    {

        $this->query("INSERT INTO message(person_name, text) VALUES
                                       (:person_name, :text)");

        $this->bind(":person_name", $person_name);
        $this->bind(":text", $text);

        $this->execute();

    }



}