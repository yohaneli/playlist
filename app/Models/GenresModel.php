<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class GenresModel extends Model{
    protected $table = 'genres';
    protected $allowedFields = ['GenreID','GenreNom','GenreDate'];
}