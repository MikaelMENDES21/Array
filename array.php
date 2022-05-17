<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=, initial-scale=1.0">

    <title>Login</title>

</head>

 <body>

     <form action="proc.php" method="post">

    <div>

       <label> Nome: </label>

       <input type="text" id="nome" name="nome"/>

       <?php 

       if (isset ($_GET['erro']) && ($_GET['erro']) == "nome"){

           echo "<span style='color-red'>*</span>";

       }

    

       ?>

    </div>



    <div> 

     <Label> Sexo: </Label>

     <input type = "radio" id="sexo" name="sexo" value="f"/> feminino

     <input type ="radio" id="sexo"  checked name="sexo" value="m"/> masculino

     </div>

      

      <div>

          <labelfor ="x"> Senha: </label>

          <input type="password" id="x" name="senha"/>

          <?php 

       if(isset($_GET['erro']) && $_GET['erro'] == "senha"){

           echo "<span style='color-red'>*</span>";

       }

       ?>

      </div>     

     <input type="submit" value="cadastro"/>

</body>

</html>