# Ingatlanok 

A következő feladatban egy ingatlanok értékesítésével foglalkozó vállalkozás weboldalát kell elkészíteni a feladatleírás és a minta szerint. 

### Publikus felület

1. kategóriák megjelenítése a legördülő listában és az ingatlanok listázása a kiválasztott kategória szerint. 
<img src="./minta/public_minta1.png" alt="">
<img src="./minta/public_minta2.png" alt="">
2. Egyetlen, kiválasztott ingatlan megjelenítése
<img src="./minta/public_ingatlan_reszletek.png" alt="">

### Admin felület

1. Ingatlanok megjelenítése táblázatban, kategóriák megjelenítése a legördülő listában és az ingatlanok listázása a kiválasztott kategória szerint. 
<img src="./minta/admin_ingatlanok_minta1.png" alt="">

2. Egyetlen, kiválasztott ingatlan megjelenítése
<img src="./minta/admin_ingatlan_szerkesztese.png" alt="">

## Backend

### Adatbázis

<img src="./minta/ab.png" alt="">

#### Kategóriák

| Mező neve     | Típus                   | Null érték | Egyéb megjegyzés                                                                                        |
| ------------- | ----------------------- | ---------- | ------------------------------------------------------------------------------------------------------- |
| id            | bigint (auto-increment) | NO         | elsődleges kulcs (PRIMARY KEY)                                                                          |
| kategoria_nev | enum                    | NO         | lehetséges értékek: 'ház', 'lakás', 'építési telek', 'garázs', 'mezőgazdasági épület', 'ipari ingatlan' |
                                                                   

#### Ingatlanok

| Mező neve    | Típus                   | Null érték | Egyéb megjegyzés                                              |
| ------------ | ----------------------- | ---------- | ------------------------------------------------------------- |
| id           | bigint (auto-increment) | NO         | elsődleges kulcs (PRIMARY KEY)                                |
| kategoria_id | bigint                  | YES        | idegen kulcs `kategoriak.id`, `NULL` ha törölték a kategóriát |
| leiras       | text                    | NO         | ingatlan leírása                                              |
| datum        | timestamp               | NO         | alapértelmezett: aktuális időpont                             |
| tehermentes  | boolean                 | NO         | ingatlan tehermentes-e                                        |
| ar           | integer                 | NO         | ingatlan ára                                                  |
| kepUrl       | string(255)             | NO         | kép elérési útja                                              |
                        

Ha a hirdetés dátuma nem kerül megadásra, akkor annak alapértelmezett értéke az aktuális dátum legyen! 

A kategoriak tábla  értékei: 
[
    'ház',
    'lakás',
    'építési telek',
    'garázs',
    'mezőgazdasági épület',
    'ipari ingatlan',
]

### Végpontok

1. **GET /ingatlanok**: visszaadja az összes ingatlan teljes adatait, beleértve a kapcsolódó kategóriát.

2. **POST /ingatlanok**: új ingatlan létrehozása.
```
{ 
    "kategoria_id": 1, 
    "leiras": "lorem ipsum...", 
    "datum": "2025-01-07", 
    "tehermentes": true, 
    "ar": 45000000, 
    "kepUrl": "haz1.jpg" }
```

3. **GET /kategoriak**: visszaadja az összes kategóriát.

4. **DELETE /ingatlanok/{id}**: törli a megadott ID-jú ingatlant; ha nem található, megfelelő 404 választ kell adni.

## A megoldás menete:

<a href="ingatlan_backend/README.md">Backend</a><br>
<a href="ingatlan_frontend//README.md">Frontend</a>