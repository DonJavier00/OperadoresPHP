<?php   
        /*
        // Para imprimir se usa el comando echo
        echo "Hola mundo <br>";
        // Para definir una variable se usa $ seguido del nombre de la variable
        $nombre = "Javier Andres Sanchez <br>";
        echo "Mi nombre es " . $nombre;
        // PHP nos permite usar enteros y decimales 
        $numero = 3.1416;
        echo " El numero es : $numero <br>"; 
        // Para definir una cadena o string se coloca el texto en comillas simples o dobles
        $string = 'Hola nuevamente <br>';
        echo " La cadena almacenada es: $string <br>";
        // El true en un dato booleano vale 1
        $bool = true;
        echo "$bool <br>";
        */



        //Pruebas de la exposicion 
        //PRECEDENCIA DE OPERADORES

        $a = 15+20*3;
        echo $a;
        echo "<br>";
        //b)
        $a = (15+20)*3;
        echo $a;
        echo "<br>";

        //OPERADORES ARITMETICOS
        //Suma de 2 numeros

        $a = 25;
        $b = 25;

        $suma = $a + $b;

        echo "La suma de las variables es de: $suma <br>";

        //Resta de 2 numeros

        $a = 40;
        $b = 20;

        $resta = $a - $b;

        echo "La resta de las variables es de: $resta <br>";

        //Division de 2 numeros

        
        $a = 20;
        $b = 2;

        $division = $a / $b;

        echo "La division de las variables es de: $division <br>";

        //Modulo de 2 numeros

        
        $a = 25;
        $b = 5;

        $modulo = $b % $a;

        echo "El modulo de las variables es de: $modulo <br>";

        //Exponenciacion

        $a = 2;
        $b = 4;
        $exp = $a ** $b;

        echo "El resultado de la exp de las variables es de: $exp <br>";

        //Multiplicacion de 2 numeros

        $a = 8;
        $b = 8;
        $multiplicacion = $a * $b;

        echo "El resultado de la multiplicacion es: $multiplicacion <br>";

        //Si queremos cambiar un numero a negativo usamos lo siguiente

        $a = 5;
        $b = 5;
        $multiplicacion = $a * -$b;

        echo "El resultado de la multiplicacion es: $multiplicacion <br>";

        //Ejemplo de conversion de int a flotante 

        $a = 1.5;
        +$a;
        
        echo "El resultado de la conversion es: $a <br>";


        // 2. OPERADORES DE ASIGNACION
        //Le asignaremos un valor int a la variable a

        $a = 5;
        //Ahora la variable a vale 5

        echo "$a <br>";
        //b)
        $a = ($b = 4) + 5;

        //Ahora a es igual a 9 y b es igual a 4

        echo "$a <br>";

        //Tambien contamos con operadores combinados para todos los de aritmetica binaria,
        //union de de arrays y operadores de strings que permiten usar un valor en una expresion y entonces
        //establecer su valor como el resultado de esa expresion.

        $a = 3;
        $a += 5; 
        echo $a;
        echo "<br>";
        // establece $a en 8, como si se hubiera dicho: $a = $a + 5
        
        $b = "Hola ";
        $b .= "ahi";
        echo $b;
        echo "<br>";
        // establece $b en "Hola ahi!", al igual que $b = $b . "ahi!";


        //c) Asignancion por referencia 

        $a = 3;
        $b = &$a; // $b es una referencia para $a
        
        print "$a <br>"; // muestra 3
        print "$b <br>"; // muestra 3
        
        $a = 6; // cambia $a
        
        print "$a <br>"; // muestra 4
        print "$b <br>"; // muestra 4 también, dado que $b es una referencia para $a, la cual ha
                        // sido cambiada


        //3. OPERADORES DE COMPARACION
        //a) Operador ==

        $numero1 = 20;
        $numero2 = "19";

        var_dump($numero1 == $numero2);
        echo "<br>";

        //b) Operador identico

        var_dump($numero1 === $numero2);
        echo "<br>";

        //c) Operador diferente

        var_dump($numero1 != $numero2);
        echo "<br>";

        //d) Operador no identico

        var_dump($numero1 !== $numero2);
        echo "<br>";

        //e) Operador mayor que 

        var_dump($numero1 > $numero2);
        echo "<br>";

        //f) Operador menor que

        var_dump($numero1 < $numero2);
        echo "<br>";

        //g) Mayor o igual que 

        var_dump($numero1 >= $numero2);
        echo "<br>";
        
        //h) Menor o igual que 

        var_dump($numero1 <= $numero2);
        echo "<br>";

        //i) Operador de nave espacial 

        var_dump($numero1 <=> $numero2);
        var_dump($numero2 <=> $numero1);
        var_dump($numero2 <=> $numero2);
        echo "<br>";

        //j) Operador elvis

        $resultado = true; 

        var_dump($resultado ?: 'No hay datos');
        echo "<br>";

        //Si nuestra variable tiene un valor falso nos arroja el segunda valor
        //en este caso "no hay datos", pero si es verdadero nos regresa el valor de la variable.

        //k) Operador ternario

        var_dump($resultado ? 'Verdadero' : 'Falso');
        echo "<br>";

        //l) Operador de funsion null

        var_dump($resultado ?? 'No hay datos');
        echo "<br>";






?>
