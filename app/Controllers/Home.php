<?php

namespace App\Controllers;
use App\Models\GenresModel;
use App\Models\TitresModel;
use App\Models\SuggererParModel;


class Home extends BaseController {

	public $genresModel = null ;

	public $titresModel = null ;

	public $suggererModel = null ;

	public function __construct() {

		$this->genresModel = new GenresModel();

		$this->suggererModel = new SuggererParModel();

		$this->titresModel = new TitresModel();

	}

	public function index(){

		$tabLettres = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

		$listeGenres = $this->genresModel->findAll();
		
		$listeSuggerer = $this->suggererModel->findAll();

		$listeTitres = $this->titresModel->findAll();

		$data = [
			'tableauLettre' =>$tabLettres,
			'tabGenres' => $listeGenres,
			'tabTitres'	=> $listeTitres,
			'tabSuggerer' => $listeSuggerer,
			'titresModel' => $this->titresModel,
			'suggererModel' => $this->suggererModel,
			'genresModel' => $this->genresModel,

		];

		echo view('index',$data);

	}

	public function getLetter() {

		$tabLettres = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

		$numlettreRandom1 = array_rand($tabLettres,1);

		$listeGenres = $this->genresModel->findAll();
		
		$listeSuggerer = $this->suggererModel->findAll();

		$listeTitres = $this->titresModel->findAll();

		$data = [
			'tableauLettre' =>$tabLettres,
			'premiereLettre'=>$numlettreRandom1,
			'tabGenres' => $listeGenres,
			'tabTitres'	=> $listeTitres,
			'tabSuggerer' => $listeSuggerer,
			'titresModel' => $this->titresModel,
			'suggererModel' => $this->suggererModel,
			'genresModel' => $this->genresModel,
		];

		echo view('index',$data);

	}

	public function afficheSong(){

		$listeGenres = $this->genresModel->findAll();
		
		$listeSuggerer = $this->suggererModel->findAll();

		$listeTitres = $this->titresModel->findAll();

		$data = [
			'tabGenres' => $listeGenres,
			'tabTitres'	=> $listeTitres,
			'tabSuggerer' => $listeSuggerer,
			'titresModel' => $this->titresModel,
			'suggererModel' => $this->suggererModel,
			'genresModel' => $this->genresModel,
		];

		echo view('index',$data);

	}

}
