<?php 
include '../../db/cn.php';
session_start();
$empresa = $_SESSION['key']['empresa'];
$padre = $_POST['padre'];
$query = "SELECT * FROM detalle_01 where padre = '$padre'";
$result_task = mysqli_query($conn, $query);
?>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
    <div class="">
        <div class="flex items-start">
            <div class="">
                <?php  for ($i=0; $i < 4 ; $i++) { 
                  ?>
                <div class="flex flex-col w-100 leading-1.5 p-2 border-gray-200  rounded-e-xl rounded-es-xl">
                    <div class="flex items-start  bg-gray-50 rounded-xl w-full p-2">
                        <div class="pt-2">
                            <span class="flex items-center gap-2 text-sm font-medium text-gray-900 w-full  pb-2">
                                <svg fill="none" aria-hidden="true" class="w-5 h-5 flex-shrink-0" viewBox="0 0 20 21">
                                    <g clip-path="url(#clip0_3173_1381)">
                                        <path fill="#E2E5E7"
                                            d="M5.024.5c-.688 0-1.25.563-1.25 1.25v17.5c0 .688.562 1.25 1.25 1.25h12.5c.687 0 1.25-.563 1.25-1.25V5.5l-5-5h-8.75z" />
                                        <path fill="#B0B7BD"
                                            d="M15.024 5.5h3.75l-5-5v3.75c0 .688.562 1.25 1.25 1.25z" />
                                        <path fill="#CAD1D8" d="M18.774 9.25l-3.75-3.75h3.75v3.75z" />
                                        <path fill="#F15642"
                                            d="M16.274 16.75a.627.627 0 01-.625.625H1.899a.627.627 0 01-.625-.625V10.5c0-.344.281-.625.625-.625h13.75c.344 0 .625.281.625.625v6.25z" />
                                        <path fill="#fff"
                                            d="M3.998 12.342c0-.165.13-.345.34-.345h1.154c.65 0 1.235.435 1.235 1.269 0 .79-.585 1.23-1.235 1.23h-.834v.66c0 .22-.14.344-.32.344a.337.337 0 01-.34-.344v-2.814zm.66.284v1.245h.834c.335 0 .6-.295.6-.605 0-.35-.265-.64-.6-.64h-.834zM7.706 15.5c-.165 0-.345-.09-.345-.31v-2.838c0-.18.18-.31.345-.31H8.85c2.284 0 2.234 3.458.045 3.458h-1.19zm.315-2.848v2.239h.83c1.349 0 1.409-2.24 0-2.24h-.83zM11.894 13.486h1.274c.18 0 .36.18.36.355 0 .165-.18.3-.36.3h-1.274v1.049c0 .175-.124.31-.3.31-.22 0-.354-.135-.354-.31v-2.839c0-.18.135-.31.355-.31h1.754c.22 0 .35.13.35.31 0 .16-.13.34-.35.34h-1.455v.795z" />
                                        <path fill="#CAD1D8"
                                            d="M15.649 17.375H3.774V18h11.875a.627.627 0 00.625-.625v-.625a.627.627 0 01-.625.625z" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_3173_1381">
                                            <path fill="#fff" d="M0 0h20v20H0z" transform="translate(0 .5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                Documento subido
                            </span>
                        </div>
                        <div class="inline-flex self-center items-center">
                            <button
                                class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-gray-50 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-600 dark:hover:bg-gray-500 dark:focus:ring-gray-600"
                                type="button">
                                <svg class="w-4 h-4 text-gray-900 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
                                    <path
                                        d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <div class="bg-white p-4 col-span-3 h-full">
        <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi bibendum enim eget ligula pellentesque
            malesuada. Mauris orci lectus, ullamcorper eget lorem nec, fringilla dapibus urna. Sed a sagittis nibh, nec
            pellentesque leo. Nam sit amet aliquam risus. Aliquam vehicula semper euismod. Morbi interdum, dolor sed
            porttitor auctor, mi leo fringilla magna, sit amet placerat lorem tortor eget tellus. Nulla auctor eros ut
            varius vulputate. Curabitur id urna efficitur, iaculis est id, volutpat elit. Nullam tristique cursus purus,
            id dignissim magna aliquam vehicula.</p>

        <p class="py-3"> Etiam ut nulla porttitor, tincidunt leo nec, tristique nisl. Nam placerat purus eget suscipit mollis. Mauris
            gravida ac mi non fringilla. Etiam interdum nunc tristique enim mattis, accumsan tempus felis dapibus. Cras
            a tortor libero. Suspendisse potenti. Donec dapibus tortor eu ullamcorper vehicula. Vestibulum malesuada
            enim non aliquet rhoncus. Proin in tempus lorem. Morbi aliquet quam neque, a placerat mauris sollicitudin
            vitae. Duis efficitur, magna non mattis fermentum, enim erat consequat lectus, id egestas arcu dolor a ante.
            Cras eleifend dui in feugiat laoreet. Morbi ut facilisis nisl. Cras non cursus magna.</p>

        <p class="py-3"> In dictum turpis tempus risus porta dignissim. Donec tempus sit amet risus in convallis. Nulla sem erat,
            iaculis ut vestibulum vitae, vestibulum eleifend tellus. Praesent tempus orci nunc, eu tempus arcu
            sollicitudin eget. Donec non pellentesque quam. Etiam a dolor massa. Vestibulum libero arcu, ultrices in
            pharetra sed, lacinia et diam. Praesent consequat pellentesque risus, ac tincidunt justo pretium vitae.
            Praesent blandit nisi eget tortor sollicitudin, non gravida diam hendrerit. Fusce id libero sed enim
            ullamcorper maximus quis sit amet ante. Ut ut iaculis mauris. Integer eget nunc eu metus elementum dictum.
            Morbi placerat mollis lorem sed pharetra. Mauris ac placerat augue.</p>

        <p class="py-3"> Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed ut felis vitae felis luctus dapibus.
            Vestibulum suscipit arcu nunc, a placerat neque venenatis vel. Aliquam ultrices blandit urna, in ultricies
            leo rhoncus ut. Etiam erat leo, scelerisque aliquam libero scelerisque, ullamcorper elementum tortor.
            Quisque dictum, lacus non tempor porta, orci lacus fringilla sem, in sodales tortor eros ac metus. Duis
            laoreet cursus aliquet. Maecenas tempus ligula tortor.</p>

        <p class="py-3"> Vivamus quis nisl vitae nibh consequat molestie. Proin laoreet bibendum nisi. Aliquam lobortis vel diam sit
            amet feugiat. Cras malesuada aliquet felis. Fusce sit amet hendrerit enim, nec blandit nibh. Sed non porta
            purus. Suspendisse nec eleifend arcu.</p>
    </div>
</div>