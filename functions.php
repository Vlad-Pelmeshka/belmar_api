<?php

function getStatuses($start_date, $end_date, $limit){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crm.belmar.pro/api/v1/getstatuses',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
        "date_from" : "' . get_date_difference($start_date) . '", 
        "date_to" : "' . get_date_difference($end_date) . '",   
        "page" : 0,     
        "limit" : ' . $limit . '
        }',
        CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'token: ba67df6a-a17c-476f-8e95-bcdb75ed3958'
        ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    return $response;
}

function get_date_difference($date) {
    $now = new DateTime();
    $date_obj = DateTime::createFromFormat('Y-m-d', $date);

    if ($date_obj > $now) {
        return false;
    }

    $interval = $now->diff($date_obj);
    $diff = $interval->format('%R%a');

    if ($diff == '+0') {
        return 'now';
    } else {
        return $diff . ' days';
    }
}

function setStatuse($email, $first_name, $last_name, $phone){
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crm.belmar.pro/api/v1/addlead',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
        "firstName" : "' . $first_name . '",                 // require
        "lastName" : "' . $last_name . '",                  // require
        "phone" : "' . $phone . '",                     // require
        "email" : "' . $email . '",                     // require
        "countryCode" : "RU",               
        "box_id" : "28",                    
        "offer_id" : "3",                  
        "landingUrl" : "' . $_SERVER['HTTP_REFERER'] . '",                
        "ip" : "' . $_SERVER['REMOTE_ADDR'] . '",                        
        "password" : "qwerty12",
        "language" : "ru",
        "clickId" : "",
        "quizAnswers" : "",
        "custom1" : "",
        "custom2" : "",
        "custom3" : ""
        }',
        CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'token: ba67df6a-a17c-476f-8e95-bcdb75ed3958'
        ),
    ));
  
   $response = curl_exec($curl);
  
   curl_close($curl);
   $result = json_decode($response, true);
   
   if($result['status'] == "false"){
       echo $result['error'];
   }else{
       echo "Success added";
   }
   
//   return $response;

}

