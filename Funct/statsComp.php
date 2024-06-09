<?php



class Objet {

    //=====================================================
    //GLOBAL
    //=====================================================

    private string $nom;

    private string $image;

    //=====================================================
    //INFO
    //=====================================================
    private DateTime $dateSortie;

    private string $description;

    private int $price;

    private string $passif;

    private string $actif;

    private bool $onHit;

    private bool $bleed;

    //=====================================================
    //STATS
    //=====================================================
    private array $stats = [
        "ad" => 0,
        "ap" => 0,
        "mana" => 0,
        "manaRegen" => 0,
        "healthRegen" => 0,
        "lethalite" => 0,
        "armor" => 0,
        "resistanceMagic" => 0,
        "abilityHaste" => 0,
        "crit" => 0,
        "critDamage" => 0,
        "health" => 0,
        "attackSpeed" => 0,
        "magicPenFlat" => 0,
        "lifeSteal" => 0,
        "omnivamp" => 0,
        "magicPenPercent" => 0,
        "armorPen" => 0,
        "moveSpeed" => 0,
        "healthShield" => 0,
        "tenacity" => 0,
        "goldGenerator" => 0,
    ];

   

    public function __construct(
        string $nom,
        string $image,
        string $dateSortie,
        string $description,
        int $price,
        ?string $passif = null,
        ?string $actif = null,
        ?bool $onHit = null,
        ?bool $bleed = null,
        array $stats = []
    ) {
        $this->nom = $nom;
        $this->image = $image;
        $this->dateSortie = new DateTime($dateSortie);
        $this->description = $description;
        $this->price = $price;
        $this->passif = $passif;
        $this->actif = $actif;
        $this->onHit = $onHit;
        $this->bleed = $bleed;

        // Mettre à jour les stats avec les valeurs fournies
        foreach ($stats as $key => $value) {
            if (array_key_exists($key, $this->stats)) {
                $this->stats[$key] = $value;
            }
        }
    }

    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of image
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of dateSortie
     *
     * @return DateTime
     */
    public function getDateSortie(): DateTime
    {
        return $this->dateSortie;
    }

    /**
     * Set the value of dateSortie
     *
     * @param DateTime $dateSortie
     *
     * @return self
     */
    public function setDateSortie(DateTime $dateSortie): self
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of price
     *
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @param int $price
     *
     * @return self
     */
    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of passif
     *
     * @return string
     */
    public function getPassif(): string
    {
        return $this->passif;
    }

    /**
     * Set the value of passif
     *
     * @param string $passif
     *
     * @return self
     */
    public function setPassif(string $passif): self
    {
        $this->passif = $passif;

        return $this;
    }

    /**
     * Get the value of actif
     *
     * @return string
     */
    public function getActif(): string
    {
        return $this->actif;
    }

    /**
     * Set the value of actif
     *
     * @param string $actif
     *
     * @return self
     */
    public function setActif(string $actif): self
    {
        $this->actif = $actif;

        return $this;
    }

    /**
     * Get the value of onHit
     *
     * @return bool
     */
    public function getOnHit(): bool
    {
        return $this->onHit;
    }

    /**
     * Set the value of onHit
     *
     * @param bool $onHit
     *
     * @return self
     */
    public function setOnHit(bool $onHit): self
    {
        $this->onHit = $onHit;

        return $this;
    }

    /**
     * Get the value of bleed
     *
     * @return bool
     */
    public function getBleed(): bool
    {
        return $this->bleed;
    }

    /**
     * Set the value of bleed
     *
     * @param bool $bleed
     *
     * @return self
     */
    public function setBleed(bool $bleed): self
    {
        $this->bleed = $bleed;

        return $this;
    }

    // Méthodes magiques pour les getters et setters
    public function __get($property) {
        if (array_key_exists($property, $this->stats)) {
            return $this->stats[$property];
        }
        return $this->$property ?? null;
    }
    
    
    public function __set($property, $value) {
        if (array_key_exists($property, $this->stats)) {
            $this->stats[$property] = $value;
        } else {
             $this->$property = $value;
        }
    }

   
    public function printTabHTML(){
        $retour = "<tr>";
        $retour .= "<td>$this</td> <td>".$this->dateSortie->format("d-m-Y")."</td> <td>$this->description</td> <td>$this->price</td> <td>$this->passif</td> <td>$this->actif</td> <td>$this->onHit</td> <td>$this->bleed</td>";
        foreach ($this->stats as $key => $value) {
            $retour .= "<td>$value</td>";
        }
        $retour .= "</tr>";
        return $retour;
    }


    public function __toString()
    {
        return "$this->nom";
    }
}


?>