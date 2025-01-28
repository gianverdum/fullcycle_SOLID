<?php

class Course
{
    private $name;
    private $category;
    private $description;

    public function connection()
    {
        $pdo = new PDO();
        return $pdo;
    }

    public function createCategory()
    {
        $pdo = $this->connection()->insert($this->category);
    }

    public function createCourse()
    {
        $pdo = $this->connection()->insert($this->name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }
}
