<?php 
session_start();
error_reporting(E_ALL ^ E_WARNING);
require_once '../config/configView.php'; 
$status = $statusMsg = ''; 
$comunitario = $_POST["comunitario"];
if(!$comunitario){
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    if(!empty($_FILES["image2"]["name"])) { 
        $fileName2 = basename($_FILES["image2"]["name"]); 
        $fileType2 = pathinfo($fileName2, PATHINFO_EXTENSION);
    }
    if(!empty($_FILES["image3"]["name"])) { 
        $fileName3 = basename($_FILES["image3"]["name"]); 
        $fileType3 = pathinfo($fileName3, PATHINFO_EXTENSION);
    }
    if(!empty($_FILES["image4"]["name"])) { 
        $fileName4 = basename($_FILES["image4"]["name"]); 
        $fileType4 = pathinfo($fileName4, PATHINFO_EXTENSION);
    }
         
        $allowTypes = array('jpg','png','jpeg','gif','webp','avif','JPG','PNG','JPEG','JPEG','GIF','WEBP','AVIF'); 
        if(in_array($fileType, $allowTypes)){ 
            $dname = $_POST['dname'];
            $sex = $_POST['sex'];
            $description = $_POST['description'];
            if(in_array($fileType2, $allowTypes)){ 
            $image2 = $_FILES['image2']['tmp_name'];
            $imgContent2 = addslashes(file_get_contents($image2)); 
            }
            if(in_array($fileType3, $allowTypes)){ 
            $image3 = $_FILES['image3']['tmp_name'];
            $imgContent3 = addslashes(file_get_contents($image3)); 
            }
            if(in_array($fileType4, $allowTypes)){ 
            $image4 = $_FILES['image4']['tmp_name'];
            $imgContent4 = addslashes(file_get_contents($image4)); 
            }
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            $insert = $db->query("INSERT into dogs (dname, sex, description, image2, image3, image4, image, created) VALUES ('$dname','$sex','$description','$imgContent2','$imgContent3','$imgContent4','$imgContent', NOW())"); 
            
             
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
            $statusMsg = 'Apenas arquivos JPG, JPEG, PNG, WEBP, AVIF e GIF são compatíveis.'; 
        } 
    }else{ 
        $statusMsg = 'Selecione uma imagem para enviar.'; 
    } 
} 
 
echo $statusMsg; 
}else{
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
    if(!empty($_FILES["image2"]["name"])) { 
        $fileName2 = basename($_FILES["image2"]["name"]); 
        $fileType2 = pathinfo($fileName2, PATHINFO_EXTENSION);
    }
    if(!empty($_FILES["image3"]["name"])) { 
        $fileName3 = basename($_FILES["image3"]["name"]); 
        $fileType3 = pathinfo($fileName3, PATHINFO_EXTENSION);
    }
    if(!empty($_FILES["image4"]["name"])) { 
        $fileName4 = basename($_FILES["image4"]["name"]); 
        $fileType4 = pathinfo($fileName4, PATHINFO_EXTENSION);
    }
         
        $allowTypes = array('jpg','png','jpeg','gif','webp'); 
        if(in_array($fileType, $allowTypes)){ 
            $dname = $_POST['dname'];
            $sex = $_POST['sex'];
            $description = $_POST['description'];
            if(in_array($fileType2, $allowTypes)){ 
            $image2 = $_FILES['image2']['tmp_name'];
            $imgContent2 = addslashes(file_get_contents($image2)); 
            }
            if(in_array($fileType3, $allowTypes)){ 
            $image3 = $_FILES['image3']['tmp_name'];
            $imgContent3 = addslashes(file_get_contents($image3)); 
            }
            if(in_array($fileType4, $allowTypes)){ 
            $image4 = $_FILES['image4']['tmp_name'];
            $imgContent4 = addslashes(file_get_contents($image4)); 
            }
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            $insert = $db->query("INSERT into dogsC (dname, sex, description, image2, image3, image4, image, created) VALUES ('$dname','$sex','$description','$imgContent2','$imgContent3','$imgContent4','$imgContent', NOW())"); 
            
             
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
            $statusMsg = 'Apenas arquivos JPG, JPEG, PNG, WEBP, AVIF e GIF são compatíveis.'; 
        } 
    }else{ 
        $statusMsg = 'Selecione uma imagem para enviar.'; 
    } 
} 
 
echo $statusMsg; 
}
?>