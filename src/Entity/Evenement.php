<?php

namespace App\Entity;

use App\Repository\EvenementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: EvenementRepository::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: "id_evenement", type: "integer")]
    

    private ?int $id_evenement = null;

    
    #[Assert\NotBlank(message: "Ce champ ne peut pas être vide")]
    #[Assert\Length(
        min: 3,
        minMessage: 'Le nom doit contenir au moins {{ limit }} caractères'
    )]
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[Assert\NotBlank(message:"Ce champ ne peut pas être vide")]
    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[Assert\NotBlank(message:"Ce champ ne peut pas être vide")]
    #[ORM\Column(length: 255)]
    private ?string $categorie = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\GreaterThanOrEqual( value: "today",
    message: "La date ne peut pas être dans le passé.")]
    private ?\DateTimeInterface $date = null;
    

    #[ORM\Column]
    private ?int $prix = null;

    #[ORM\Column(length: 255)]
    private ?string $CheminImage = null;
    


    private $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    /**
     * @return Collection|ReserverEvent[]
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }
  


    public function getId(): ?int
    {
        return $this->id_evenement;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCheminImage(): ?string
    {
        return $this->CheminImage;
    }

    public function setCheminImage(string $CheminImage): static
    {
        $this->CheminImage = $CheminImage;

        return $this;
    }
    

   
    // Dans votre entité Evenement


// Dans votre entité Evenement

public function getTempsRestant(): ?array
{
    // Vérifier si la date de l'événement est dans le passé
    if ($this->date < new \DateTime()) {
        // L'événement est passé, retourner null ou un message indiquant qu'il est terminé
        return null; // Ou retourner un tableau vide ou un message spécifique
    }

    // Calculer la différence entre la date actuelle et la date de l'événement
    $diff = $this->date->diff(new \DateTime());
    return [
        'jours' => $diff->format('%a'),
        'heures' => $diff->format('%h'),
        'minutes' => $diff->format('%i'),
    ];
}


}