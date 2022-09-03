<?php 
echo "<h1>Convert Number To String.</h1>";

/**
 * 
 */
class NumberToString
{
    public $number_word = ["zero","one", "two","three","four","five", "six", "seven","eight","nine","ten","eleven","twelve","thirteen",  "fourteen", "fifteen", "sixteen","seventeen", "eighteen", "nineteen"];

    public $zeroWord = ["","","twenty","thirty", "forty","fifty","sixty","seventy", "eighty","ninety" ];

    public $Bigcount = ["hundred", "thousand"];

    public function twoDigits($number){
        if($number < 19){
            return $this->number_word[$number];
        }else{
            if ($number[1] == 0) {
               return $this->zeroWord[$number[0]];
            }else{
                return $this->zeroWord[$number[0]].' '.$this->number_word[$number[1]];
            }
        }
    }
    public function threeDigits($number){
        if ($number[1] == 0 && $number[2] == 0) {
            return  $this->number_word[$number[0]].' '.$this->Bigcount[0];
        }elseif($number[1] == 0 && $number[2] > 0){
            return  $this->number_word[$number[0]].' '.$this->Bigcount[0].' '.$this->number_word[$number[2]];
        }elseif($number[1] > 0 && $number[2] > 0){

           if(substr($number,1)<= 19){
            return  $this->number_word[$number[0]].' '.$this->Bigcount[0].' '.$this->number_word[substr($number,1)];
           }else{
             return  $this->number_word[$number[0]].' '.$this->Bigcount[0].' '.$this->zeroWord[$number[1]].' '.$this->number_word[$number[2]];
           }

        }elseif($number[1] > 0 && $number[2] == 0){
            return  $this->number_word[$number[0]].' '.$this->Bigcount[0].' '.$this->zeroWord[$number[1]];
        }
        
    }
    public function fourDigtis($number){
        if ($number[1] == 0 && $number[2] == 0 && $number[3] == 0) {
            return  $this->number_word[$number[0]].' '.$this->Bigcount[1];           
        }elseif($number[1] == 0 && $number[2] == 0 && $number[3] >0){
            return  $this->number_word[$number[0]].' '.$this->Bigcount[1].' '.$this->number_word[$number[3]];

        }elseif($number[1] == 0 && substr($number,2) < 20){
            return  $this->number_word[$number[0]].' '.$this->Bigcount[1].' '.$this->number_word[substr($number,2)];
        }elseif ($number[1] == 0 && substr($number,2) > 20) {
            if($number[3] !=0){
                return  $this->number_word[$number[0]].' '.$this->Bigcount[1].' '.$this->zeroWord[$number[2]].' '.$this->number_word[$number[3]];
            }else{
                return  $this->number_word[$number[0]].' '.$this->Bigcount[1].' '.$this->zeroWord[$number[2]];
            }
        }elseif($number[1] > 0 && $number[2] == 0 && $number[3] == 0){
            return  $this->number_word[$number[0]].' '.$this->Bigcount[1].' '.$this->number_word[$number[1]].' '.$this->Bigcount[0];
        }elseif($number[1] > 0 && substr($number,2) < 20){
            return  $this->number_word[$number[0]].' '.$this->Bigcount[1].' '.$this->number_word[$number[1]].' '.$this->Bigcount[0].' '.$this->number_word[abs(substr($number,2))];
        }elseif($number[1] > 0 && substr($number,2) > 20){
            return  $this->number_word[$number[0]].' '.$this->Bigcount[1].' '.$this->number_word[$number[1]].' '.$this->Bigcount[0].' '.$this->zeroWord[$number[2]].(substr($number, -1) !=0 ? ' '.$this->number_word[$number[3]]: '');
        }elseif($number[1] > 0 && $number[3] == 0){
            return  $this->number_word[$number[0]].' '.$this->Bigcount[1].' '.$this->number_word[$number[1]].' '.$this->Bigcount[0].' '.$this->zeroWord[$number[2]];
        }

    }

    public function getString($number){
        $number = (string) $number;

        $count = strlen($number);

        if ($count<=2) {
            return $this->twoDigits($number);
        }elseif($count == 3){
            return $this->threeDigits($number);
        }elseif($count == 4){
            return $this->fourDigtis($number);
        }else{
            return 'Only availible for 4 digits numbers.';
        }
    }
}

$arrr = new NumberToString();
print_r($arrr->getString(99999));





 ?>