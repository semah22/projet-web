<?php

	class Produit
	{
		
		private $nom_film;
		private $catégorie;
		private $origine;
		
		
		//Constructor
		public function __construct( $nom_film, $catégorie, $origine )
		{
			$this->nom_film=$nom_film;
			$this->catégorie=$catégorie;
			$this->origine=$origine;
		}

		//Getters
		public function get_nom_film()
		{
			return $this->nom_film;
		}

		public function get_catégorie()
		{
			return $this->catégorie;
		}

		public function get_origine()
		{
			return $this->origine;
		}

		//Setters
		public function set_nom_film(string $nom_film)
		{
			$this->nom_film=$nom_film;
		}

		public function set_catégorie(int $catégorie)
		{
			$this->catégorie=$catégorie;
		}

		public function set_origine(int $origine)
		{
			$this->origine=$origine;
		}
		
	}

?>