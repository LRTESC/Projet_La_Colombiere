# MEMO LARAVEL

## Etapes création de relations entre deux tables

---
allez dans model

allez dans le dossier de récupération



relation 1:1 table qui ne contient pas la clef étrangère = hasOne
relation 1:1 table qui contient la clef étrangère = belongsTo

relation 1:N table qui ne contient pas la clef étrangère = hasMany
relation 1:N table qui contient la clef étrangère = belongsTo

relation N:N = belongsToMany
relation N:N = belongsToMany



exemple 1:1 :

Dans user.php (N'a pas de clef étrangère)

```
public function adress(){
    return $this->hasOne(Address::class);
}
```


Dans address.php (Contient la clef étrangère User_ID)

```
public function user (){
    return $this->belongsTo(User::class);
}
```
