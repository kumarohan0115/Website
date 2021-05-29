<?php

namespace Branch;
    class branch{

        public static $branch_name="";

            public static function SetBranch($branch)
            {
                self::$branch_name=$branch;
                
            }

            public static function GetBranch()
            {
            return self::$branch_name;

            }

            public function GetCSE()
            {
                self::$branch_name="CSE";
                return self::$branch_name;


            }
            
            public function GetIT()
            {
                self::$branch_name="IT";
                return self::$branch_name;

            }
            
            public function SetIT()
            {
                self::$branch_name="IT";

            }
            public function SetCSE(){
                self::$branch_name="CSE";

            }

            
          
        }


            class changeclass extends branch{
                public  static $Newclass="";
                    

                public  static function Changeclasses($newclass)
                {
                    self::$Newclass=$newclass;
                    branch::SetBranch(self::$Newclass);

                }

                public function GetthechangedClass()
                {
                     return self::$Newclass;
                }
            }

// $newclass = new Changeclass();
// $newclass::Changeclasses("cse");
// echo ("changeclass wala ".$newclass->GetthechangedClass());

// $fuck= new branch();
// echo ("main wala".   $fuck::GetBranch());



?>