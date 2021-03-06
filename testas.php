<?php

/*
Sukurkite masyvą iš 101 elemento, kurio indeksai yra nuo 0 iki 100. 
Tiems masyvo nariams, kurių indeksas dalijasi iš 10 (0, 10, 20, 30,...100), 
priskirkite reikšmę “A”. Likusiems nariams priskirkite reikšmę “B”. 
Masyvą atspausdinkite naršyklės lange naudodami funkciją print_r();
*/

$masyvas = [];

foreach(range(0, 100) as $key => $value) {
    if ($value % 10 == 0) {
        $masyvas[$key] = 'A';
    } else $masyvas[$key] = 'B';
}
echo '<pre>';
print_r($masyvas);

/*2.	Pakeiskite pirmąjame uždavinyje sukurtą masyvą. 
Visas masyvo reikšmes (“A” ir “B”) pakeiskite masyvais, kurie yra
 atsitiktinio dydžio (ilgio) nuo 3 iki 10. Naujai sukurtų masyvų 
 reikšmes užpildykite atitinkamai “A” arba “B” stringais 
 (pagal tai kokią raidę keičiate į masyvą). Masyvą atspausdinkite naršyklės 
lange naudodami funkciją print_r();
*/

$masyvas1 = [];
$masyvas2 = [];