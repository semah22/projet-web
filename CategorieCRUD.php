<?php

	include_once '../../config.php';
	include_once '../../Model/Categorie.php';
	
	class CategorieCRUD
	{
		function AfficherCategorie()
		{
			$sql="SELECT * FROM categories";
			$db=config::getConnexion();
			try
			{
				$liste=$db->query($sql);
				return $liste;
			}
			catch(Exception $e)
			{
				die('Erreur:'. $e->getMessage());
			}
		}

		function AjouterCategorie($categorie)
		{
			$sql="INSERT INTO categories (nom_cat) 
			VALUES (:nom_cat)";
			$db=config::getConnexion();
			try
			{
				$query=$db->prepare($sql);
				$query->execute([
					'nom_cat'=>$categorie->get_nom_cat()
				]);			
			}
			catch (Exception $e)
			{
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function ModifierCategorie($categorie, $id_cat)
		{
			try
			{
				$db=config::getConnexion();
				$query=$db->prepare(
					"UPDATE categories SET 
						nom_cat= :nom_cat
					WHERE id_cat= :id_cat"
				);
				$query->execute([
					'nom_cat'=>$categorie->get_nom_cat(),
					'id_cat'=>$id_cat
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			}
			catch (PDOException $e)
			{
				$e->getMessage();
			}
		}

        function SupprimerCategorie($id_cat)
		{
			$sql="DELETE FROM categories WHERE id_cat=:id_cat";
			$db=config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_cat', $id_cat);
			try
			{
				$req->execute();
			}
			catch(Exception $e)
			{
				die('Erreur:'. $e->getMessage());
			}
		}
	}
	
?>