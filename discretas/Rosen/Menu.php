<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redirección con Botones</title>
    <style>
        .centered-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 160vh;
        }
        .btn {
            display: block;
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: blue;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>
    <div class="centered-container">
        <h1>Índice de Capítulos</h1>

        <ul>
            <li class="chapter">3 Algorithms ...... 201</li>
            <ul>
                <li class="subchapter">3.1 Algorithms ...... 201</li>
                <li class="subchapter">3.2 The Growth of Functions ...... 216</li>
                <li class="subchapter">3.3 Complexity of Algorithms ...... 231</li>
                <li class="end-material">End-of-Chapter Material ...... 244</li>
            </ul>

            <li class="chapter">4 Number Theory and Cryptography ...... 251</li>
            <ul>
                <li class="subchapter">4.1 Divisibility and Modular Arithmetic ...... 251</li>
                <li class="subchapter">4.2 Integer Representations and Algorithms ...... 260</li>
                <li class="subchapter">4.3 Primes and Greatest Common Divisors ...... 271</li>
                <li class="subchapter">4.4 Solving Congruences ...... 290</li>
                <li class="subchapter">4.5 Applications of Congruences ...... 303</li>
                <li class="subchapter">4.6 Cryptography ...... 310</li>
                <li class="end-material">End-of-Chapter Material ...... 324</li>
            </ul>

            <li class="chapter">5 Induction and Recursion ...... 331</li>
            <ul>
                <li class="subchapter">5.1 Mathematical Induction ...... 331</li>
                <li class="subchapter">5.2 Strong Induction and Well-Ordering ...... 354</li>
                <li class="subchapter">5.3 Recursive Definitions and Structural Induction ...... 365</li>
                <li class="subchapter">5.4 Recursive Algorithms ...... 381</li>
                <li class="subchapter">5.5 Program Correctness ...... 393</li>
                <li class="end-material">End-of-Chapter Material ...... 398</li>
            </ul>

            <li class="chapter">8 Advanced Counting Techniques ...... 527</li>
            <ul>
                <li class="subchapter">8.1 Applications of Recurrence Relations ...... 527</li>
                <li class="subchapter">8.2 Solving Linear Recurrence Relations ...... 540</li>
                <li class="subchapter">8.3 Divide-and-Conquer Algorithms and Recurrence Relations ...... 553</li>
                <li class="subchapter">8.4 Generating Functions ...... 563</li>
                <li class="subchapter">8.5 Inclusion–Exclusion ...... 579</li>
                <li class="subchapter">8.6 Applications of Inclusion–Exclusion ...... 585</li>
                <li class="end-material">End-of-Chapter Material ...... 592</li>
            </ul>
            <li  class="chapter">9 Relation</li>
            <ul>
                <li class="subchapter">9.1 Relations and Their Properties</li>
                <li class="subchapter">9.2 n-ary Relations and Their Applications</li>
                <li class="subchapter">9.3 Representing Relations</li>
                <li class="subchapter">9.4 Closures of Relations</li>
                <li class="subchapter">9.5 Equivalence Relations</li>
                <li class="subchapter">9.6 Partial Orderings</li>
            </ul>

        </ul>
        
       

        <a class="btn" href=".\Rosen_3\Menu.php">Rosen capitulo 3</a>
        <a class="btn" href=".\Rosen_4\Menu.php">Rosen capitulo 4</a>
        <a class="btn" href=".\Rosen_5\Menu.php">Rosen capitulo 5</a>
        <a class="btn" href=".\Rosen_8\Menu.php">Rosen capitulo 8</a>
        <a class="btn" href=".\Rosen_9\Menu.php">Rosen capitulo 9</a>
    </div>
</body>
</html>

