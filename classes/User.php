<?php 
require_once __DIR__ . '/Product.php';
class User extends Product
{
    protected $userName;
    protected $userLastName;
    protected $userEmail;
    protected $userPaymentMethod;
    public function __construct($userName, $userLastName) {
        $this->userName = $userName;
        $this->userLastName = $userLastName;
    }

    

    /**
     * Get the value of userName
     */ 
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Set the value of userName
     *
     * 
     */ 
    public function setUserName($userName)
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * Get the value of userLastName
     */ 
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    /**
     * Set the value of userLastName
     *
     * 
     */ 
    public function setUserLastName($userLastName)
    {
        $this->userLastName = $userLastName;

        return $this;
    }

    /**
     * Get the value of userEmail
     */ 
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Set the value of userEmail
     *
     * 
     */ 
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get the value of userPaymentMethod
     */ 
    public function getUserPaymentMethod()
    {
        return $this->userPaymentMethod;
    }

    /**
     * Set the value of userPaymentMethod
     *
     * 
     */ 
    public function setUserPaymentMethod($userPaymentMethod)
    {
        $this->userPaymentMethod = $userPaymentMethod;

        return $this;
    }
}



?>