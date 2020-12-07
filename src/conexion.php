<?php

    /**
     * Universidad Politecnica de San Luis Potosí
     * Archivo de conexión a BD
     * 
     * Integrantes:
     * Yanelli Decire Lopez Estrada
     * Ramón Emmanuel Salazar Canchola
     * Edgardo Victorino Marin
     * Manuel Monsivais
     */

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $mNombre    = $_POST['nombre'];
    $mCarrera   = $_POST['carrera'];
    $mPromedio  = $_POST['promedio'];
    $mP1        = $_POST['p1'];
    $mP2        = $_POST['p2'];
    $mP3        = $_POST['p3'];
    $mP4        = $_POST['p4'];
    $mP5        = $_POST['p5'];
    $mP6        = $_POST['p6'];

    insertRegister($mNombre, $mCarrera, $mPromedio, $mP1, $mP2, $mP3, $mP4, $mP5, $mP6);

    function insertRegister($nombre, $carrera, $promedio, $p1, $p2, $p3, $p4, $p5, $p6){
        
        try {
            $handler = new mysqli("db", "root", "example");

            $db_selected = mysqli_select_db($handler, 'formatos');
            if (!$db_selected) {
                $query = "CREATE DATABASE formatos";
              
                $handler->query($query);
                mysqli_select_db($handler, 'formatos');
            }

            $query = "SELECT id_tutelado FROM forma3_2a9";
            $table_exist = $handler->query($query);

            if(empty($table_exist)) {
                $query = "CREATE TABLE forma3_2a9 (
                    id_tutelado INT(5) NOT NULL AUTO_INCREMENT,
                    nombre VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_spanish_ci,
                    carrera VARCHAR(45),
                    promedio DECIMAL,
                    pregunta1 TEXT(700),
                    pregunta2 TEXT(700),
                    pregunta3 TEXT(700),
                    pregunta4 TEXT(700),
                    pregunta5 TEXT(700),
                    pregunta6 TEXT(700),
                    PRIMARY KEY (id_tutelado)
                ) ENGINE=InnoDB;";

                $handler->query($query);
            }

            $query  = "INSERT INTO forma3_2a9 (nombre, carrera, promedio, pregunta1, pregunta2, pregunta3, pregunta4, pregunta5, pregunta6) ";
            $query .= "VALUES ('$nombre', '$carrera', $promedio, '$p1', '$p2', '$p3', '$p4', '$p5', '$p6');";

            
            $handler->query($query);
            $handler->close();

            echo "<script>
                    alert('Registro insertado');
                    window.location.href='index.php';
                </script>";

        } catch (Exception $e) {
            print "�Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }


?>