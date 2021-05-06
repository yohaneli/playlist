<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class SuggererParModel extends Model{
    protected $table = 'suggererpar';
    protected $allowedFields = ['SuggererParID','SuggererParNom','SuggererParDate'];
}