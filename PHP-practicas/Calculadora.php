<!DOCTYPE html>
<html>

<head>
    <title>Calculadora PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 50px;
            text-align: center;
        }
        
        .calculator {
            display: inline-block;
            border: solid 1px #ccc;
            border-radius: 5px;
            padding: 20px;
            background-color: #fff;
            width: 200px;
        }
        
        .calculator input[type="number"] {
            width: 60px;
        }
    </style>
</head>

<body>
    <div class="calculator">
        <h1>Calculadora</h1>
        <form method="post">
            <input type="number" name="num1" placeholder="Número 1" required>
            <select name="operator">
                <option value="add">+</option>
                <option value="subtract">-</option>
                <option value="multiply">*</option>
                <option value="divide">/</option>
            </select>
            <input type="number" name="num2" placeholder="Número 2" required>
            <button type="submit" name="submit" value="submit">Calcular</button>
        </form>
        <p>El resultado es:</p>
        <?php
if($_POST){
            if (isset($_POST['submit'])) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operator = $_POST['operator'];
                switch ($operator) {
                    case "add":
                        echo $num1 + $num2;
                        break;
                    case "subtract":
                        echo $num1 - $num2;
                        break;
                    case "multiply":
                        echo $num1 * $num2;
                        break;
                    case "divide":
                        echo $num1 / $num2;
                        break;
                }
            }
        }
        ?>

    </div>
</body>

</html>