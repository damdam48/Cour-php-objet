<?php

namespace App\Banque;

use App\Client\Compte as CompteClient;

class CompteCourant extends Compte
{
    public function __construct(
        CompteClient $client,
        string $iban,
        string $solde,
        private int $decouvert = 250
    ) {
        parent::__construct($client, $iban, $solde);
    }

    public function withdraw(int $montant): self
    {
        if ($montant > 0 && $montant <= ($this->solde + $this->decouvert)) {
            $this->solde -= $montant;
        }
        return $this;
    }

    /**
     * Get the value of decouvert
     *
     * @return int
     */
    public function getDecouvert(): int
    {
        return $this->decouvert;
    }

    /**
     * Set the value of decouvert
     *
     * @param int $decouvert
     *
     * @return self
     */
    public function setDecouvert(int $decouvert): self
    {
        $this->decouvert = $decouvert;

        return $this;
    }
}
