<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typy danych w PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #2e2c2c;
        }
        h1, h2 {
            color: #47d6ca;
        }
        pre {
            background-color: #2e2c2c;
            border: 1px solid #ccc;
            padding: 10px;
        }
        .example {
            background-color: #eaf1f8;
            padding: 10px;
            border-radius: 5px;
        }
        .code {
            font-family: monospace;
            background-color: #f4f4f4;
            padding: 5px;
        }
    </style>
</head>
<body>

    <h1>Typy danych w PHP</h1>

    <h2>1. Typy skalarne (proste)</h2>
    
    <div class="example">
        <h3>Integer (int)</h3>
        <p>Typ całkowity (integer), np. liczby całkowite.</p>
        <pre class="code">
$number = 42;  // int
echo $number;   // wyjście: 42
        </pre>
    </div>

    <div class="example">
        <h3>Float (float)</h3>
        <p>Typ zmiennoprzecinkowy, np. liczby z miejscami po przecinku.</p>
        <pre class="code">
$pi = 3.14;  // float
echo $pi;     // wyjście: 3.14
        </pre>
    </div>

    <div class="example">
        <h3>String (string)</h3>
        <p>Typ łańcuchów znaków (ciąg znaków).</p>
        <pre class="code">
$greeting = "Hello, world!";  // string
echo $greeting;   // wyjście: Hello, world!
        </pre>
    </div>

    <div class="example">
        <h3>Boolean (bool)</h3>
        <p>Typ logiczny, przyjmuje dwie wartości: <code>true</code> lub <code>false</code>.</p>
        <pre class="code">
$isTrue = true;   // bool
$isFalse = false; // bool
echo $isTrue;      // wyjście: 1 (true)
echo $isFalse;     // wyjście: (brak)
        </pre>
    </div>

    <h2>2. Typy złożone (złożone)</h2>

    <div class="example">
        <h3>Array (tablica)</h3>
        <p>Tablice mogą przechowywać wiele wartości. Może być indeksowana lub asocjacyjna.</p>
        <pre class="code">
$arr = [1, 2, 3];  // tablica indeksowana
$assocArr = ['a' => 1, 'b' => 2];  // tablica asocjacyjna
print_r($arr);     // wyjście: Array ( [0] => 1 [1] => 2 [2] => 3 )
print_r($assocArr); // wyjście: Array ( [a] => 1 [b] => 2 )
        </pre>
    </div>

    <div class="example">
        <h3>Object (obiekt)</h3>
        <p>Obiekt to instancja klasy, która może przechowywać dane i metody.</p>
        <pre class="code">
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$person = new Person('John', 30);
echo $person->name;  // wyjście: John
        </pre>
    </div>

    <h2>3. Typy specjalne</h2>

    <div class="example">
        <h3>NULL</h3>
        <p>Typ null reprezentuje brak wartości.</p>
        <pre class="code">
$var = null;  // null
echo $var;    // wyjście: (brak)
        </pre>
    </div>

    <h2>4. Typy w PHP 7 i wyższych</h2>

    <div class="example">
        <h3>Callable</h3>
        <p>Callable to funkcja lub metoda, którą można wywołać.</p>
        <pre class="code">
function myFunction() {
    echo "Hello!";
}

$functionName = 'myFunction';
$functionName();  // wyjście: Hello!
        </pre>
    </div>

    <div class="example">
        <h3>Iterable</h3>
        <p>Iterable oznacza, że zmienna może być używana w pętli <code>foreach</code>.</p>
        <pre class="code">
function iterate(iterable $items) {
    foreach ($items as $item) {
        echo $item;
    }
}

iterate([1, 2, 3]);  // wyjście: 123
        </pre>
    </div>

    <h2>5. Typy w PHP 7+</h2>

    <div class="example">
        <h3>Void</h3>
        <p>Void jest używane, gdy funkcja nie zwraca żadnej wartości.</p>
        <pre class="code">
function noReturnValue(): void {
    echo "No return value!";
}

noReturnValue();  // wyjście: No return value!
        </pre>
    </div>

</body>
</html>
