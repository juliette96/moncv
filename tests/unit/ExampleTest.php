<?php

use AppBundle\Entity\Loisirs;
use AppBundle\Entity\Formation;
use AppBundle\Entity\Experience;

class ExampleTest extends \Codeception\Test\Unit
{

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $rouge = new Loisirs();
        $rouge->setName("Rire");
        $this->assertEquals($rouge->getName(), "Rire");
        $rose = new Formation();
        $rose->setName("pirouette");
        $rose->setDateDebut("1549");
        $rose->setDateFin("578");
        $rose->setLieu("ilinawief");
        $this->assertEquals($rose->getName(), "pirouette");
        $this->assertEquals($rose->getDateDebut(), "1549");
        $this->assertEquals($rose->getDateFin(), "578");
        $this->assertEquals($rose->getLieu(), "ilinawief");        
        $violet = new Experience();
        $violet->setName("chouquette");
        $violet->setDateDebut("chocolat");
        $violet->setDateFin("caramel");
        $violet->setLieu("chantilly");
        $this->assertEquals($violet->getName(), "chouquette");
        $this->assertEquals($violet->getDateDebut(), "chocolat");
        $this->assertEquals($violet->getDateFin(), "caramel");
        $this->assertEquals($violet->getLieu(), "chantilly");
    }
}