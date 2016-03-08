<?php defined('SYSPATH') or die('No direct script access.');

class Components {


    # Collect parameters from 'Add / Edit rule' modal window
/*
    public static function get_rulesAddEdit_POST() {

        $POST = [
            'active'      => (empty($_POST['active'])) ? 'n' : 'y',
            'type'        => (empty($_POST['type'])) ? '1' : $_POST['type'],
            'name'        => (empty($_POST['name'])) ? '' : $_POST['name'],
            'frequency'   => (empty($_POST['frequency'])) ? 0 : $_POST['frequency'],
            'duration'    => (empty($_POST['duration'])) ? 0 : $_POST['duration'],
            'mode'        => $_POST['mode'],
            'url'         => (empty($_POST['url'])) ? '' : $_POST['url'],
            'position'    => (empty($_POST['position'])) ? '1' : $_POST['position'],
            'x_button_mode' => (empty($_POST['x_button_mode'])) ? '1' : $_POST['x_button_mode'],
            'width'       => (empty($_POST['width'])) ? 0 : $_POST['width'],
            'height'      => (empty($_POST['height'])) ? 0 : $_POST['height'],
            'margin'      => (empty($_POST['margin'])) ? 0 : $_POST['margin'],
            'networks'    => (empty($_POST['networks'])) ? '1' : $_POST['networks'],
            'redirect'    => (empty($_POST['redirect'])) ? 0 : 1,
            'latent'      => (empty($_POST['latent'])) ? 0 : 1,
            'animation'   => (empty($_POST['animation'])) ? 0 : 1,
            'rule_id'     => $_POST['rule_id']
        ];

        return $POST;

    }
*/


    # Make and return random hex hash {40}
    public static function make_hash() {

        $base = '';

        for($i = 1; $i <= 10; $i++) {
            $c_key = mt_rand(32, 126);
            $base .= sprintf('%c', $c_key);
        }
        unset($c_key, $i);

        $hash = sha1($base);

        return $hash;

    }


    #
    public static function createFolder($folder) {
        return mkdir($folder, 0777, true);
    }


    #
    public static function recursiveRemoveDirectory($directory) {
        foreach(glob("{$directory}/*") as $file) {
            if(is_dir($file))
                self::recursiveRemoveDirectory($file);
            else
                unlink($file);
        }
        rmdir($directory);
    }


    #
    public static function fixString($string) {

        if(get_magic_quotes_gpc())
            $string = stripcslashes($string);  // remove the automatic escaping quotes

        $string = addslashes($string);  // set manual screening quotes
        $string = htmlentities($string, ENT_QUOTES);  // change '<' to '&lt;'
        $string = strip_tags($string);  // deleting of 'html' and 'php' tags

        return $string;

    }


    # "as_array" fix
    public static function array_extract($array) {

        foreach($array as $key => $item) {
            foreach($item as $value) {
                $array[$key] = $value;
            }
        }

        return $array;
    }


    # "as_array" fix
    public static function array_extract_oneitem($array) {

        foreach($array as $key => $item) {
            foreach($item as $name => $value) {
                $array[$name] = $value;
            }
            unset($array[$key]);
        }

        return $array;
    }


    # Check for enries is exists
    public static function is_exist($query) {

        $count = (int)$query->get('count');

        if($count == 0) {
            return FALSE;
        } else {
            return TRUE;
        }

    }


}
