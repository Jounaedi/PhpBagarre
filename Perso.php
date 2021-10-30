<?pHP

abstract class Perso
{
    private $name = 'Jorge';
    private $hp;
    private $attack;
    private $defense;
    
    private function setNAME($name)
    {
        return $this->name;
    }
    private function setHP($hp)
    {
        return $this->hp;
    }

    private function setATTACK($attack)
    {
        return $this->attack;
    }

    private function setDEFENSE($defense)
    {
        return $this->defense;
    }



    private function getNAME()
    {
        return $this->name;
    }
    private function getHP()
    {
        return $this->hp;
    }

    private function getATTACK()
    {
        return $this->attack;
    }

    private function getDEFENSE()
    {
        return $this->defense;
    }



    private function __toString()
    {
        return "Je sui {$this->name}";
    }

    private function __construct(string $name)
    {
        $this->name = ucfirst(strtolower($name));
    }

    private function attack(Perso $target)
    {
        $target->hp -= $this->attack - $target->defense;
        echo "{$target->name} a attaqué {$this->name},il possède {$target->getHP()}!";
    }
}

class Mage extends Perso
{
    private $magie = 75;

    
    private function toString()
    {
        return "Je suis {$this->name} le mage.";
    }

    
    private function __construct()
    {
        $this->attack = rand(5,10)
        $this->defense = 0;
    }

    private function Stun(Perso $target)
    {
        $target->pv -= $this->magie - $target->def;
        echo "{$target->name} a lancé un sort {$this->name},il n'a plus que {$target->getHP()}";
    }
}



class Warrior extends Perso
{
    private $shield = 50;

    
    private function __toString()
    {
        return "Je suis {$this->name} le warrior.";
    }

    
    private function __construct()
    {
        $this->attack = rand(20,40);
        $this->defense = rand(10,19);
    }

    
    private function Hit(Perso $target)
    {
        $target->pv -= $this->physique - $target->def;
        echo "{$target->name} a frappé {$this->name}, il n'a plus que {$target->pv} ❤️!";
    }
}
 