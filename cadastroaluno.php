<?php
    //Inclusão do arquivo de conexão com o banco de dados
    include "database.php";

    //Recuperar as informações do formulário
    $student_name = $_POST["student_name"];
    $student_email = $_POST["student_email"];
    $student_cell = $_POST["student_cell"];

    $sql = "INSERT INTO sge_students (student_name, student_email, student_cell) 
    VALUES ('$student_name', '$student_email', '$student_cell')";

    //Realizar o cadastro no banco de dados
    if(mysqli_query($conexao, $sql)){
        header("Location: index.php");
    }
    else{
        echo "Falha ao cadastrar o usuário.";
    }

?>