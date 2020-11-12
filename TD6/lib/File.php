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
