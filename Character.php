<?php

class Character {
    
    // Attributs / propriétés
    private $name;
    private $hp;
    private $def;
    private $atk;
    private $xp;
    
    //Constante
    const death = 'valeur hp à 0';
    
    //Constructeur
    public function __construct( string $newName, int $newHp, int $newDef, int $newAtk, int $newXp){
        $this->name = $newName;
        $this->hp = $newHp;
        $this->def = $newDef;
        $this->atk = $newAtk;
        $this->xp = $newXp;
    
}
}
?>