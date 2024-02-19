<?php

namespace App\Http\Livewire;

use App\Models\scan;
use Illuminate\Encryption\EncryptionServiceProvider;
use Illuminate\Http\FileHelpers;
use Livewire\Component;
use Livewire\WithFileUploads;

class Content extends Component
{
    use WithFileUploads;
    use FileHelpers;
    public $opacity=100;
    public $style='square';
    public $margin=100;
    public $ext='png';
    public $input;
    public $text;
    public $email;
    public $phone; 
    public $eye="square";
    public $subject="";
    public $sms="";
    public $phoneN="";
    public $to="";
    public $body="";
    public $ssid="";
    public $password="";
    public $encruption="";
    public  $color ="#FFFFFF";
    public  $colorv1="#000000";
    public $colorv2="#FFFFFF";
    public $R=255;
    public $grd="vertical";
    public $G=255;
    public $B=255;
    public $R1=255;
    public $G1=255;
    public $B1=255;
    public $R3=255;
    public $G3=255;
    public $B3=255;
    public $test =false;
    public $frd=false;
    public $tab = array();
    public $facebook;
    public $adress;
    public $amount;
    public $twitter;
    public $instagram;
    public $youtube;
    public $img;
    public $la='\pp.png';
    public $idd;
    public $bol=false;

    public function render()
    {
        if(empty($this->input))
        $this->bol=false;
       

        $this->R=hexdec(substr($this->color,1,2));
        $this->G=hexdec(substr($this->color,3,2));
        $this->B=hexdec(substr($this->color,5,2));
        $this->R1=hexdec(substr($this->colorv1,1,2));
        $this->G1=hexdec(substr($this->colorv1,3,2));
        $this->B1=hexdec(substr($this->colorv1,5,2));
        $this->R3=hexdec(substr($this->colorv2,1,2));
        $this->G3=hexdec(substr($this->colorv2,3,2));
        $this->B3=hexdec(substr($this->colorv2,5,2));
       
        return view('livewire.content')->with('input',$this->input,'color',$this->color,'R',$this->R,'G',$this->G,'B',
        $this->B,'R1',$this->R1,'G1',$this->G1,'B1',$this->B1,'opacity',$this->opacity,'R3',$this->R3,'G3',
        $this->G3,'B3',$this->B3,$this->test,'test',$this->frd,'frd','text',$this->text,'subject',$this->subject,
        'to',$this->to,'body',$this->body,'phone',$this->phone,'sms',$this->sms,'phoneN',$this->phoneN,'ssid',$this->ssid,
    'password',$this->password,'encruption',$this->encruption,'facebook',$this->facebook,'twitter',$this->twitter,'instagram'
    ,$this->instagram,'youtube',$this->youtube,'margin',$this->margin,'style',$this->style,'grd',$this->grd,'eye',
    $this->eye,'ext',$this->ext,'la',$this->la,'bol',$this->bol,'idd',$this->idd,'adress',$this->adress,'amount',$this->amount);
    
    }
public function change(){
$this->test =true;
}
public function submit(){
$this->input="";
$this->text = "";
$this->body="";
$this->to="";
$this->subject="";
$this->phone="";
$this->ssid="";
$this->encruption="";
$this->password="";
$this->sms="";
$this->phoneN="";
$this->facebook="";
$this->twitter="";
$this->instagram="";
$this->youtube="";
$this->amount="";
$this->adress="";

}
public function dot(){
    $this->style='dot';
}
public function round(){
    $this->style='round';
}
public function square(){
    $this->style='square';
}
public function eyesquare(){
    $this->eye='square';
}
public function eyecircle(){
    $this->eye='circle';
}
public function png(){
    $this->ext='png';
}
public function svg(){
    $this->ext='svg';
}
public function jpeg(){
    $this->ext='jpeg';
}
public function addlogo(){
  
    $file=$this->img;
    if(!empty($file)){
    // move_uploaded_file($file,public_path('qrcodes/qrcode.png'));
    $this->la='\qrcode.png';
    

    // Stocker le fichier avec le nom d'origine dans le répertoire de stockage (storage)
    $file->storeAs('qrcodes','qrcode.png');
    
}
    }
    public function removeLogo(){
        $this->la='\pp.png';
        $this->img='';
    }
    public function store(){
     if(!empty($this->input))
            $user = new scan();
            $user->qr_code=$this->input;
            $user->scan_count=0;
            $user->adress_ip='';
            $user->device='';
            $user->Systeme='';
            $user->navigateur='';
            $user->save();
            $this->idd='/'.$user->id;
            $this->bol=true;
          
            
        
    }

}


