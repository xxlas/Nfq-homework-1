# Nfq-homework-1
Nfq pirmos paskaitos namų darbas.

> calculateHomeWorkSum(...$numbers); //root namspace

Funkcijoje array_sum argumentai yra tikrinami iš eilės. Iš pradžių yra lyginami 3 ir 2.2, kadangi vienas iš elementų yra
float tipo jie konvertuojami į floatus ir jų rezultatas tampa float tipo. Tada 5.2 yra lyginamas su '1', kadangi 5.2 yra
float tipo tai '1' irgi yra konvertuojamas į float tipą.Funkcija array_sum grąžina number, kas yra integer arba float. 
Taigi galiausiai yra grąžinamas float tipo atsakymas kuris yra 6.2.

> calculateHomeWorkSum(...$numbers): int; //Nfq\Akademija\NotTyped namespace;

Panaudojus tą pačią funkciją, bet uždėjus priverstinį return tipą integer, php, jeigu įmanoma, bando returninamą kintąmąjį
konvertuoti į nurodytą return tipą kas šiuo metu yra integer. Šitaip 6.2 yra paverčiamas į 6.

> calculateHomeWorkSum(int...$numbers): int; //Nfq\Akademija\Soſt namespace; 

Naudojant tą pačią funkciją, bet šįkart uždėjus priverstinį ir argumentų tipą integer visi argumentai jeigu įmanoma yra
konvertuojami į integer tipą. Kai argumentai pasiekia array_sum funkciją jie jau visi būna integer, todėl funkcija irgi 
grąžina integer tipo kintąmąjį. Šiuo atveju returnui nebereikia konvertuoti atsakymo į integer tipą.

> calculateHomeWorkSum(int...$numbers): int; //Nfq\Akademija\Strict namespace su declare(strict_types=1) direktyva; 

Pridėjus prie tos pačios funkcijos ir direktyvą strict_types=1 buvo tikėtasi, kad išmes klaidą, bet to nebuvo. Daugiau 
paskaičius paaiškėjo, kad jeigu failas, iš kurio yra kreipiamasi, neturi šitos direktyvos, tai strict_types direktyva yra
praignoruojama. Norint, kad būtų užforsuotas argumentų ir returnų tipų tikrinimas, turėtų būti visuose failuose įjungta
šita direktyva.
