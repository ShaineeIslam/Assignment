
<?php

/*/ this function convert array to xml
function convert_to_xml(SimpleXMLElement $obj, array $array)
{
    $attr = "Attribute_";
    // iterate array 
    foreach ($array as $key => $attribute) {
        // if value is array
        if (is_array($attribute)) {
            // create new child
            $new_obj = $obj->addChild($key);
            // call function recursievely with obj and arrtibute
            convert_to_xml($new_obj, $attribute);
        } else {
            // if attribute is not found
            if(strpos($key, $attr) !== false){
                // add attribute into xml file
                $obj->addAttribute(substr($key, strlen($attr)), $attribute);
            }else{
                // else add child into them
                $obj->addChild($key, $attribute);
            }
        }
    }
}*/

$characters = array (
    array("name" => "Peter Parker \n",
    "email" => "peterparker@mail.com",),
    array("name" => "Clark Kent",
    "email" => "clarkkent@mail.com",),
    array("name" => "Harry Potter",
    "email" => "harrypotter@mail.com",),
  );

  array_push($characters, array("name" => "Wade Wilson",
  "email" => "wadewilson@mail.com"));

/*/ create an object of simpleXMLElement
$xml = new SimpleXMLElement('<characters/>');
// call function passing xml object and array
convert_to_xml($xml, $characters);
$xml_document=$xml->asXML();
// open file characters.xml for writing purpose
$myfile = fopen("characters.xml", "w");
// write into file
fwrite($myfile, $xml_document);
// close file
fclose($myfile)*/

?>