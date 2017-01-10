<form action="libs/services.php?action=reserver" method="post">
<div>	
	<label for="nom">Nom:</label>
	<input type="text" name="nom" id="nom">
</div>

<div>	
	<label for="prenom">Nom:</label>
	<input type="text" name="prenom" id="prenom">
</div>

<div>	
	<label for="place">Nonbre de personne:</label>
	<select name="place">
  		<option value="valeur1" selected="1">1 </option>
  		<option value="valeur2">2 </option>
  		<option value="valeur3">3</option>
  		<option value="valeur3">3+</option>
	</select>
</div>

<div>	
	<label for="jour">Jour:</label>
	<input type="date" name="jour" id="jour">
</div>

<div>
	<label for="heure">Heure:</label>
	<input type="time" name="heure" id="heure">		
</div>


<input type="submit" value="reservé">

</form>							