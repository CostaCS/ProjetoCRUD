<?php  include_once "conexao.php"; 

if(empty($_POST['user']) || empty($_POST['password']) || empty($_POST['email'])) {
    print "<script>alert('Há campos em branco, por favor preencha-os !!');</script>";
	print "<script> location.href = 'cadastrauser.php';</script>";
	exit();
}
                $user = $_POST["user"];
                $password = $_POST["password"];
                $email = $_POST["email"];
                
               

                $sql = "INSERT INTO usuario (usuario, senha, email) VALUES ('$user', '$password' , '$email')";

                $res = $conexao-> query($sql);

                if($res==true){
                    print "<script>alert('Cadastro realizado com sucesso');</script>";
                    print "<script>location.href='index.php';</script>";
                }else{
                    print "<script>alert('Não foi possível cadastrar');</script>";
                    print "<script>location.href='cadastrauser.php';</script>";
                }
 ?>               
            