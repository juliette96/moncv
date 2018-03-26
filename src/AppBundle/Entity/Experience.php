<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ApiResource
 * @ORM\Entity
 * @ORM\Table(name="Experience")
 **/
class Experience
{
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
    /**
     * @ORM\Column(type="string")
    **/
    private $dateDebut;
    /**
     * @ORM\Column(type="string")
    **/
    private $dateFin;
    /**
     * @ORM\Column(type="string")
    **/
    private $lieu;
    
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
    public function getDateDebut()
    {
        return $this->dateDebut;
    }
    public function setDateDebut($new)
    {
        $this->dateDebut=$new;
    }
    public function getDateFin()
    {
        return $this->dateFin;
    }
    public function setDateFin($new)
    {
        $this->dateFin=$new;
    }
    public function getLieu()
    {
        return $this->lieu;
    }
    public function setLieu($new)
    {
        $this->lieu=$new;
    }
}
