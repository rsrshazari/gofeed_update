<?php
$data=array(
 "firstName" => $name,
 "lastName" => "",
 "email" => $email,
 "mobilePhone" => $phone,
 "leadDate" => $ldate,
 "comments" => "Website - Quick Enquiry",
 "originFrom" => "Auto Source",
 "product" => "",
 "campaign" => "VD Website",
 "isUpdatefromUIDate" => false,
 "isImported" => true,
 "DumpdataObjectId" => $exid,
 "tenantId" => 219
);
$new[]=$data;
$data2=json_encode($new);


print_r($data2);
?>
