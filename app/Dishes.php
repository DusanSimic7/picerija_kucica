<?php


class Dishes extends Database
{

    protected $table = "dishes";


    public function createDish($category_id, $name, $ingredients, $price)
    {

        $this->query("INSERT INTO dishes(category_id, name, ingredients, price) VALUES
                                       (:category_id, :name, :ingredients, :price)");

        $this->bind(":category_id", $category_id);
        $this->bind(":name", $name);
        $this->bind(":ingredients", $ingredients);
        $this->bind(":price", $price);


        $this->execute();

    }

    public function editDishes($name, $ingredients, $price , $id)
    {
        $this->query("UPDATE dishes SET  name = :name,
                            ingredients = :ingredients, price = :price WHERE id = :id ");

        $this->bind(":name", $name);
        $this->bind(":ingredients", $ingredients);
        $this->bind(":price", $price);
        $this->bind(":id", $id);


        $this->execute();

    }

    public function deleteDish($id)
    {
        $this->query("DELETE FROM dishes WHERE id = :id");
        $this->bind(":id", $id);

        $this->execute();

    }


    public function jelaOdKategorije($id)
    {
        $this->query("SELECT * FROM dishes WHERE category_id = :id");
        $this->bind(":id", $id);
        return $this->resultSet();
    }
}