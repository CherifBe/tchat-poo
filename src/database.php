<?php

class Database
{
    private static $instance = null;
    /**
     * On utilise un singleton pour éviter d'instancier plusieurs pour un même utilisateur
     * @return mysqli
     */
    public static function getMySQLI(): mysqli
    {
        if(self::$instance === null){
            self::$instance = new mysqli('localhost', 'lamp', 'lamp', 'lamp');
        }
        return self::$instance;
    }
}



