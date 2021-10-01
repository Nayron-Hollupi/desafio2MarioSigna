
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2 Mario</title>
</head>
<style type="text/css" >
   .container{
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
width: 100%;
   }

  
   .size td input{
       width: 40%;
   }
  
   .button{
       width: 100%;
       color: #fff;
       background-color: #0000FF;
       border-radius: 5px;
       padding: 8px;
    
    }

    .button:hover{
       background-color: #000;
       cursor: pointer;
    }

    .mario{
        display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
width: 100%; 
    }
    </style>
<body>
<div class="container">
       <table style="max-width:800px;" border="0">
            <thead>
                <tr>
                    <th colspan="6"><h1>Desafio Mario Signa</h1></th>
                </tr>
            </thead>
            <tbody>
                <tr class="size">
        <td >  
        <form method="POST" id="form">
      <b>Digite um numero inteiro:&nbsp;</b><input type="text" name="numero" id="numero"> 
     
      
 
        </td>

  
        </tr>

        <tr>
        <td>    <input type="submit" name="enviar" class="button" value="enviar"></td></tr>
</form>
</div>
        <tr  class="mario"> 
         <td >     <div class="div"  ></div></td>    </tr>
     
            </tbody>
        </table>
   

    <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="ajax2.js"></script>
</body>
</html>


<?php




/*
echo "&nbsp;";
echo "&nbsp;";
echo "&nbsp;";
echo "#";

echo "&nbsp;";
echo "&nbsp;";
echo "&nbsp;";
echo "#";


echo "<br>##";
echo "&nbsp;";
echo "&nbsp;";
echo "&nbsp;";
echo "##";

echo "<br><br>";

for($i=0; $i < $t;$i++){
    echo "&nbsp;";
    echo "&nbsp;";
    echo "&nbsp;";
    echo "#";
}*/


echo "<br><br>";










