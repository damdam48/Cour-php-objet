<?php

namespace App;

class Autoloader
{
    public static function register(): void
    {
        spl_autoload_register(
            function (string $class): void {
                // on enleve App\\
                $class = str_replace('App\\', '', $class);

                // on enleve les \ par /
                $class = str_replace('\\', '/', $class);

                // on ajoute le chemin absolue du dossier classes et l'extension .php
                $file = __DIR__ . '/' . $class . '.php';
                
                if (file_exists($file)) {
                    require_once $file;
                }
            }
        );
    }
}
