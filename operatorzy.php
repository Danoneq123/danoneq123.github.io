
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatory w PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #2e2c2c;
        }
        h1 {
            color: #47d6ca;
        }
        h2 {
            color: #47d6ca;
        }
        pre {
            background-color: white;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        code {
            font-family: Consolas, monospace;
        
        }
      p{color:white;
        }
    </style>
</head>
<body>
    <h1>Operatory w PHP</h1>
    
    <h2>1. Operatory arytmetyczne</h2>
    <p>Operatory arytmetyczne wykonują podstawowe operacje matematyczne:</p>
    <pre><code>
$a = 10;
$b = 5;
$sum = $a + $b; // Wynik: 15
$difference = $a - $b; // Wynik: 5
$product = $a * $b; // Wynik: 50
$quotient = $a / $b; // Wynik: 2
$remainder = $a % $b; // Wynik: 0
$exponentiation = $a ** $b; // Wynik: 100000
    </code></pre>

    <h2>2. Operatory porównania</h2>
    <p>Operatory porównania służą do porównywania wartości:</p>
    <pre><code>
$isEqual = ($a == $b); // Wynik: false
$isIdentical = ($a === $b); // Wynik: false
$isNotEqual = ($a != $b); // Wynik: true
$isNotIdentical = ($a !== $b); // Wynik: true
$isGreaterThan = ($a > $b); // Wynik: true
$isLessThan = ($a < $b); // Wynik: false
$isGreaterThanOrEqual = ($a >= $b); // Wynik: true
$isLessThanOrEqual = ($a <= $b); // Wynik: false
    </code></pre>

    <h2>3. Operatory logiczne</h2>
    <p>Operatory logiczne wykonują operacje na wartościach boolean:</p>
    <pre><code>
$and = ($a > 5 && $b < 10); // Wynik: true
$or = ($a > 5 || $b < 10);  // Wynik: true
$not = !($a > 5);            // Wynik: false
    </code></pre>

    <h2>4. Operatory przypisania</h2>
    <p>Operatory przypisania służą do przypisywania wartości do zmiennych:</p>
    <pre><code>
$x = 5;
$x += 2;  // Wynik: 7
$x -= 3;  // Wynik: 4
$x *= 4;  // Wynik: 16
$x /= 2;  // Wynik: 8
$x %= 3;  // Wynik: 2
$x .= " test"; // Wynik: 2 test
    </code></pre>

    <h2>5. Operatory inkrementacji i dekrementacji</h2>
    <p>Operatory inkrementacji i dekrementacji zwiększają lub zmniejszają wartość zmiennej o 1:</p>
    <pre><code>
$y = 1;
$y++; // Wynik: 2 (inkrementacja)
$y--; // Wynik: 1 (dekrementacja)
    </code></pre>

    <h2>6. Operator typu (rzutowanie)</h2>
    <p>Rzutowanie pozwala na konwersję jednego typu zmiennej na inny typ:</p>
    <pre><code>
$z = (int) 3.14;  // Wynik: 3
$w = (bool) 1;    // Wynik: true
    </code></pre>

    <h2>Podsumowanie</h2>
    <p>PHP oferuje szeroką gamę operatorów, które umożliwiają wykonywanie różnych operacji na danych. W zależności od potrzeb można używać operatorów arytmetycznych, logicznych, przypisania oraz porównania. Poznanie i zrozumienie tych operatorów jest kluczowe do efektywnego programowania w PHP.</p>
</body>
</html>
