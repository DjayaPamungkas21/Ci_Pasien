<?php

class BMI_model extends CI_Model{

    public $id;
    public $berat;
    public $tinggi;

    public function nilai_bmi(){
        $tinggi = $this->tinggi / 100;
        $nilai_bmi = $this->berat/pow($tinggi,2);
        return $nilai_bmi;
    }

    public function status_bmi(){
        if($this->nilai_bmi() < 18){
            return "berat badan kurang";
        }elseif($this->nilai_bmi()<25){
            return "berat badan normal";
        }elseif($this->nilai_bmi()<35){
            return "berat badan kelebihan";
        }else{
            return "berat badan obesitas";
        }
    }


}


?>