 <?php include_once "conexao.php";
   

    switch ($_REQUEST["acao"]) {
                case 'cadastrar':
                     if(empty($_POST['name_fighter']) || empty($_POST['modality_fighter']) || empty($_POST['traintime_fighter']) || empty($_POST['gym_fighter']) || empty($_POST['genre_fighter'])) {
                        print "<script>alert('Há campos em branco, por favor preencha-os !!');</script>";
                        print "<script> location.href = 'cadastrarlutador.php';</script>";
                        exit();
                        }
                    $name_fighter = $_POST["name_fighter"];
                    $modality_fighter = $_POST["modality_fighter"];
                    $traintime_fighter = $_POST["traintime_fighter"];
                    $gym_fighter = $_POST["gym_fighter"];
                    $genre_fighter = $_POST["genre_fighter"];
                   
                

                    $sql = "INSERT INTO user_fight (name_fighter, modality_fighter, traintime_fighter, gym_fighter, genre_fighter) VALUES ('{$name_fighter}', '{$modality_fighter}' , '{$traintime_fighter}', '{$gym_fighter}' , '{$genre_fighter}')";

                    $res = $conexao-> query($sql);

                    if($res==true){
                        print "<script>alert('Cadastro realizado com sucesso');</script>";
                        print "<script>location.href='listarlutador.php';</script>";
                    }else{
                        print "<script>alert('Não foi possível cadastrar');</script>";
                        print "<script>location.href='listarlutador.php';</script>";
                    }
                    break;
                
                case 'editar':
                        if(empty($_POST['name_fighter']) || empty($_POST['modality_fighter']) || empty($_POST['traintime_fighter']) || empty($_POST['gym_fighter']) || empty($_POST['genre_fighter'])) {
                        print "<script>alert('Há campos em branco, Redirecionando para a página de listagem');</script>";
                        print "<script> location.href = 'listarlutador.php';</script>";
                        exit();
                        }

                    $name_fighter = $_POST["name_fighter"];
                    $modality_fighter = $_POST["modality_fighter"];
                    $traintime_fighter = $_POST["traintime_fighter"];
                    $gym_fighter = $_POST["gym_fighter"];
                    $genre_fighter = $_POST["genre_fighter"];
                    
                    $sql = "UPDATE user_fight SET name_fighter='{$name_fighter}', modality_fighter='{$modality_fighter}', traintime_fighter='{$traintime_fighter}', gym_fighter='{$gym_fighter}' , genre_fighter='{$genre_fighter}' WHERE id=".$_REQUEST["id"] ;

                    $res = $conexao-> query($sql);

                    if($res==true){
                        print "<script>alert('Edição realizada com sucesso');</script>";
                        print "<script>location.href='listarlutador.php';</script>";
                    }else{
                        print "<script>alert('Não foi possível Editar');</script>";
                        print "<script>location.href='listarlutador.php';</script>";
                    }
                    
                    break;

                case 'excluir':
                
                    $sql = "DELETE FROM user_fight WHERE id=".$_REQUEST["id"];

                    $res = $conexao-> query($sql);

                    if($res==true){
                        print "<script>alert('Excluído com sucesso');</script>";
                        print "<script>location.href='listarlutador.php';</script>";
                    }else{
                        print "<script>alert('Não foi possível Excluir');</script>";
                        print "<script>location.href='listarlutador.php';</script>";
                    }
                    break;
            }