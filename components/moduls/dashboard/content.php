<?php 
include '../../db/cn.php';
session_start();
$empresa = $_SESSION['key']['empresa'];

if ($_POST['action'] == 'view-content') {
    $padre = $_POST['padre'];
    $query = "SELECT * FROM contenido_01 WHERE padre = '$padre'";
    $result_task = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result_task) > 0) {
        while ($contenido = mysqli_fetch_assoc($result_task)) {
            $imagen = $contenido['imagen'] ? './components/moduls/dashboard/docs/'.$contenido['imagen'] : 'https://lavozdelnorte.com.co/wp-content/uploads/2021/04/UFPS-C%C3%9ACUTA-on-Instagram_-_%E2%9D%A4-%C2%A1UFPS-Soy-yo_-Eres-t%C3%BA_-Somos-Todos_-__CBqIVqEnK_7JPG.jpg';
            
            echo "<div class='relative group bg-white rounded contenido' data-titulo='{$contenido['titulo']}' data-descripcion='{$contenido['descripcion']}'>";
            echo "<img src='{$imagen}' class='img-fluid' alt=''>";
            echo "<div class='p-4'>";
            echo "<h1 class='font-semibold'>{$contenido['titulo']}</h1>";
            echo "<p>{$contenido['descripcion']}</p>";
            echo "<button class='py-2 bg-purple-500 rounded text-white px-3 mt-4 text-sm ver-data' data-contenido='{$contenido['id']}'>Ver</button>";
            echo "<div class='hidden absolute top-2 right-2 group-hover:flex space-x-2'>";
            echo "<button class='py-1 bg-slate-900 rounded-full text-white px-2'><i class='bx bx-edit'></i></button>";
            echo "<button class='py-1 bg-slate-900 rounded-full text-white px-2'><i class='bx bx-trash-alt'></i></button>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
       
    } 
    echo "<div class='relative group bg-white rounded add-contenido w-fill' data-padre='0'>";
    echo "<div class='flex items-center justify-cente w-full h-full bg-gray-300 rounded'>";
    echo "<svg class='w-10 h-10 text-gray-200 mx-auto' aria-hidden='true' xmlns='http://www.w3.org/2000/svg' fill='currentColor' viewBox='0 0 24 24'>";
    echo "<path fill-rule='evenodd' d='M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z' clip-rule='evenodd' />";
    echo "</svg>";
    echo "</div>";
    echo "</div>";
}
?>