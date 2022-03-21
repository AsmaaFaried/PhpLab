<?php

class AccessApi
{
    public static function accessApi($key)
    {
        try {
          
            $endpoint_url = api_url . $key . "&APPID=" . api_key;

        } catch (\PDOEXCEPTION$th) {
            echo $th->getMessage("There is a problem with this webservice");
        }

        //initialize connection and return handler "default: GET Method"
        $ch = curl_init($endpoint_url);

        //set option >> option : value >>> one of the options in curl help
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        //execute and return json
        $result = curl_exec($ch);

        //close connection
        curl_close($ch);
        return $result;
    }
}