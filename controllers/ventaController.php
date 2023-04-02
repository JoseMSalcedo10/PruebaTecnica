<?php

require_once '../models/ventaModel.php';

class ventaController{
    public static function cargarCargo(){
        
        //validar si el usuario existe
        $obj = new ventaModel;
        $val = $obj::cargarCargo(); 

        $option = '<option value="#" selected>Seleccione cargo</option>';
        
        foreach($val as $key => $value){
            $option .= '<option value="'.$value['car_id'].'">'.$value['car_desc'].'</option>';
        }

        echo $option;
    }

    public static function cargarVentas(){
        
        //validar si el usuario existe
        $obj = new ventaModel;
        $val = $obj::cargarVentas(); 

        $option = "<thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>num. documento</th>
                <th>Valor venta</th>
                <th>cargo</th>
                <th>fecha venta</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>num. documento</th>
                <th>Valor venta</th>
                <th>cargo</th>
                <th>fecha venta</th>
            </tr>
        </tfoot>
        <tbody>";
        
    
        
            foreach($val as $key => $value){

                if($value['car_id']  == 3){
                    $option .="<tr>
                        <td>".$value['ven_id']."</td>
                        <td>".$value['ven_nombre']."</td>
                        <td>".$value['ven_apellido']."</td>
                        <td>".$value['ven_num_documento']."</td>
                        <td>$". number_format($value['ven_valor'], 0, ',', '.')."</td>
                        <td>".$value['car_desc']."</td>
                        <td>".$value['ven_fecha']."</td>
                    </tr>";
                }else{
                    $option .="<tr>
                        <td>".$value['ven_id']."</td>
                        <td>".$value['ven_nombre']."</td>
                        <td>".$value['ven_apellido']."</td>
                        <td>".$value['ven_num_documento']."</td>
                        <td>No aplica</td>
                        <td>".$value['car_desc']."</td>
                        <td>".$value['ven_fecha']."</td>
                    </tr>";
                }
            }

        $option .= "</tbody>";


        echo $option;
    }


    public static function calcularComisión(){
        
        //validar si el usuario existe
        $obj = new ventaModel;
        $val = $obj::cargarVentas(); 

        $option = "<thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>num. documento</th>
                <th>Valor venta</th>
                <th>cargo</th>
                <th>fecha venta</th>
                <th>Comisión</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>apellido</th>
                <th>num. documento</th>
                <th>Valor venta</th>
                <th>cargo</th>
                <th>fecha venta</th>
                <th>comisión</th>
            </tr>
        </tfoot>
        <tbody>";

        $totalvendedores = 0;
    
            foreach($val as $key => $value){

                if($value['car_id']  == 3){
                    $comision1 = $value['ven_valor'] / 100;
                    $comision = $comision1 * 5;

                    $option .="<tr>
                        <td>".$value['ven_id']."</td>
                        <td>".$value['ven_nombre']."</td>
                        <td>".$value['ven_apellido']."</td>
                        <td>".$value['ven_num_documento']."</td>
                        <td>$". number_format($value['ven_valor'], 0, ',', '.')."</td>
                        <td>".$value['car_desc']."</td>
                        <td>".$value['ven_fecha']."</td>
                        <td>$". number_format($comision, 0, ',', '.')."</td>
                    </tr>";

                    $totalvendedores += $value['ven_valor'];
                }else{
                    $comision1 = $totalvendedores / 100;
                    $comision = $comision1 * 10;

                    $option .="<tr>
                        <td>".$value['ven_id']."</td>
                        <td>".$value['ven_nombre']."</td>
                        <td>".$value['ven_apellido']."</td>
                        <td>".$value['ven_num_documento']."</td>
                        <td>No aplica</td>
                        <td>".$value['car_desc']."</td>
                        <td>".$value['ven_fecha']."</td>
                        <td>$". number_format($comision, 0, ',', '.')."</td>
                    </tr>";
                }
            }

        $option .= "</tbody>";


        echo $option;
    }

    public static function guardarVenta($post){
        
        //validar si el usuario existe
        $obj = new ventaModel;
        $val = $obj::guardarVenta($post); 


    }
}


$funcion = $_POST['funcion'];
if ($funcion == 'cargarCargo') {
    ventaController::cargarCargo();
}if ($funcion == 'guardarVenta') {
    ventaController::guardarVenta($_POST);
}
if ($funcion == 'cargarVentas') {
    ventaController::cargarVentas($_POST);
}if ($funcion == 'calcularComisión') {
    ventaController::calcularComisión($_POST);
}






?>