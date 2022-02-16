<?php 
class Product 
{
    protected $id;
    protected $productName;
    protected $productPrice;
    protected $productType;
    protected $productBrand;
    protected $productDescription;


    public function __construct($productName, $productType, $productPrice)
    {
        $this->productName = $productName;
        $this->productType = $productType;
        $this->productPrice = $productPrice;
    }
    

    /**
     * Get the value of productName
     */ 
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set the value of productName
     *
     * 
     */ 
    public function setProductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * Get the value of productPrice
     */ 
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Set the value of productPrice
     *
     * 
     */ 
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Get the value of productType
     */ 
    public function getProductType()
    {
        return $this->productType;
    }

    /**
     * Set the value of productType
     *
     * 
     */ 
    public function setProductType($productType)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * Get the value of productBrand
     */ 
    public function getProductBrand()
    {
        return $this->productBrand;
    }

    /**
     * Set the value of productBrand
     *
     * 
     */ 
    public function setProductBrand($productBrand)
    {
        $this->productBrand = $productBrand;

        return $this;
    }

    /**
     * Get the value of productDescription
     */ 
    public function getProductDescription()
    {
        return $this->productDescription;
    }

    /**
     * Set the value of productDescription
     *
     */ 
    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;

        return $this;
    }
}



?>