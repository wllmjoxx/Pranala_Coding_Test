<?php

defined('BASEPATH') or exit('Access Blocked!');
class Segitiga_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    function segitiga()
    {
        $input_angka = $this->input->post('input_angka');
        // $input_angka = 1345000;

        //input angka dijadikan array
        $array_input = str_split($input_angka);

        $angka1 = count($array_input);

        //menghitung length dari $input_angka
        // $angka = strlen($input_angka);

        for ($i = 0; $i < $angka1; $i++) {
            for ($j = 0 - 1; $j < $i; $j++) {
                echo $array_input[$i];
                echo $array_input[$i] = "";
            }
            for ($k = 0 - 1; $k < $j; $k++) {
                echo "0";
            }
            echo "<br>";
        }
        // echo $angka1;
    }

    function ganjil()
    {
        $input_angka = $this->input->post('input_angka');
        // $input_angka = 1345000;
        for ($i = 0; $i < $input_angka; $i++) {
            if (($i % 2) != 0) {
                echo $i . "<br>";
            }
        }
    }

    function prima()
    {
        $input_angka = $this->input->post('input_angka');
        // $input_angka = 1345000;
        for ($i = 1; $i <= $input_angka; $i++) {
            $a    = 0;
            for ($j = 1; $j <= $i; $j++) {
                if ($i % $j == 0) {
                    $a++;
                }
            }
            if ($a == 2) {
                echo $i . ' ';
            }
        }
    }
}
