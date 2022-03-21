<?php

namespace App\Controllers;

class Kalkulator extends BaseController
{
    public function index()
    {
        return view('view_kalkulator');
    }

    public function hasil()
    {
        if (isset($_POST['submit'])) {
            if (is_numeric($_POST['number1']) && is_numeric($_POST['number2'])) {
                if ($_POST['operation'] == '+') {
                    $total = $_POST['number1'] + $_POST['number2'];
                }
                if ($_POST['operation'] == '-') {
                    $total = $_POST['number1'] - $_POST['number2'];
                }
                if ($_POST['operation'] == '*') {
                    $total = $_POST['number1'] * $_POST['number2'];
                }
                if ($_POST['operation'] == '/') {
                    $total = $_POST['number1'] / $_POST['number2'];
                }
                echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} = {$total}</h1>";
            } else {
                echo 'Punten, nilai yang di input bukan numerik';
            }
        }
    }
}