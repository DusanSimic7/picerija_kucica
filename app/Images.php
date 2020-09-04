<?php


class Images extends Database
{
    protected $table = "images";

    public function createImage($image_name, $category_id, $description)
    {

        $this->query("INSERT INTO images(image_name, category_id, description) VALUES
                                       (:image_name, :category_id, :description)");

        $this->bind(":image_name", $image_name);
        $this->bind(":category_id", $category_id);
        $this->bind(":description", $description);

        $this->execute();

    }


    public function createEvent($image_name, $category_id, $description, $heading)
    {

        $this->query("INSERT INTO images(image_name, category_id, description, heading) VALUES
                                       (:image_name, :category_id, :description, :heading)");

        $this->bind(":image_name", $image_name);
        $this->bind(":category_id", $category_id);
        $this->bind(":description", $description);
        $this->bind(":heading", $heading);

        $this->execute();

    }

    public function editImage($image_name, $description, $id)
    {
        $this->query("UPDATE images SET image_name = :image_name,
                            description = :description  WHERE id = :id ");

        $this->bind(":image_name", $image_name);
        $this->bind(":description", $description);
        $this->bind(":id", $id);

        $this->execute();
    }


    public function editCoverImage($image_name, $description, $id)
    {
        $this->query("UPDATE images SET image_name = :image_name,
                            description = :description  WHERE id = :id ");

        $this->bind(":image_name", $image_name);
        $this->bind(":description", $description);
        $this->bind(":id", $id);

        $this->execute();
    }

    public function editOtherImage($image_name, $id)
    {
        $this->query("UPDATE images SET image_name = :image_name 
                              WHERE id = :id ");

        $this->bind(":image_name", $image_name);
        $this->bind(":id", $id);

        $this->execute();
    }





    public function deleteImage($id)
    {
        $this->query("DELETE FROM images WHERE id = :id");
        $this->bind(":id", $id);

        $this->execute();
    }

    public function findAll($id)
    {
        $this->query("SELECT * FROM ".$this->table." WHERE category_id = :id");
        $this->bind(":id",$id);
        return $this->resultSet();

    }




}