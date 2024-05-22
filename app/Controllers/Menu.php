<?php

namespace App\Controllers;

class Menu extends BaseController
{

    public function __construct(){
        $this->kitchen_service_url = "http://localhost/vs_ss24_kitchen/public/index.php/api/";
        $this->kitchen_service_apikey = "12345";
    }

    private function data_menu(){
        $curl = curl_init($this->kitchen_service_url."menu/".$this->kitchen_service_apikey);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response, true);
    }

    public function getIndex(){
        //var_dump($this->data_menu());
        $data = $this->data_menu();
        echo view('templates/header');
        echo view('pages/menu', $data);
        echo view('templates/footer');
    }


}