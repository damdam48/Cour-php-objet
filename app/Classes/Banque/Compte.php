<?php

namespace App\Banque;

use App\Client\Compte as CompteClient;

abstract class Compte
{
    // Syntax php 7
    // public ?string $client = null;
    // public ?string $iban = null;
    // public float $solde = 0;

    // public function __construct(string $client, string $iban, float $solde = 0 )
    // {
    //     $this->client = $client;
    //     $this->iban = $iban;
    //     $this->solde = $solde;
    // }

    // Syntax php 8
    public function __construct(
        protected CompteClient $client,
        protected string $iban,
        protected float $solde = 0
    ) {
    }

    public function __toString(): string
    {
        return "vous visualisez le compte de {$this->client->getFirstName()}, avec un solde de {$this->solde}€";
    }

    public function withdraw(int $montant): self
    {
        if ($montant > 0 && $montant <= $this->solde) {
            $this->solde -= $montant;
        }


        return $this;
    }



    public function getClient(): CompteClient
    {
        return $this->client;
    }

    public function setClient(CompteClient $client): self
    {
        $this->client = $client;

        return $this;
    }



    /**
     * Get the value of iban
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set the value of iban
     */
    public function setIban($iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get the value of solde
     *
     * @return float
     */
    public function getSolde(): float
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     *
     * @param float $solde
     *
     * @return self
     */
    public function setSolde(float $solde): self
    {
        $this->solde = $solde;

        return $this;
    }
}
