<?php

    class Conexion{

        static public function conectar(){

            $link = new PDO("mysql:host=localhost:3308;dbname=cursophp_db","root","");
            return $link;

        }

    }