<?php
  session_start();
  $Name = $_SESSION["NameArr"] ;
  $Price = $_SESSION["PriceArr"] ;
  $Id = $_SESSION["IdArr"] ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 60%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        </style>
</head>
<body>
    <table>
        <tr>
          <th colspan="4" style="text-align:center" >您購買的商品資訊如下</th>
        </tr>
        <tr>
          <td>項次</td>
          <td>產品代號</td>
          <td>產品名稱</td>
          <td>價格</td>
        </tr>
       <?php
       $total = 0;
       for ($i = 0;$i < count($Name);$i++){
        $count = $i+1;
        $total += $Price[$i];
        echo
        "<tr>
          <td>$count</td>
          <td>$Id[$i]</td>
          <td>$Name[$i]</td>
          <td>$Price[$i]</td>
        </tr>";
       }
       echo
        "<tr>
          <td style=text-align:right; colspan=4>總金額 = $total</td>
        </tr>";
        ?>
      </table>
      <a href="clean.php">清空購物車</a>
      
</body>
</html> 