<?php

class Item
{
     /**
     * @var interger
     */
    private $itemId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @param string $name
     * @return Item
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $description
     * @return Item
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return Item
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return integer
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * @param integer $itemId
     * @return $Item
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
        return $this;
    }
}