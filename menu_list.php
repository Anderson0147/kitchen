<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        *{
    margin: 00;
    padding: 00;
}
#header{
    width: 100%;
    height: 20px;
    background-color: orange;
    gap: 8px;

}
nav{
    display: flex;
    
}
#home{
    display: flex;
    gap: 15px;
    margin-left: 15px;
    
}
li{
    list-style: none;
}
li a{
    text-decoration: none;
}
#sig{
    display: flex;
    gap:70px;
    margin-left: 900px;
}
      body{
        align-items: center;
        
    }
    table{
        margin-top:50px;
        margin-left: 150px;
        text-align: center;
        background-color: white;
    }
    table tr td {
        border: solid;
        width: 120px;
        height: 30px;
        border-color:goldenrod;
        color: goldenrod;
        font-size:large;
        border-collapse:collapse ;
        
    }
    table tr th{
        border: solid;
        width: 90px;
        height: 50px;
        
        color: yellow;
        font-size: x-large;
        
        

    }
    h4 a{
        color: yellow;
        font-size: x-large;
    }
    a:hover{
        color: yellow;
    }
    </style>
</head>
<body>
    
<div id="header">
<nav>
    <ul id="home">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Connect Us</a></li>
        <li><a href="order.php">Order</a></li>
    </ul>
    <ul id="sig">
        <li><a href="signup.html">Sign Up</a></li>
        <li><a href="#">Login</a></li>
    </ul>
</nav>

    </div>
<form><form>
    k
 <?php
        
 $connection = mysqli_connect("localhost","root","","kitchen");
if($connection){
    $query ='SELECT * FROM menu';

    $result = mysqli_query($connection,$query);
    if($result -> num_rows > 0){
        $n=1; 
        while($row = $result->fetch_assoc()){
            echo'
            <tr>
            <td>'.$n.'</td>
            <td>'.$row['foodname'].'</td>
            <td>'.$row['price'].'</td>
           
            </tr>';
            $n++;
        }
    }
}else{
    echo "not connected";
}





?>
                  

             
        

                  
                 
                  </tbody>
                  <tfoot>
                  <th>SN</th>
                    <th>Food</th>
                    <th>price</th>
                  
                    
                  </tr>
                  </tfoot>
                </table>

</body>
</html>

</body>
</html>