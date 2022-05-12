<?php 

//Importamos la libreria ECONEA/NUSOAP
require_once "vendor/econea/nusoap/src/nusoap.php";

//Nombre del servicio
$namespace = "InsertCategoriaSOAP";
$server = new soap_server();
$server->configureWSDL("InsertCategoria", $namespace);
$server->wsdl->schemaTargetNamespace = $namespace;

//Estructura del servicio
$server->wsdl->addComplexType(
    'InsertCategoria',
    'complexType',
    'struct',
    'all',
    '',
    array(
        'nombre_usu' => array('name' => 'nombre_usu', 'type' => 'xsd:string'),
        'apellido_usu' => array('name' => 'apellido_usu', 'type' => 'xsd:string'),
        'correo_usu' => array('name' => 'correo_usu', 'type' => 'xsd:string'),
    )
);

//Estructura de la respuesta del servicio
$server->wsdl->addComplexType(
    'response',
    'complexType',
    'struct',
    'all',
    '',
    array(
        'Resultado' => array('name' => 'Resultado', 'type' => 'xsd:boolean'),
    )
);

$server->register(
    "InsertCategoriaService",
    array("InsertCategoria" => "tns:InsertCategoria"),
    array("InsertCategoria" => "tns:response"),
    $namespace,
    false,
    "rpc",
    "encoded",
    "Inserta una nueva categoria"
);

function InsertCategoriaService($request){
    require_once "Config/Conexion.php";
    require_once "Models/Usuario.php";

    $usuario = new Usuario();
    $usuario->insertUsuario($request["nombre_usu"],$request["apellido_usu"],$request["correo_usu"]);

    return array(
        "Resultado" => true
    );
}

$POST_DATA = file_get_contents("php://input");
$server->service($POST_DATA);
exit();

?>