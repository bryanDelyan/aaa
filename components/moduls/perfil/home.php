<?php

include '../../db/cn.php';
session_start();

$id = $_SESSION['key']['id'];
$usuario = $_SESSION['key']['usuario'];
$empresa = $_SESSION['key']['empresa'];

$query = "SELECT * FROM usuarios WHERE id = '$id'";
$result_task = mysqli_query($conn, $query);
$query2 = "SELECT * FROM log WHERE user = '$usuario' AND empresa = '$empresa' order by fecha desc LIMIT 50";
$result_task2 = mysqli_query($conn, $query2);
?>

<?php
foreach ($result_task as $row) {
?>
<div id="terceros">
    <div class="py-2 lg:px-4 mt-6 lg:mx-5">
        <div class="md:flex">
            <div class="md:basis-4/12 md:px-5">
                <div class="bg-white shadow-sm rounded h-full p-4 text-center">
                    <div class="pb-5 pt-10 mt-10">
         
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOsKzcgIHP83M8TgglSE_wVsb4XSfBtmv4MA&s" class="w-12 h-12 text-5xl mx-auto text-center" alt="">
                    </div>
                    <p class="text-slate-700 font-semibold text-lg"><?php echo $row['nombre'] ?></p>
                    <p><?php echo $row['rol'] ?></p>
                 
                    <p class="text-semibold text-purple-600 py-2"><?php echo $row['empresa'] ?></p>
                </div>
            </div>
            <div class="md:basis-8/12 md:px-5">
                <div class="bg-white shadow-sm rounded p-5">
                    <div class="p-4">
                        <p class="border-b border-slate-900 text-2xl text-slate-700 font-semibold p-2">Perfil</p>
                        <div class="mt-8">
                          
                            <p class="text-lg text-slate-700 font-semibold">Detalles del Perfil</p>
                            <p class="mt-2 mb-4"><span class="text-slate-900 font-semibold">Nombre:</span> <?php echo $row['nombre'] ?></p>
                            <p class="mb-4"><span class="text-slate-900 font-semibold">Fecha de Registro:</span> <?php echo $row['fecha_subida'] ?>
                            </p>
                            <p class="mb-4"><span class="text-slate-900 font-semibold">Tipo de usuario:</span> <?php echo $row['rol'] ?>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="basis-12/12 px-5 py-5 mt-2">
            <div class="bg-white shadow-sm rounded p-4">
                <p class="border-b border-slate-900 text-2xl p-2 text-slate-700 font-semibold mb-2 md:mx-3">Logs</p>
                <div class="p-5">
                    <?php
                    foreach ($result_task2 as $row) {
                        echo '<p class="p-2 mb-3 border-b border-gray-200 hover:bg-gray-100"> <i class="bx bxs-calendar bg-purple-600 p-2 mr-5 text-white rounded"></i> Usuario '.$row['user'].' ingreso al modulo de '.substr(strchr($row['modul'], "moduls/"), 7).' el '.$row['fecha'].' en la empresa '.$row['empresa'].'<br><span>'.$row['context'].'<span></p>';

                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
}
?>