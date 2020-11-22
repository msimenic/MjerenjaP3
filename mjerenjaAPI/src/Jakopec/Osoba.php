<?php
namespace Jakopec;

use stdClass;
use Faker\Factory;

class Osoba
{
    public function getOsobe()
    {
        $faker = Factory::create('hr_HR');
        $osobe=[];
        //dovući podatke iz baze
        for($i=0;$i<100;$i++){
            $o = new stdClass();
            if($i<50){
                $o->ime=$faker->firstNameMale;
            }else{
                $o->ime=$faker->firstNameFemale;
            } 
            $o->prezime=$faker->lastName;
            $o->grad=$faker->city;
            $osobe[]=$o;
        }
        return $osobe;
    }
}