<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadSkill.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;

class LoadAdvert implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Liste des noms de compétences à ajouter
    $advert1=new Advert();
    $advert1->setAuthor("Fred@site.com");
    $advert1->setTitle("1ère annonce");
    $advert1->setContent("Contenu de la première annonce");
    $advert1->setDate( new \Datetime(date('Y-m-d', strtotime('-15 days'))));
    
    $advert2=new Advert();
    $advert2->setAuthor("Alex@site.com");
    $advert2->setTitle("2è annonce");
    $advert2->setContent("Contenu de la deuxième annonce");
    $advert2->setDate( new \Datetime(date('Y-m-d', strtotime('-20 days'))));
    
    $advert3=new Advert();
    $advert3->setAuthor("John.Doe@site.com");
    $advert3->setTitle("3è annonce");
    $advert3->setContent("Contenu de la troisième annonce");
    $advert3->setDate( new \Datetime(date('Y-m-d', strtotime('-30 days'))));
        
    $manager->persist($advert1);
    $manager->persist($advert2);
    $manager->persist($advert3);
    $manager->flush();

  }
}
