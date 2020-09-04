<?php


class Beverage extends Database
{
    protected $table = "beverages";

    public function createBeverage($category_id, $name, $ingredients, $price)
    {

        $this->query("INSERT INTO beverages(category_id, name, ingredients, price) VALUES
                                       (:category_id, :name, :ingredients, :price)");

        $this->bind(":category_id", $category_id);
        $this->bind(":name", $name);
        $this->bind(":ingredients", $ingredients);
        $this->bind(":price", $price);


        $this->execute();

    }

    public function editBeverage($name, $ingredients, $price , $id)
    {
        $this->query("UPDATE beverages SET  name = :name,
                            ingredients = :ingredients, price = :price WHERE id = :id ");

        $this->bind(":name", $name);
        $this->bind(":ingredients", $ingredients);
        $this->bind(":price", $price);
        $this->bind(":id", $id);


        $this->execute();

    }

    public function deleteBeverage($id)
    {
        $this->query("DELETE FROM beverages WHERE id = :id");
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