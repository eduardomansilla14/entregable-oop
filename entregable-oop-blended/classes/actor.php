<?php
class Actor{
  protected $id;
  protected $first_name;
  protected $last_name;
  protected $rating;
  protected $favorite_movie_id;
  protected $favorite_movie_name;

public function getId(){
  return $this->id ;
}

public function setId($id ){
  $this->id =$id ;
}

public function getNombre(){
  return $this->first_name ;
}

public function setNombre($first_name ){
  $this->first_name =$first_name ;
}

public function getApellido(){
  return $this->last_name ;
}

public function setApellido($last_name ){
  $this->last_name =$last_name ;
}

public function getRating(){
  return $this->rating;
}

public function setRating($rating){
  $this->rating=$rating;
}

public function getPeliculaFavorita(){
  return $this->favorite_movie_id ;
}

public function setPeliculaFavorita($favorite_movie_id ){
  $this->favorite_movie_id = $favorite_movie_id ;
}

public function getNombrePeliculaFavorita(){
  return $this->favorite_movie_name ;
}

public function setNombrePeliculaFavorita($favorite_movie_name){
  $this->favorite_movie_name = $favorite_movie_name;
}



}
