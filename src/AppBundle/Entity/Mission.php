<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mission
 *
 * @ORM\Table(name="mission")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MissionRepository")
 */
class Mission
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
     * @var string
     *
     * @ORM\Column(name="ou", type="string", length=255)
     */
    private $ou;

    /**
     * @var string
     *
     * @ORM\Column(name="quoi", type="string", length=255)
     */
    private $quoi;

    /**
     * @var string
     *
     * @ORM\Column(name="en", type="string", length=255)
     */
    private $en;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @var float
     *
     * @ORM\Column(name="departlo", type="float")
     */
    private $departlo;

    /**
     * @var float
     *
     * @ORM\Column(name="departla", type="float")
     */
    private $departla;

    /**
     * @var float
     *
     * @ORM\Column(name="arriveelo", type="float")
     */
    private $arriveelo;

    /**
     * @var float
     *
     * @ORM\Column(name="arriveela", type="float")
     */
    private $arriveela;


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
     * Set ou
     *
     * @param string $ou
     *
     * @return Mission
     */
    public function setOu($ou)
    {
        $this->ou = $ou;

        return $this;
    }

    /**
     * Get ou
     *
     * @return string
     */
    public function getOu()
    {
        return $this->ou;
    }

    /**
     * Set quoi
     *
     * @param string $quoi
     *
     * @return Mission
     */
    public function setQuoi($quoi)
    {
        $this->quoi = $quoi;

        return $this;
    }

    /**
     * Get quoi
     *
     * @return string
     */
    public function getQuoi()
    {
        return $this->quoi;
    }

    /**
     * Set en
     *
     * @param string $en
     *
     * @return Mission
     */
    public function setEn($en)
    {
        $this->en = $en;

        return $this;
    }

    /**
     * Get en
     *
     * @return string
     */
    public function getEn()
    {
        return $this->en;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Mission
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set departlo
     *
     * @param float $departlo
     *
     * @return Mission
     */
    public function setDepartlo($departlo)
    {
        $this->departlo = $departlo;

        return $this;
    }

    /**
     * Get departlo
     *
     * @return float
     */
    public function getDepartlo()
    {
        return $this->departlo;
    }

    /**
     * Set departla
     *
     * @param float $departla
     *
     * @return Mission
     */
    public function setDepartla($departla)
    {
        $this->departla = $departla;

        return $this;
    }

    /**
     * Get departla
     *
     * @return float
     */
    public function getDepartla()
    {
        return $this->departla;
    }

    /**
     * Set arriveelo
     *
     * @param float $arriveelo
     *
     * @return Mission
     */
    public function setArriveelo($arriveelo)
    {
        $this->arriveelo = $arriveelo;

        return $this;
    }

    /**
     * Get arriveelo
     *
     * @return float
     */
    public function getArriveelo()
    {
        return $this->arriveelo;
    }

    /**
     * Set arriveela
     *
     * @param float $arriveela
     *
     * @return Mission
     */
    public function setArriveela($arriveela)
    {
        $this->arriveela = $arriveela;

        return $this;
    }

    /**
     * Get arriveela
     *
     * @return float
     */
    public function getArriveela()
    {
        return $this->arriveela;
    }
}

