<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\GenresModel;
use App\Models\TitresModel;
use App\Models\SuggererParModel;


class Titre extends BaseController {

	public $genresModel = null ;

	public $titresModel = null ;

	public $suggererModel = null ;

	public function __construct() {

		$this->genresModel = new GenresModel();

		$this->suggererModel = new SuggererParModel();

		$this->titresModel = new TitresModel();

	}

	public function index(){

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

		echo view('ajouterSong',$data);

	}

	public function addSong() {


        //include helper form

        helper(['form']);

        //set rules validation form

        $rules = [
            'titre'   => 'required',
            'artiste' => 'required',
            'genre'   => 'required'
        ];

            if($this->validate($rules)) {

                $model = new TitresModel();

                $data = [
                    'TitreNom'                  => $this->request->getVar('titre'),
                    'TitreArtiste'              => $this->request->getVar('artiste'),
                    'TitreAlbum'                => $this->request->getVar('album'),
                    'GenreID'                   => $this->request->getVar('genre'),
                    'SuggererParID'             => $this->request->getVar('suggerer'),
                ];

                $file = $this->request->getFile('fichier');
                
                     if($file->isValid) {

                        $file->move(ROOTPATH.'/public/images', $newName) ;

                        $data['TitreFichier'] = $newName ;

                        dd($file);

                    }


                $model->save($data);

                return redirect()->to('/home');

            } else {

                    $data['validation'] = $this->validator;

                    echo view('home',$data);

            }

    }
	
}
