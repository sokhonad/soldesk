<?php

namespace App\Entity;

use App\Repository\DomaineRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DomaineRepository::class)
 */
class Domaine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\OneToMany(targetEntity=Ticket::class, mappedBy="domaine",orphanRemoval=true)
     */
    private $tickets;

    /**
     * @ORM\OneToMany(targetEntity=SDomaine::class, mappedBy="domaine", orphanRemoval=true)
     */
    private $sDomaine;

    public function __construct()
    {
        $this->tickets = new ArrayCollection();
        $this->sDomaine = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * @return Collection|Ticket[]
     */
    public function getTickets(): Collection
    {
        return $this->tickets;
    }

    public function addTicket(Ticket $ticket): self
    {
        if (!$this->tickets->contains($ticket)) {
            $this->tickets[] = $ticket;
            $ticket->setDomaine($this);
        }

        return $this;
    }

    public function removeTicket(Ticket $ticket): self
    {
        if ($this->tickets->removeElement($ticket)) {
            // set the owning side to null (unless already changed)
            if ($ticket->getDomaine() === $this) {
                $ticket->setDomaine(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SDomaine[]
     */
    public function getSDomaine(): Collection
    {
        return $this->sDomaine;
    }

    public function addSDomaine(SDomaine $sDomaine): self
    {
        if (!$this->sDomaine->contains($sDomaine)) {
            $this->sDomaine[] = $sDomaine;
            $sDomaine->setDomaine($this);
        }

        return $this;
    }

    public function removeSDomaine(SDomaine $sDomaine): self
    {
        if ($this->sDomaine->removeElement($sDomaine)) {
            // set the owning side to null (unless already changed)
            if ($sDomaine->getDomaine() === $this) {
                $sDomaine->setDomaine(null);
            }
        }

        return $this;
    }
}
