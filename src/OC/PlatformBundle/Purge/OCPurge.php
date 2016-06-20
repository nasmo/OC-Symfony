<?php
// src/OC/PlatformBundle/Antispam/OCPurge.php

namespace OC\PlatformBundle\Purge;

class OCPurge
{
  private $days;

  public function __construct($days)
  {
    $this->days    = $days;
  }

  /**
   * Vérifie si le texte est un spam ou non
   *
   * @param string $text
   * @return bool
   */
  public function doPurge($days)
  {
    return $days > 0 ;
  }
}
