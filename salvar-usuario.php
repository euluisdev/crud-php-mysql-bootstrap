<?php 
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
            
            $res = $conn->query($sql);  // consulta no bd, o result é armazenado na var $res

            if($res == true) {
                echo "<script>alert('Cadastrado com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script>alert('Não foi possível cadastrar');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }
            break;
        case 'editar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET  /* atualiza os dados na tabela usuarios */
                        nome = '{$nome}',
                        email = '{$email}',
                        senha = '{$senha}',
                        data_nasc = '{$data_nasc}'
                    WHERE 
                        id=".$_REQUEST["id"]; //apenas o id específico será atualizado

            $res = $conn->query($sql);  // consulta no bd, o result é armazenado na var $res

            if($res == true) {
                echo "<script>alert('Editado com sucesso!');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script>alert('Não foi possível Editar');</script>";
                echo "<script>location.href='?page=listar';</script>"; //redireciona page listar
            }
            break;
        case 'excluir':
            
            break;
    }
