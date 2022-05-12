<?php

$uri = "http://localhost/proyectos/soapsvc/InsertCategoria.php?wsdl";
$request = "
<soapenv:Envelope xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\" xmlns:xsd=\"http://www.w3.org/2001/XMLSchema\" xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:ins=\"InsertCategoriaSOAP\">
   <soapenv:Header/>
   <soapenv:Body>
      <ins:InsertCategoriaService soapenv:encodingStyle=\"http://schemas.xmlsoap.org/soap/encoding/\">
         <InsertCategoria xsi:type=\"ins:InsertCategoria\">
            <!--You may enter the following 3 items in any order-->
            <nombre_usu xsi:type=\"xsd:string\">".$usuario_nombre."</nombre_usu>
            <apellido_usu xsi:type=\"xsd:string\">".$usuario_apellido."</apellido_usu>
            <correo_usu xsi:type=\"xsd:string\">".$usuario_correo."</correo_usu>
         </InsertCategoria>
      </ins:InsertCategoriaService>
   </soapenv:Body>
</soapenv:Envelope>
";

print("Request : <br>");
print("<pre>".htmlentities($request)."</pre>");

$action = "InsertCategoriaService";
$header = [
    'Method: POST',
    'Connection: Keep-Alive',
    'User-Agent: PHP-SOAP-CURL',
    'Content-Type: text/xml; charset=utf-8',
    'SOAPAction: "'.$action.'"',
];

$ch = curl_init($uri);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

$response = curl_exec($ch);
$error_status = curl_errno($ch);

print("Request : <br>");
print("<pre>".$response."</pre>");
?>