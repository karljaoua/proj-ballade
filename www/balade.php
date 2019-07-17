<?php
    class Balade {

        private $id;
        private $titre;
        private $pseudo;
        private $type;
        private $codepostal;
        private $ville;
        private $pays;
        private $lieudepart;
        private $lieuarrivee;
        private $description;
        private $etapes;
        private $photo;



            
        public function __set($name, $value) {}
        
        public function getId()       {return $this->id;  }
        public function getTitre()    {return $this->titre; }
        public function getPseudo()   {return $this->pseudo; }
        
        public function getType()     {return $this->type; }  //Un seul caractère F (famille) ou S (sport)
        public function getCodepostal()  {return trim($this->codepostal); }
        public function getVille()    {return trim($this->ville); }
        public function getPays()     {return trim($this->pays); }
        public function getLieuDep()  {return $this->lieudepart; }
        public function getLieuArr()  {return $this->lieuarrivee; }
        public function getDescrip()  {return $this->description; }
        public function getEtapes()   {return $this->etapes; }
        public function getPhoto()    {return $this->photo; }

        

        public function displayBaladeListe($char) {
            
            $ph  = $this->getId()      .$char;
            $ph .= $this->getTitre()   .$char; 
            $ph .= $this->getPseudo()  ."<br/>"; 
            $ph .= $this->getType()    .$char; 
            $ph .= $this->getVille()   .$char; 
            $ph .= $this->getPays() ;
            
            return $ph;
        }
       


        

    }// Class Database
?>