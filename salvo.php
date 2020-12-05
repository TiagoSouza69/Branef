<html>
    <head>
        <meta charset="utf8">
             <title>Detalhe</title>
             <style>h1{color: #8d97ad;font-family: sans-serif;border: 4px;}</style>
    </head>
<body>
   <h1>Formulário salvo</h1>
<?php
      $nome = $_POST["nome"]; 
      $email2 = $_POST["email2"];
      $cpf = $_POST["cpf"];
      $empresa = $_POST["empresa"]; 
      echo "-------------" ;
      echo "<br/>"; 
      echo "Nome:";
      echo "<br/>";
      echo "-------------" ;
      echo "<br/>";
      echo $nome ; 
      echo "<br/>";
      echo "-------------" ;
      echo "<br/>"; 
      echo "Email:";
      echo "<br/>";
      echo "-------------" ;
      echo "<br/>";
      echo $email2 ;
      echo "<br/>"; 
      echo "-------------" ;
      echo "<br/>"; 
      echo "CPF:";
      echo "<br/>";
      echo "-------------" ;
      echo "<br/>";
      echo $cpf ; 
      echo "<br/>";
      echo "-------------" ;
      echo "<br/>"; 
      echo "Empresa:";
      echo "<br/>";
      echo "-------------" ;
      echo "<br/>";
      echo $empresa ; 
      echo "<br/>";
      echo "-------------" ;
?>
</body>
</html>