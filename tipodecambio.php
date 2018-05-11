<?php


$url = 'http://www.banguat.gob.gt/variables/ws/TipoCambio.asmx?WSDL';
$client = new SoapClient($url);
$res = $client->TipoCambioDia(); 
$arrayres = objectToArray($res);
//print_r($arrayres);

print_r($arrayres['TipoCambioDiaResult']['CambioDolar']['VarDolar']['fecha']);
echo "<br>";
print_r($arrayres['TipoCambioDiaResult']['CambioDolar']['VarDolar']['referencia']);


 function objectToArray($d) {
        if (is_object($d)) {          
            $d = get_object_vars($d);
        }
		
        if (is_array($d)) {
           
            return array_map(__FUNCTION__, $d);
        }
        else {
        
            return $d;
        }
 }



?>