<?php
include '../../db/cn.php';
session_start();

if ($_POST['action'] == 'add') {
    $usuario = $_SESSION['key']['usuario'];
    $titulo = $_POST['1'];
    $descripcion = $_POST['2'];
    $etiqueta = $_POST['3'];
    $padre = $_POST['padre'];
    $dw = $_POST['5'] ? $_POST['5'] : 0;

    // Handle the uploaded image
    if (isset($_FILES['6']) && $_FILES['6']['error'] == UPLOAD_ERR_OK) {
        $imageTmpName = $_FILES['6']['tmp_name'];
        $imageFileName = $_FILES['6']['name'];
        $imageFileType = strtolower(pathinfo($imageFileName, PATHINFO_EXTENSION));

        // Generar un nombre único para el archivo basado en la fecha y hora actual
        $date = new DateTime();
        $formattedDate = $date->format('Ymd_His'); // Formato: AñoMesDia_HoraMinutoSegundo
        $newFileName = $formattedDate . '.' . $imageFileType;
        
        $uploadDirectory = './docs/'; // Directorio donde se guardarán las imágenes
        $targetFilePath = $uploadDirectory . $newFileName;

        // Mover el archivo subido al directorio de destino con el nombre único
        if (move_uploaded_file($imageTmpName, $targetFilePath)) {
            // URL relativa de la imagen para almacenar en la base de datos
            $imagen_url = '' . $newFileName; // Ruta relativa desde la raíz del sitio

            // Insertar datos en la base de datos
            $q = "
            INSERT INTO contenido_01 
            SET usuario='$usuario', titulo='$titulo', descripcion='$descripcion', imagen='$imagen_url', etiqueta='$etiqueta', padre='$padre', dw='$dw'
            ";
            $result = mysqli_query($conn, $q);

            if ($result) {
                echo 'Contenido agregado exitosamente!';
            } else {
                echo 'Error al agregar contenido: ' . mysqli_error($conn);
            }
        } else {
            echo 'Error al mover la imagen al directorio de destino.';
        }
    } else {
        echo 'Error al subir la imagen.';
    }
}

if($_POST['action'] == 'delete'){
    $id = $_POST['id'];
    $q = "DELETE FROM contenido_01 WHERE id = '$id'
    ";
    $result = mysqli_query($conn, $q);
};

?>
