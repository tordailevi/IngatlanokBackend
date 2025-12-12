## A kiválasztott ingatlan megtekintése külön oldalon
useNavigate, useLocation használata

1. Az Ingatlan komponensben használjuk az useNavigate hook-ot. const navigate = useNavigate(); 
2. a button onClick eseményén helyezzük el a navigációs linket.
```javascript
<button
    className="btn btn-primary"
    onClick={() => {
    navigate(`/ingatlan/${ingatlan.id}`, { state: { ingatlan } });
    }}
>
 Megnézem
</button>
```
3. az Api.js rootjai közé helyezzük el az útvonal-komponens összerendezést!
```javascript
 { path: "ingatlan/:id", element: <IngatlanReszletes /> },
```
4. Az Ingatlanreszletes komponensben felhasználhatjuk az átadott paramétert az alábbiak szerint. 

A végére egy vissza gombot is elhelyezhetünk. 

```javascript
import React from "react";
import { useLocation, useNavigate } from "react-router";


export default function IngatlanReszletes() {
  const { state } = useLocation();
  const ingatlan = state?.ingatlan;
  const navigate =useNavigate() 
  return (
    <div>     
        <p className="card-text">{ingatlan.leiras}</p>
        ...       
        <button className="btn btn-success "  onClick={() => navigate(-1)}>Vissza</button>
      </div>
    </div>
       
    </div>
  );
}
```
