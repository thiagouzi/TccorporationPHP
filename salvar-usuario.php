<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar' :
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];
            
            $sql = "INSERT INTO usuarios (nome, 
                email, senha, data_nasc) VALUES (
                '{$nome}', '{$email}', '{$senha}', '{$data_nasc}')";
                
            $res = $mysqli->query($sql);
            
            if($res==true){
                header("Location: index.php");
                print "<script>alert('Cadastro com sucesso');</script>";
                print"<scriptlocation.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível fazer o cadastro');</script>";
                print"<scriptlocation.href='?page=listar';</script>";
                
                
            }
            break;
        
        
         case 'editar' :
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];
            
            $sql = "UPDATE usuarios SET
                    nome='{$nome}',
                    email='{$email}', 
                    senha='{$senha}', 
                    data_nasc='{$data_nasc}'
                   WHERE
                      id=".$_REQUEST["id"];
                   
                    
            $res = $mysqli->query($sql);
            
            if($res==true){
                header("Location: index2.php?page=listar");
                print "<script>alert('Editado com sucesso');</script>";
                print"<scriptlocation.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível editar');</script>";
                print"<scriptlocation.href='?page=listar';</script>";
            }
            break;
         
        case 'excluir':
           $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];
            
           $res = $mysqli->query($sql);
            
            if($res==true){
                header("Location: index2.php?page=listar");
                print "<script>alert('Excluído com sucesso');</script>";
                print"<scriptlocation.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir');</script>";
                print"<scriptlocation.href='?page=listar';</script>";
            }
            break;
            }  