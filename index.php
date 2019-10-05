<?php 

class Translator {
    private $lang;

    public function __construct($lang = 'en') {
        $this->lang = $lang;
    }

    public function getLang() {
        return $this->lang;
    }

    public function translate($arg1, $arg2 = '') {
        $lang = require('lang/' . $this->getLang() . '.php');
        
        if ($arg1 == 'welcome' && $arg2 == '') {
            if ($this->getLang() == 'en') {
                $ans = "Welcome, guest!";
                return $ans;
            } elseif ($this->getLang() == 'ru') {
                $ans = "Добро пожаловать, Гость!";
                return $ans;
            }
        } elseif ($arg1 == 'welcome') {
            return sprintf($lang[$arg1], $arg2);
        } else {
            return sprintf($lang[$arg1], $arg2);
        }
    } 
}

$trans = new Translator; 
echo $trans->getLang() . PHP_EOL;
echo $trans->translate('welcome', 'Alimi') . PHP_EOL;
