<?php
class Product
{
    private $id;
    private ProductCategory $category;
    private string $name;
    private string $discription;
    private float $price;

    public function __construct($id,ProductCategory $category, $name, $discription, $price)
    {
        $this->id = $id;
        $this->category = $category;
        $this->name = $name;
        $this->discription = $discription;
        $this->price = $price;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of category
     */
    public function getcategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */
    public function setcategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of discription
     */
    public function getDiscription()
    {
        return $this->discription;
    }

    /**
     * Set the value of discription
     *
     * @return  self
     */
    public function setDiscription($discription)
    {
        $this->discription = $discription;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }
}
