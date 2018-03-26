<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity @ORM\Table(name="Loisirs")
 **/
class Loisirs {
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue
     **/
    private $id;
    /**
     * @ORM\Column(type="string")
    **/
    private $name;
    
    public function getId()
    {
        return $this->id;
    }
    public function setId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($new)
    {
        $this->name=$new;
    }
}