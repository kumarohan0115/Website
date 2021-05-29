<?php

        namespace Newclasses;

        require 'registerlogic.php';
        
        $branc=new Branch\branch();
    //    $branc::SetBranch('CSE');
    //    $branch=$branc::GetBranch();
    


       class changeclass extends $branc{
           public $Newclass;
           

        public function Changeclasses($newclass)
        {
            $this->Newclass =$newclass;
            $branc::SetBranch($this->Newclass);

        }

        public function GetthechangedClass()
        {
            $branch=$branc::GetBranch();
            return $branch;

        }
        


       }

       
   
?>