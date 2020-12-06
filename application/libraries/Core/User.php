<?php

class User
{
    /**
     * @var integer
     */
    private $userId;
    
    /**
     * $name string
     */
    private $name;

    /**
     * $email string
     */
    private $email;

    /**
     * $password string
     */
    private $password;

    /**
     * @var Items[]
     */
    private $cartItems;

    /**
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $name
     * @return User
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
     * @return Item[]
     */
    public function getCartItems()
    {
        return $this->cartItems;
    }

    /**
     * @param Item[] $cartItems
     * @return User
     */
    public function setCartItems($cartItems)
    {
        $this->cartItems = $cartItems;
        return $this;
    }

    /**
     * @param integer $userId
     * @return User
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }
}