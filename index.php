<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aula Web II</title>
  </head>
  <style>
    body {
      background-color: white;
      font-family: sans-serif;
    }
    form {
      background-color: aliceblue;
      width: max-content;
      border: 2px solid #333333;
      padding: 20px;
      border-radius: 8px;
    }
  </style>
  <body>
    <h1>Web II</h1>
    <p style="color: aliceblue">Cadastro:</p>
    <form id="meuFormulario" method="POST">
      <label>Nome:</label>
      <input
        type="text"
        id="nome"
        name="nome"
        placeholder="ex:Fulano da Silva"
        required
      /><br /><br />
      <input type="submit" value="Cadastrar" />
    </form>
    <?php 
      if($_SERVER["REQUEST_METHOD"] === "POST") { 
        $nome = $_POST["nome"];
        echo "Nome cadastrado: " . htmlspecialchars($nome); 
      } 
    ?>
  </body>
</html>
