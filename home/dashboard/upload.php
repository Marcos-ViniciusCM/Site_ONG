<?php 
session_start();
require_once '../config/config.php'; 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $dname = $_POST['dname'];
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            $insert = $db->query("INSERT into dogs (dname, image, created) VALUES ('$dname','$imgContent', NOW())"); 
            
             
            if($insert){ 
                $status = 'success'; 
                echo "<script type='text/javascript'>alert('O upload de arquivo foi feito com sucesso!');</script>";
                echo "<script type='text/javascript'>
                window.location = '".$_SERVER['HTTP_REFERER']."';
                </script>";
            }else{ 
                $statusMsg = "O upload de arquivo falhou, tente novamente."; 
            }  
        }else{ 
            $statusMsg = 'Apenas arquivos JPG, JPEG, PNG, e GIF são compatíveis.'; 
        } 
    }else{ 
        $statusMsg = 'Selecione uma imagem para enviar.'; 
    } 
} 
 
echo $statusMsg; 
?>