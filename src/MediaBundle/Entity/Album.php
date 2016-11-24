<?php

namespace MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 */
class Album
{

    public function __toString()
    {
        return strval($this->getTitreAlbum());
    }


    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titreAlbum;

    /**
     * @var string
     */
    private $artiste;

    /**
     * @var string
     */
    private $genre;

    /**
     * @var string
     */
    private $support;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titreAlbum
     *
     * @param string $titreAlbum
     * @return Album
     */
    public function setTitreAlbum($titreAlbum)
    {
        $this->titreAlbum = $titreAlbum;

        return $this;
    }

    /**
     * Get titreAlbum
     *
     * @return string 
     */
    public function getTitreAlbum()
    {
        return $this->titreAlbum;
    }

    /**
     * Set artiste
     *
     * @param string $artiste
     * @return Album
     */
    public function setArtiste($artiste)
    {
        $this->artiste = $artiste;

        return $this;
    }

    /**
     * Get artiste
     *
     * @return string 
     */
    public function getArtiste()
    {
        return $this->artiste;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Album
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set support
     *
     * @param string $support
     * @return Album
     */
    public function setSupport($support)
    {
        $this->support = $support;

        return $this;
    }

    /**
     * Get support
     *
     * @return string 
     */
    public function getSupport()
    {
        return $this->support;
    }
    /**
     * @var \MediaBundle\Entity\Commentaire
     */
    private $commentaires;


    /**
     * Set commentaires
     *
     * @param \MediaBundle\Entity\Commentaire $commentaires
     * @return Album
     */
    public function setCommentaires(\MediaBundle\Entity\Commentaire $commentaires = null)
    {
        $this->commentaires = $commentaires;

        return $this;
    }

    /**
     * Get commentaires
     *
     * @return \MediaBundle\Entity\Commentaire 
     */
    public function getCommentaires()
    {
        return $this->commentaires;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->commentaires = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add commentaires
     *
     * @param \MediaBundle\Entity\Commentaire $commentaires
     * @return Album
     */
    public function addCommentaire(\MediaBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires[] = $commentaires;

        return $this;
    }

    /**
     * Remove commentaires
     *
     * @param \MediaBundle\Entity\Commentaire $commentaires
     */
    public function removeCommentaire(\MediaBundle\Entity\Commentaire $commentaires)
    {
        $this->commentaires->removeElement($commentaires);
    }
}
