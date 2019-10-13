# Nfq-homework-1
Nfq pirmos paskaitos namų darbas.

> calculateHomeWorkSum(...$numbers); //root namspace

Naudojant funckiją paprastai be jokių type keitimų ar vertimų tiesiog visus argumentus konvertavo į floatus, nes vienas 
iš argumentų buvo floatas ir tada tiesiog paprastai sudėjo.

> calculateHomeWorkSum(...$numbers): int; //Nfq\Akademija\NotTyped namespace;

Panaudojus tą pačią funkciją, bet uždėjus priverstinį return tipą integer greičiausiai returną konvertavo iš floato
atgal į integerį todėl rezultatas liko tik 6.

> calculateHomeWorkSum(int...$numbers): int; //Nfq\Akademija\Soſt namespace; 

Naudojant tą pačią funkciją, bet šįkart uždėjus priverstinį ir argumentų tipą integer greičiausiai visus argumentus
iškart konvertuoja į integer tipą. Taigi jau prieš susumuojant juos visus jie visi yra integer, taigi returno metu jau 
nebereikia konvertuot.

> calculateHomeWorkSum(int...$numbers): int; //Nfq\Akademija\Strict namespace su declare(strict_types=1) direktyva; 

Pridėjus prie tos pačios funkcijos ir direktyvą strict_types=1 buvo tikėtasi, kad išmes klaidą, bet to nebuvo. Daugiau 
paskaičius paaiškėjo, kad jeigu failas, iš kurio yra kreipiamasi, neturi šitos direktyvos, tai strict_types direktyva yra
praignoruojama. Norint, kad būtų užforsuotas argumentų ir returnų tipų tikrinimas, turėtų būti visuose failuose įjungta
šita direktyva.
