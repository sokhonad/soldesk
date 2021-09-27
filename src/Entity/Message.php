<?php

namespace App\Entity;

use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessageRepository::class)
 */
class Message
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $texte;

    /**
     * @ORM\OneToOne(targetEntity=Ticket::class, mappedBy="message", cascade={"persist", "remove"})
     */
    private $ticketds;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTexte(): ?string
    {
        return $this->texte;
    }

    public function setTexte(?string $texte): self
    {
        $this->texte = $texte;

        return $this;
    }

    public function getTicketds(): ?Ticket
    {
        return $this->ticketds;
    }

    public function setTicketds(?Ticket $ticketds): self
    {
        // unset the owning side of the relation if necessary
        if ($ticketds === null && $this->ticketds !== null) {
            $this->ticketds->setMessage(null);
        }

        // set the owning side of the relation if necessary
        if ($ticketds !== null && $ticketds->getMessage() !== $this) {
            $ticketds->setMessage($this);
        }

        $this->ticketds = $ticketds;

        return $this;
    }
}
