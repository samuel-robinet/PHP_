<?php

class File {

    public static function build_path($segments) {
        return __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR
                . join(DIRECTORY_SEPARATOR, $segments);
    }

//    public static function build_path($path_array) {
//        $ROOT_FOLDER = __DIR__ . '/..';
//        // "/home/ann2/votre_login/public_html/TD5" à l'IUT 
//        return $ROOT_FOLDER . '/' . join('/', $path_array);
//    }

}


	//public static function build_path($path_array) {
	//    // $ROOT_FOLDER (sans slash à la fin) vaut
	//    // "/home/ann2/votre_login/public_html/TD5" à l'IUT 
	//    $ROOT_FOLDER = "Votre chemin de fichier menant au site Web";
	//    return $ROOT_FOLDER. '/' . join('/', $path_array);
	//}

?>

