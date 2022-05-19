<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {  
        return view('form_insert');
    }
    public function apidummy()
    {
      //sudah mencoba cara ini tapi tidak dapat solusi untuk memasang app-id pada header
      $url = "http://dummyapi.io/data/v1/";
      $get_url = file_get_contents($url);
      $decode = json_decode($get_url, TRUE);
      $encode = json_encode($geturl);
      header('Content-Type: application/json; charset=utf-8;app-id:62847b5f1285a13431fab67f');
      echo $encode;
    }
    public function checkdata()
    { 
      $email      = $this->request->getPost('email');
      $password   = $this->request->getPost('password');
      $data = json_decode(file_get_contents(WRITEPATH."data.json"), true);
      $x = 0;
      foreach ($data as $test) {
          if($email == $test['email'] && $password == $test['password']){
          $x = 1;
          echo '1';
          }
          else{
            $x = 0;
            echo "salah";
            echo $email;
            echo $password;
          }
        }
        if($x = 1){
          $array = [
            'title' => 'table data',
            'data'  => $data
          ];
          return view('table', $array);
        }
        else{
          return view('form_insert');
        } 
    }
    public function addfile()
    {
      return view('add');
    }
    public function adddata()
    {
      $id             = "asagasgas";
      $name           = $this->request->getPost('nama');
      $email          = $this->request->getPost('email');
        $password       = $this->request->getPost('password');
        echo $id;
        echo $name;
      $data = json_decode(file_get_contents(WRITEPATH."data.json"), true);
      $json_arr[] = array('id'=>$id, 'name'=>$name, 'email'=>$email, 'password'=>$password);
      array_push($data, $json_arr);
      file_put_contents(WRITEPATH."data.json", json_encode($data));

      $array = [
        'title' => 'table data',
        'data'  => $data
      ];
      echo view('table', $array);
    }
    public function test(){
      $data = json_decode(file_get_contents(WRITEPATH."data.json"), true);
      $json_arr[] = array('id'=>'test', 'name'=>'$name', 'email'=>'$email', 'email'=>'$password');
      array_push($data, $json_arr);
      file_put_contents(WRITEPATH."data.json", json_encode($data));
    }
}
