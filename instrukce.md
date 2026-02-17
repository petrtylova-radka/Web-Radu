(zadání pro AI agenta k tvorbě webu)

**Situace**
Jsi zkušený webový vývojář a designér s expertízou v tvorbě moderních, responzivních webových stránek. Tvým úkolem je vytvořit kompletní malý web podle specifikací níže.

**Cíl**
Dodej uživateli kompletní, profesionální mobile-first webovou stránku, která je vizuálně atraktivní, funkční na všech zařízeních a připravená k okamžitému použití.

**Úkol**
Vytvoř funkční web, který bude obsahovat:
Strukturovaný komentovaný HTML5 kód s validní sémantikou
Responzivní design (mobile-first přístup)
CSS styly pro přizpůsobení všem obrazovkám (4K monitory, desktop, tablet, mobil)
Používej moderní CSS vlastnosti (CSS variables, transitions, animations)
CSS jednotky velikosti: pro běžný text použij rem, pro nadpisy použij clamp 
Základní JavaScript pro interaktivitu (na jemné oživení stránek)
Dbejte na bezpečnost webu (CSP hlavička a nastavení bezpečnostní HTTP hlavičky, u kontaktního formuláře řeš ochranu proti spamu pomocí honeypot)
Nedávej do soubor .htaccess pokyny k přesměrování (to se řeší na úrovni hostingu)

**Znalosti**
Zajisti rychlé načítání a optimalizovaný výkon
Dodržuj best practices pro přístupnost (barevný kontrast, velikost písma, ARIA)
Vlož favicon ve formát svg (pokud ho nemáš dodaný, vytvoř ho)
Pokud je potřeba Cookie lišta, vytvoř ji v barvách webu


**Základní SEO**
Strukturuj nadpisy H1-H6
Přidej meta title a description na každé stránce
Vytvoř strukturovaná data – LocalBusiness, FAQ, Article (pokud je to relevantní)
Přidej do adresáře soubory sitemap.xml, robot.txt a llms.txt
Urči kanonickou url
Obrázkům dej alt popisky
Propoj stránky vnitřními odkazy
Vytvoř Open Graph meta tagy (náhled webu pro Facebook a další sociální sítě)


**Optimalizace obrázků**
Přidej lazy loading ke všem obrázkům, které nejsou vidět hned při načtení stránky (below the fold). Tj. u hero sekce lazy loading nedělej.
Obrázky ti dodám zkomprimované ve formátu jpg nebo png, ale kdyby se ti zdály velké, řekni si o formát avif.
**Vizuální hierarchie a čitelnost**
Jasná typografická hierarchie (nadpisy H1-H6, konzistentní velikosti)
Dostatečný kontrast mezi textem a pozadím (minimum 4.5:1 pro běžný text)
Čitelné fonty s českou diakritikou
Správné řádkování (line-height 1.5-1.8 pro odstavce)
Nikdy nezarovnávej text do bloku
Optimální šířka řádku pro text (max 70% obrazovky)

**Layout**
Šířku celého webu dej na 85% obrazovky
Jasné oddělení sekcí a obsahových celků
Vyvážené použití bílého prostoru (white space)
Intuitivní navigace - logo vlevo, hamburger menu na mobilu pravo
Dej si záležet na patičce webu
Jednopísmenové znaky (spojky, předložky) zalamuj na nový řádek
Jednotky (Kč, m, kg, Eur, atd.) spoj s číslem nedělitelnou mezerou
Datum piš ve formátu 1. 1. 2026 a mezery dej nedělitelné

**Obsah**
Stručné a srozumitelné texty
Výrazné nadpisy s klíčovými informacemi a CTA tlačítka
Vizuální prvky podporující obsah (ikony, obrázky, grafika)
Logické uspořádání informací (nejdůležitější nahoře)
Chybová stránka (místo „404“ dej ikonu <i class="bi bi-emoji-frown"></i> a přidej ji na web pomocí příkazu v souboru .htaccess: ErrorDocument 404 /404.html)
Kontrola povinných údajů na webu: jméno, sídlo, IČ, zápis v rejstříku

**Konzistence**
Jednotný styl tlačítek, karet a komponent
Stejný padding/margin napříč podobnými elementy
Stejné zaoblení prvků
Konzistentní ikonografie
Stíny karet pouze velmi jemné
Jednotný projev značky (brand voice)
Konzistentní použití barev napříč celým webem
Jednotný spacing a odsazení (používej jednotný systém, např. 8px grid)

**Barevná paleta**
Omezený počet barev (2-3 hlavní + neutrální)
Primární barva pro CTA (call-to-action) tlačítka
Neutrální jemné barvy pro pozadí 
Pro text #333333
Brand barvy (HEX): 
   - primární: #4F006D
   - sekundární: #F5E7DE
     - pozadí: jemné barevné přechody jako jsou na vzoru herosekce na obrázku, který ti vložím Hero028.png


**Fonty**
Zvol vhodný patkový nebo bezpatkový font podle obsahu webu
Pokud není jasné, zvol moderní sans-serif font (př. Outfit)


**Struktura**
více stránkový web
Položky menu
Domů
Chci web
Chci rozjet podcast
Chci e-mailing
O mně
Kontakt




**Design**
Design hero sekce (celého webu) vytvoř podle vzoru, který ti dám před začátkem tvorby ve formátu jpg - barevný přehod udělej v brandových barvách, ale jemně, fotku můžeš udělat větší, než je ve vzoru a využij glass efekt
využij moderní prvek bento grid layout se zaoblenými rohy a navrhni na hlavní stránku, aby tam seděl podle kontextu webu, pracuj s jemnými barevnými gradienty, micro-animace na hover.
**obrázky**
Na webu použij fotky (př. přílohy), které najdeš ve složce 
Obrazky/Hlavni – pro Hlavní stranu (hero sekce atd.)
Obrazky/Chci_emaling 
Obrazky/Chci_rozjet_podcast
Obrazky/Chci_web
Obrazky/O_mne
Vyber vhodnou fotku do patičky webu

**texty**
Na webu použij tyto texty pro jednotlivé sekce / stránky. Drž se jich doslova a nic neměň ani nepřidávej. 
*Hlavní strana - Hero sekce*
Vyřeším technické zázemí online podnikání za vás
Postavím vám web, rozjedu podcast a nastavím systémy tak, aby všechno fungovalo




Možná jste se nechtěně stala technickou manažerkou vlastního podnikání...
Vaše podnikání roste. Nápady máte. Chuť tvořit taky. Jenže místo tvoření se věnujete technkáliím a nastavení.
Pokaždé, když chcete něco vypustit ven, zaseknete se na věcech, které vás nebaví a berou vám energii.
Konečně byste chtěla fungující e-mailing a aby e-maily nepadali do spamu.
Máte už roky v šuplíku podcast, který chcete vypustit do světa, ale netušíte, kde začít.
Tohle všechno můžu převzít za vás
Hlídám návaznosti, nastavuji systémy a držím věci v chodu, abyste se vy mohla vrátit k tomu, co vás skutečně živí a baví.


Pomůžu vám postavit funkční ekosystém vašeho online podnikání
Webovky
Vytvořím vám rychlý přehledný web, připravený prodávat.
Mailing
Propojím a nastavím tak, aby měl vysokou doručitelnost a byl automatizovaný.
Podcasty
Kompletně vám zpracuji podcast, ať dál neleží v šuplíku, ale pracuje pro vás.


Tyto reference od svých klientek dostávám
Radka je přesně ten typ člověka, se kterým máš pocit, že všechno jde hravě. Je nadšená, veselá a její energie tě okamžitě přepne do módu „tohle zvládneme s lehkostí“.
Jako VA i webdesignérka je neuvěřitelně ochotná, podporující a spolehlivá – věci nejen řeší, ale opravdu dotahuje do detailu.
S Radkou za zády máš jistotu, klid a zároveň pocit, že v online podnikání nejsi sama. Tuhle ženu prostě chceš mít po svém boku.
Zuzka Vařeková Stránská Copywriterka


Myslela jsem si o sobě, že jsem schopná se ledacos naučit, dříve jsem vždy pracovala u počítače a s obchodními softwary, které jsem i školila.
Díky Alchymii a taky tvojí práci jsem zjistila, že na to nemám. A myslím to v dobrém, že prostě to, co děláš ty, prostě není moje. Ani hlava už mi na to dost dobře nefunguje a s perimenopauzou se to jen potvrzuje. Že je potřeba, aby takovou práci dělali jiní a pokud možno nejlíp tak skvěle jako ty!
Vždycky mi přišlo neuvěřitelné, co všechno máš pod palcem. Jak moc jsou ti ty technické věci přirozené. Je to pro mě fascinující.
Kláři Čechová Podpora pro zákazníky


Spolupráci můžeme navázat dvěma způsoby
Buď vám pomohu s konkrétní částí, která vás brzdí.
Anebo budu vaším dlouhodobým technickým backupem.
Moje kapacita je ale omezená, proto si pro spolupráci vybírám projekty, které jsou mi blízké. Aktuálně mám kapacitu jen na 2. Sedneme si?
CTA: DOMLUVIT SEZNAMOVACÍ CALL


V technickém světě se pohybuji s přirozenou lehkostí. A mluvím o něm tak, že mi rozumíte
Moje kariéra začala v prostředí, kde bylo potřeba rozumět technice i lidem zároveň. Překládala jsem požadavky zákazníků do řeči ajťáků – a složitá technická vysvětlení zpátky do srozumitelného jazyka.
Dnes tuto dovednost používám v online podnikání. Nezahlcuji vás tím, co vědět nepotřebujete. Hlídám návaznosti, dotahuji detaily a přemýšlím technicky tak, aby vy nemusely.
Zkušenosti jsem sbírala mimo jiné v Czechitas a při dlouhodobé spolupráci s online podnikatelkou Lucií Harnošovou, kde jsem měla na starosti kompletní technické zázemí.
Dnes jsem na volné noze a spolupracuji s podnikatelkami, které už na to nechtějí být samy.
Více o mé cestě



Nejste si jistá, jestli vyřeším i váš problém?
Napište mi. Domluvíme si 30minutový seznamovací call.


*Patička*
Nenašla jste tu službu, kterou právě potřebujete? Nebo si nejste jistá, jaké systémy dávají vašemu podnikání smysl?
Domluvme si hodinovou konzultaci. Společně projdeme vaši situaci a navrhnu řešení, které bude funkční a udržitelné.
Cena: 1 400 Kč/hod., platba předem
CTA: DOMLUVIT HODINOVOU KONZULTACI


jsem@radkapetrtylova.cz
+420 736 282 264
FB IG LI
https://www.facebook.com/petrtylova.radu
https://www.instagram.com/petrtylova.radka
https://www.linkedin.com/in/petrtylova-radka/ 


*Stránka Chci web*
Postavím vám web, který stojí na smysluplné marketingové strategii


Web není jen hezká vizitka.
Je to místo, kde si vaše klientky během chvíle ujasní, že jste pro ně ta pravá
Na tvorbě webů spolupracuji se zkušenou copywriterkou a marketžačkou Lucií Kozielovou. A každou spolupráci na webu otevíráme marketingovým workshopem a otázkami, které ovlivňují celou vaši značku.
Například:
S čím za vámi zákaznice nejčastěji přichází? V jakém jsou emocionálním rozpoložení? Jakou změnu díky vám zažijí?
Co se vám opakuje v referencích?
...


Takový web vychází z hlubokého porozumění vašim zákazníkům. A může vypadat třeba takto:


Ukázky webů
https://ondrejpetrtyl.cz/


Výsledkem pro vás není jen web, ale celkové ujasnění vaší značky
Co vám to přinese strategicky
Budete mít jasno, ke komu má váš web mluvit.
Ujasníte si strukturu služeb tak, aby dávala smysl vám i zákaznicím. Váš web bude vědomě vést k akci
Co získáte technicky
Moderní, rychlý web optimalizovaný pro všechna zařízení
Plné vlastnictví (doména, hosting, admin přístupy)
Napojení na systémy (Fapi, SmartEmailing, rezervační systém, ...)


Investice do takového webu začíná na 45 000 Kč
Součástí je úvodní marketingový workshop, copywriting, UX, grafika, vytvoření a zprovoznění optimalizovaného webu postaveného na WordPress (Divi).
Napojení na další systémy (Fapi, SmartEmailing apod.) řešíme zvlášť.
CTA: DOMLUVIT SI NEZÁVAZNÝ ÚVODNÍ CALL


*Stránka: Chci rozjet podcast*
Rozjedu vám podcast
Vy mluvte. Já z vašich materiálů vytvořím profesionální epizody a postarám se o jejich distribuci


Pomůžu vám z jedné epizody vytěžit maximum
Vám stačí sdílet své myšlenky a nahrávat další epizody. To ostatní už zařídím za vás:
Vystříhám dlouhé mezery a výplňková slova,
přidám hudbu a titulky,
vytvořím intro a outro,
naplánuji publikaci epizod napříč platformami (YouTube, Spotify, Apple Podcasts),
nastavím automatizované zveřejnění na webu,
a připravím sérii reels pro publikaci na sociálních sítích.


Co na tuto službu říkají ženy, kterým jsem podcast rozjela
Radka je hotový poklad, nemohla jsem si přát lepší pravou ruku při startování podcastu.
Je to úplně poprvé, kdy jsem sebe a můj podcast svěřila do rukou někomu jinému než sobě a všechno šlape jako hodinky. Radka za mě vše zařídila, nastavila, udělala i grafiku.
Samotné by mi to trvalo dny, ale s Radka vše zvládla v rámci několika hodin. Chcete taky rozjet vlastní podcast? Tak u Radky jste na jediné správné adrese! Doporučuji všemi deseti!
Petra Dvořáková Fitness trenérka


Radka je AKCELERÁTORKA vašeho úspěchu Díky Radce jsem minulý měsíc rozjela PODCAST. V naprosté lehkosti. V obrovské zábavě. A samozřejmě hezky efektivně.
Chtěla jsem vlastní podcast už delší dobu, ale odrazovala mě představa technické náročnosti, spousty rozhodnutí a detailů, do kterých se mi nechtělo a o kterých jsem hlavně ani nevěděla.
Radka se mnou všechno probrala, včetně mých obav, a dala mi jasné kroky k REALIZACI. V podstatě jsem nemusela udělat skoro nic, než "jen" natočit epizodu na téma, které mě bavilo.
Radka zařídila vše ostatní - napojení, vizuální stránku, kde všude se budou epizody zveřejňovat, jakou budou mít znělku... A další věci, o kterých snad ani nevím.
Za roky podnikání jsem si zvykla dopřávat si služeb pravých expertek. A na podcast je Radka EXPERTKOU ČÍSLO 1. Děkuju
Eva Křivánková business mentorka
CTA: TAKY CHCI ROZJET PODCAST


Kolik to stojí
Spuštění podcastu: rozjezdový balíček
Návrh grafiky a vizuální identity pro sdílení na sítích
Tvorba úvodní znělky a výběr hudebního podkresu
Kompletní zpracování 1. epizody do 30 minut
Export a distribuce epizody na Spotify, Apple Podcasts, YouTube, Návrh řešení, jak epizody publikovat na webu, aby to pro vás bylo bez práce
Cena 14 000 Kč


Dlouhodobá spolupráce: kompletní produkce
Dlouhodobá spolupráce zahrnuje kompletní produkci každé epizody – od zpracování až po publikaci a výstupy.
1 epizoda/měsíc: 2 300 Kč
2 epizody/měsíc: 4 400 Kč
3 epizody/měsíc: 6 500 Kč
4 epizody/měsíc: 8 000 Kč - nejvýhodnější
více epizod: individuální cena


CTA: CHCI ROZJET PODCAST


*Stránka Chci e-mailing*
Nastavím vám chytrý e-mailing
Vy jen píšete. O zbytek se postarám za vás


Kolem e-mailového systému je spousta věcí, do kterých se vám možná nechce...
Na začátku je potřeba:
napojit doménu,
bezpečně a správně převést kontakty,
nastavit účely zpracování,
vytvořit formuláře a potvrzovací e-maily, upravit si šablony pro svou značku, propojit vše s webem,
…
Tohle všechno zařídím za vás.


Ve SmartEmailu vás i zaučím, abyste v klidu mohly jen psát a posouvat své podnikání dál.


Cena za úvodní nastavení SmartEmailingu: 5 500 Kč
CTA: CHCI NASTAVIT e-MAILING


*Stránka: O mně*
Radka Petrtýlová je expertka na technické zázemí online podnikání. Své bohaté zkušenosti sbírala mimo jiné v organizaci Czechitas a při dlouhodobé spolupráci s Lucií Harnošovou. Dnes pomáhá podnikatelkám zbavit se technických bariér, aby se mohly plně věnovat své tvorbě. Specializuje se na tvorbu webů, nastavení e-mailingu a kompletní produkci podcastů. Dokáže složitý svět technologií vysvětlit srozumitelným jazykem a s lehkostí dotahuje detaily do konce.
