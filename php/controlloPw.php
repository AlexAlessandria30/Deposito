<?php


function lunghezzaCheck($string)
{

    if (strlen($string) >= 8) {
        return true;
    };
    return false;
};



function numeroCheck($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i])) {
            return true;
        };
    };
    return false;
};


function maiuscolaCheck($string)
{
    for ($i = 0; $i <  strlen($string); $i++) {
        if (ctype_upper($string[$i])) {
            return true;
        }
    }
    return false;
};

function caratteriSpeciali($string)
{

    $specialcar = ['&', '%', '$', '@', '#', '!'];

    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $specialcar)) {
            return true;
        }
    }

    return false;
};


function checkpassword($string)
{
    if (lunghezzaCheck($string) && numeroCheck($string) && maiuscolaCheck($string) && caratteriSpeciali($string)) {
        return true;
    }
    return false;
}



function fine()
{

    $count = 0;

    do {

        if ($count < 3) {
            $count += 1;

            $password = readline('Inserisci la password  ');
        } else {
            echo "Account bloccato \n";
            break;
        }
    } while (!checkpassword($password));
    echo " Benvenuto \n";
   
};

fine();
