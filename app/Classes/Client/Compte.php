<?php

namespace App\Client;

class Compte
{
        public function __construct(
                private string $firstName,
                private string $lastName,
                private string $email,
        ) {
        }



        /**
         * Get the value of firstName
         */
        public function getFirstName()
        {
                return $this->firstName;
        }

        /**
         * Set the value of firstName
         */
        public function setFirstName($firstName): self
        {
                $this->firstName = $firstName;

                return $this;
        }

        /**
         * Get the value of lastName
         */
        public function getLastName()
        {
                return $this->lastName;
        }

        /**
         * Set the value of lastName
         */
        public function setLastName($lastName): self
        {
                $this->lastName = $lastName;

                return $this;
        }

        /**
         * Get the value of email
         */
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         */
        public function setEmail($email): self
        {
                $this->email = $email;

                return $this;
        }
}
