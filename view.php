<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
    <title>TP - Amortissements</title>
</head>
<body>
    <header>
        <h1>TP - Amortissements</h1>
    </header>


<h2>Amortissements :</h2>

<form action="" method="post">

  <p>Denomination :</p>
    <input type="text" name="denomination" />
  <p>Durée :</p>
    <input type="text" name="duree" />
  <p>Valeur à amortir :</p>
    <input type="text" name="valeur" />
   
  <p>Date d'acquisition  :</p>
    <input type="text" name="jaqui" value="JJ"/>
    <input type="text" name="maqui" value="MM"/>
    <input type="text" name="aaqui" value="AAAA"/>
 <p>Date de mise en service  :</p>
    <input type="text" name="jservice" value="JJ"/>
    <input type="text" name="mservice" value="MM"/>
    <input type="text" name="aservice" value="AAAA"/>
 <!-- TYPE -->
  <p>Mode d'amortissement :</p>
  <select name="type">
    <option value="Lineaire">Lineaire</option>
    <option value="Economique">Economique</option>
    <option value="Degressif">Degressif</option>
  </select>

    <br/><br/>
    <input type="Submit" value="Valider"/>
</body>
</html>
