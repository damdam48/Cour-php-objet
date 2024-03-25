<?php

namespace App\Banque;

use App\Client\Compte as CompteClient;


class CompteEpargne extends Compte
{
    public function __construct(
        CompteClient $client,
        string $iban,
        float $solde = 100,
        private float $interet = 0.07
    ) {
        parent::__construct($client, $iban, $solde);
    }


    public function verserinteret(): self
    {
        if ($this->solde > 0) {
            $this->solde += $this->solde * $this->interet;
        }
        return $this;
    }


    /**
     * Get the value of interet
     *
     * @return float
     */
    public function getInteret(): float
    {
        return $this->interet;
    }

    /**
     * Set the value of interet
     *
     * @param float $interet
     *
     * @return self
     */
    public function setInteret(float $interet): self
    {
        $this->interet = $interet;

        return $this;
    }
}
