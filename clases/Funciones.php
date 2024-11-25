<?php
    class Funciones {
        public static function seccionActual(): string {
            $seccion = isset($_GET['sec']) ? $_GET['sec'] : 'inicio';
            return $seccion;
        }

        public static function randomNum($min, $max ): string {
            $num = random_int($min, $max);
            return $num;
        }
        public static function mostrar($a) : void {
            echo '<pre>';
            echo print_r($a);
            echo '</pre>';
        }
    }
?>