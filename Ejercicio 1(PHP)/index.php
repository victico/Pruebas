
<?php 
    include('./api/conexion_api.php');
    $img = getImages();
?>

<!DOCTYPE html>
<html lang="en">
<?php 
    include('./components/header.php');
?>
<body>
    <div id="app">
        <div class="bg-gradient-to-r h-screen from-gray-600 to-gray-400">
            <div class=" min-h-full flex justify-center items-center px-6 py-12 lg:px-8">
                <div class="flex bg-white shadow-2xl w-full  rounded-2xl p-8 md:px-4 md:py-8 items-center h-full justify-between md:w-3/4">
                    <div class="w-full md:w-1/2 px-5 md:px-16">
                        <h2 class="text-center text-2xl font-bold leading-9 tracking-tight text-gray-500 mt-0">Hola👋</h2>
                        <div class="mt-10 w-full ">
                            <form class="space-y-6" action="showQr.php"  method="POST">
                                <div>
                                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                                    <div class="mt-2">
                                        <input 
                                            id="name" 
                                            name="name" 
                                            type="text" 
                                            autocomplete="off" 
                                            required 
                                            class="
                                                block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 
                                                placeholder:text-gray-400 
                                                focus:ring-2 focus:ring-inset focus:ring-indigo-600 
                                                sm:text-sm sm:leading-6"
                                        >
                                    </div>
                                </div>
                                <div>
                                    <label for="quantity" class="block text-sm font-medium leading-6 text-gray-900">Cantidad</label>
                                    <div class="mt-2">
                                        <input 
                                            id="quantity" 
                                            name="quantity" 
                                            type="number" 
                                            autocomplete="off"  
                                            required 
                                            class="
                                                block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 
                                                placeholder:text-gray-400 
                                                focus:ring-2 focus:ring-inset focus:ring-indigo-600 
                                                sm:text-sm sm:leading-6"
                                        >
                                    </div>
                                </div>
                                <div>
                                    <div class="flex items-center justify-between">
                                        <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Teléfono</label>
                                    </div>
                                    <div class="mt-2">
                                        <input 
                                            id="phone" 
                                            name="phone" 
                                            type="text" 
                                            autocomplete="off" 
                                            required 
                                            class="
                                                block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 
                                                placeholder:text-gray-400 
                                                focus:ring-2 focus:ring-inset focus:ring-indigo-600 
                                                sm:text-sm sm:leading-6"
                                            >
                                    </div>
                                </div>

                                <div>
                                    <button 
                                        type="submit" 
                                        class="
                                            flex w-full justify-center rounded-md bg-gray-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm 
                                            transition-all duration-500 
                                            hover:bg-gray-900 
                                            focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-700"
                                        >
                                        Enviar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="hidden md:block h-full md:w-1/2 justify-center px-5">
                        <div class=" shadow-2xl rounded-xl">
                            <img class="rounded-xl shadow-2xl " src="<?php echo $img['src']['large'] ?>" alt="">
                                    
                        </div>
                        <div>
                            <p class="block text-sm font-medium leading-6 text-gray-900 mt-2 text-end">Photo by: <?php  echo $img['photographer']?></p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>