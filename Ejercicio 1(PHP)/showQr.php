<?php
    include('./api/conexion_api.php');
    include('./api/validator.php');

    require('./vendors/phpqrcode/qrlib.php');

    validateForm($_POST);

    if(!isset($_POST['quantity'])){
        
        header("Location: index.php");
    }
        

    $data = getData($_POST['quantity'], substr($_POST['phone'], -4));

    $ruta = 'img/codes/'.date('d-m-Y-h-i-s').'.png';
    $qr = QRcode::png( $data, $ruta, 'Q', 10, 5); 

    
    
?>

<!DOCTYPE html>
<html lang="en">
<?php 
    include('./components/header.php');
?>
<body>
<div id="app">
        <div class="bg-gradient-to-r h-screen from-gray-600 to-gray-400">
            <div class=" min-h-full flex justify-center items-center px-6">
                <div class="flex  flex-col bg-white shadow-2xl w-full  rounded-2xl p-12 md:p-8 items-center h-full justify-between md:w-2/5">
                    <div>   
                        <h2 class="text-center text-xl font-bold leading-9 tracking-tight text-gray-500 mt-0 md:text-3xl">Hemos hecho magia!💫🧙‍♂️</h2>
                    </div>
                    <div class="flex h-full  w-full md:w-4/5 justify-center my-2">
                        <div class=" shadow-2xl rounded-xl">
                            <img class="rounded-xl" src="<?php echo $ruta ?>" alt="">
                                    
                        </div>
                    </div>  
                    <div>   
                        <h4 class="text-center text-sm font-bold tracking-tight text-gray-500 mt-4">
                            La informacion en respuesta de la api se encuentra en este QR
                        </h4>
                    </div>
                    <div class="flex w-full justify-center mt-5">
                        <a 
                            href="index.php"
                            class="
                                w-4/5 md:w-1/3 text-center rounded-md bg-gray-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm 
                                transition-all duration-500 
                                hover:bg-gray-900 
                                focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-700"
                            >
                            Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>