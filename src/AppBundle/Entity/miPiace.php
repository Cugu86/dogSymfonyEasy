<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * miPiace
 *
 * @ORM\Table(name="mi_piace")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\miPiaceRepository")
 */
class miPiace
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="miPiaceDate", type="datetime")
     */
    private $miPiaceDate;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set miPiaceDate
     *
     * @param \DateTime $miPiaceDate
     *
     * @return miPiace
     */
    public function setMiPiaceDate($miPiaceDate)
    {
        $this->miPiaceDate = $miPiaceDate;

        return $this;
    }

    /**
     * Get miPiaceDate
     *
     * @return \DateTime
     */
    public function getMiPiaceDate()
    {
        return $this->miPiaceDate;
    }
}
