<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class TitresModel extends Model{
    protected $table = 'titres';
    protected $allowedFields = ['TitreID','TitreNom','TitreArtiste','TitreAlbum','GenreID','SuggererParID','TitreFichier','TitreDate'];
}