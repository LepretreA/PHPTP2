<?php function FormLog($password){
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		if(isset($_POST['password']) == $password){
			return 'ok';
		}
		}
        if(isset($_POST['password'])!='root'){
			echo "Mot de passe incorrect vous pouvez mieux faire !!!";
			echo '<a href ="https://www.youtube.com/watch?v=1n90RA7bwUU">Indice</a>';
		}
	}?>
	<form method="post">Mot de passe : <input type="password" name="password" /><input type="submit" value="Connexion"/></form>

<?php $password ='root';
if(FormLog($password) == 'ok'){
	echo 'Mot de passe correct : <a href ="https://www.youtube.com/c/MonsieurRapidecho">Indice</a>';
}
?>