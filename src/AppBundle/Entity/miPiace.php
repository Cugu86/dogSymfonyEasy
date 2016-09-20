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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="miPiace")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $users;

     /**
     * @ORM\ManyToOne(targetEntity="Photo", inversedBy="miPiace")
     * @ORM\JoinColumn(name="photo_id", referencedColumnName="id")
     */
    private $photos;

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

    /**
     * Set users
     *
     * @param \AppBundle\Entity\User $users
     *
     * @return miPiace
     */
    public function setUsers(\AppBundle\Entity\User $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \AppBundle\Entity\User
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set photos
     *
     * @param \AppBundle\Entity\Photo $photos
     *
     * @return miPiace
     */
    public function setPhotos(\AppBundle\Entity\Photo $photos = null)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * Get photos
     *
     * @return \AppBundle\Entity\Photo
     */
    public function getPhotos()
    {
        return $this->photos;
    }
}
