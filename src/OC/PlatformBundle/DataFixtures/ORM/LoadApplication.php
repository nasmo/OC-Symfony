<?php
// src/OC/PlatformBundle/DataFixtures/ORM/LoadSkill.php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Application;

class LoadApplication implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    // Liste des noms de compétences à ajouter
    $repository=$manager->getRepository('OCPlatformBundle:Advert');
    $adverts=$repository->findAll();
    foreach ($adverts as $advert) {
        $application=new Application();
        $application->setAuthor("candidat@siteweb.com");
        $application->setContent("Texte de la candidature");
        $application->setAdvert($advert);
        $application->setDate( new \Datetime(date('Y-m-d', strtotime('-15 days'))));
        $manager->persist($application);
    }
    $manager->flush();
    
    foreach ($adverts as $advert) {
        $application=new Application();
        $application->setAuthor("candidat@siteweb.com");
        $application->setContent("Texte de la candidature");
        $application->setAdvert($advert);
        $application->setDate( new \Datetime(date('Y-m-d', strtotime('-20 days'))));
        $manager->persist($application);
    }
    $manager->flush();
    
    foreach ($adverts as $advert) {
        $application=new Application();
        $application->setAuthor("candidat@siteweb.com");
        $application->setContent("Texte de la candidature");
        $application->setAdvert($advert);
        $application->setDate( new \Datetime(date('Y-m-d', strtotime('-30 days'))));
        $manager->persist($application);
    }
    $manager->flush();
  }
}
