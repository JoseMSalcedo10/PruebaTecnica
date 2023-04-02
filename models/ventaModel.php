
<?php
require_once '../config/bd.php';

class ventaModel{

    public static function cargarCargo(){

        $stmt = Conexion::GetConexion()->prepare("SELECT * FROM cargo");
		$stmt->execute();

        return $stmt -> fetchAll(PDO::FETCH_ASSOC);


    }

    public static function cargarVentas(){

        $stmt = Conexion::GetConexion()->prepare("SELECT * FROM ventas, cargo WHERE cargo.car_id = ventas.ven_cargo ORDER BY cargo.car_id DESC");
		$stmt->execute();

        return $stmt -> fetchAll(PDO::FETCH_ASSOC);


    }

    
    public static function guardarVenta($post){

        $stmt = Conexion::GetConexion()->prepare("INSERT INTO ventas (ven_nombre, ven_apellido, ven_num_documento, ven_valor, ven_cargo, ven_fecha) VALUES(:nombre, :apellido, :documento, :venta, :cargo, :fecha)");

        $stmt->bindParam(":documento", $post['documento'], PDO::PARAM_INT);
        $stmt->bindParam(":venta", $post['venta'], PDO::PARAM_INT);
        $stmt->bindParam(":cargo", $post['cargo'], PDO::PARAM_INT);
        $stmt -> bindParam(":nombre", $post['nombre'], PDO::PARAM_STR);
        $stmt -> bindParam(":apellido", $post['apellido'], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha", $post['fecha'], PDO::PARAM_STR);


		$stmt->execute();

        echo $stmt -> rowCount();


    }
}
?>