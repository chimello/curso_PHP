<div class="titulo">Interface PHP</div>

<?php

    interface Animal {
        function respirar();
    }

    interface Mamifero {
        function mamar();
    }

    interface Canino extends Animal, Mamifero {
        function latir(): string;
    }

    interface Felino {
        function correr();
    }

    class Cachorro implements Canino {
        function respirar() {
            return "Cachorro Respira";
        }
        function latir(): string
        {
            return "Au Au!";
        }
        function mamar()
        {
            return "Mamar!";
        }
        function correr() {
            echo "Vrunnnn!";
        }
    }

    $animal = new Cachorro();
    echo $animal->respirar();
    echo '<br>';
    echo $animal->latir();
    echo '<br>';
    echo $animal->mamar();
    echo '<br>';

    echo "Fim!";
    echo "<br>";

    var_dump($animal instanceof Cachorro);
    echo "<br>";
    var_dump($animal instanceof Canino);
    echo "<br>";
    var_dump($animal instanceof Mamifero);
    echo "<br>";
    var_dump($animal instanceof Animal);
    echo "<br>";
    var_dump($animal instanceof Felino);
    
?>