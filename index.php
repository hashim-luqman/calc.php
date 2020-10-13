<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form>
    <input type="text" name="num1" placeholder="number 1">
    <input type="text" name="num2" placeholder="number 2">
    <select name="operator">
      <option>none</option>
      <option>Add</option>
      <option>Subtract</option>
      <option>Multiply</option>
      <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">calculate</button>
    </form>
    <p>The answer is:</p>

  <?php 
      if(isset($_GET['submit'])){
         $_result1 = $_GET['num1'];
         $_result2 = $_GET['num2'];
         $_operator = $_GET['operator'];
         switch ($_operator){
             case "none" :
                echo "ERROR";
             break;
             case "Add" :
                echo $_result1 + $_result2;
             break;
             case "Subtract" :
                echo $_result1 - $_result2;
             break;
             case "Multiply" :
                echo $_result1 * $_result2;
             break;
             case "Divide" :
                echo $_result1 / $_result2;
             break;
         }
      }
  ?>  
</body>
</html>