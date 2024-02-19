<div>

 {{-- <input type="text" name="" id="" style="width:90px; margin-top:100px;" wire:model='input' > --}}
  {{-- <input style="margin-top:100px" type="color" name="" id="" wire:model='color' onchange="printColor(event)"> 
 
 {{-- <h1>{{$color}}</h1>   
 <h1>{{$R}}</h1>    --}}
 <section>
    
  <div class="head" >
   
    <h4 id="url" wire:click='submit' wire:ignore>url</h4>
    <h4 id="text" wire:click='submit' wire:ignore>text</h4>
    <h4 id="email" wire:click='submit' wire:ignore>email</h4>
    <h4 id="phone" wire:click='submit' wire:ignore>phone</h4>
    <h4 id="sms" wire:click='submit' wire:ignore>sms</h4>
    <h4 id="wifi" wire:click='submit' wire:ignore>Wifi</h4>
    <h4 id="bitcoin" wire:click='submit' wire:ignore>bitcoin</h4>
    <h4 id="facebook" wire:click='submit' wire:ignore>Facebook</h4>
    <h4 id="instgram" wire:click='submit' wire:ignore>Instgram</h4>
    <h4 id="twitter" wire:click='submit' wire:ignore>twitter</h4>
    <h4 id="youtube" wire:click='submit' wire:ignore>youtube</h4>
  
  </div>
  <div>
    <hr>
  
  </div>

  <div style="display: flex; flex-direction: row; background-color: rgb(255, 255, 255)">
    <div style="display: flex; padding: 50px; background-color: rgb(247, 242, 242); flex-direction: column" class="main">
      <div class="label">
        Enter a Content
           <img src='\images\down.png' alt="" srcset="" style="width:15px;height:10px;" id="Content" wire:ignore>
      </div>
     <div id="url1" wire:ignore>
        <input type="text" placeholder="Enter a value:yassineAboulanouar.com" value="hh" wire:model.debounce.500ms='input' class="Content1"> 
      </div>
       <div id="text1" style="display: none" wire:ignore>
        <input type="text" placeholder="Enter a Text"  style="height: 200px" wire:model='text' class="Content1">
       </div>
       <div id="email1" style="display: none" wire:ignore>
       
        <input type="text" placeholder="To" wire:model="to" class="Content1">
        <input type="text" placeholder="Subject" wire:model='subject' class="Content1">
      
      <input type="text" placeholder="body" style="height: 100px;" wire:model='body'>
       </div>
       <div id="phone1" style="display: none" wire:ignore>
        <input type="text" placeholder="phone number " wire:model='phone' class="Content1">
       </div>
       <div id="sms1" style="display: none" wire:ignore>
        <input type="text" placeholder="phone number" wire:model="phoneN" class="Content1">
        <input type="text" placeholder="body" wire:model='sms' class="Content1">
       </div>
       <div id="wifi1" style="display: none" wire:ignore>
        <input type="text" placeholder="Ssid:Network Name" wire:model='ssid' class="Content1">
        <input type="text" placeholder="Encryption" wire:model="encruption" class="Content1">
        <input type="text" placeholder="password" wire:model="password" class="Content1">
        
       </div>
       <div id="bitcoin1" style="display: none" wire:ignore>
        <input type="text" placeholder="adress" class="Content1" wire:model='adress'>
        <input type="text" placeholder="amount" class="Content1" wire:model='amount'>
       </div>
       <div id="facebook1" style="display: none" wire:ignore>
        <input type="text" placeholder="facebook" wire:model="facebook" class="Content1">
       </div>
       <div id="instgram1" style="display: none" wire:ignore>
        <input type="text" placeholder="instgram" wire:model="instagram" class="Content1">
       </div>
       <div id="twitter1" style="display: none" wire:ignore>
        <input type="text" placeholder="twitter" wire:model='twitter' class="Content1">
       </div>
       <div id="youtube1" style="display: none" wire:ignore>
        <input type="text" placeholder="youtube" wire:model="youtube" class="Content1">
       </div>
    
        <div class="label"style="display:flex; flex-direction:column;" wire:ignore>
        
          Set Colors
          <img src='\images\up.png' alt="" srcset="" style="width:15px;height:15px;margin-left:305px;position: relative;top:-15px" id="Colors" wire:ignore>

          <div wire:ignore id="la" style="cursor: pointer;display:none; color: rgb(39, 31, 31); padding:10px; background-color: #ddd1d0; width:130px; display: none; justify-content:center; align-items: center; margin-left: 188px; border-radius: 50px; margin-top: 15px; font-size:15px; font-weight: 700; padding: 15px;position:absolute;margin-top: 50px;" class="Colors1">
   <input type="checkbox" name=""  id="chb" wire:model='frd' style="width: 50px; margin-left:2px">
   
   <label for="chb">Gradient</label>
        </div>
        </div>
       <p id="kk" style="display:none" class="Colors1" wire:ignore>Color</p>

       <div style="display: none"  class="Colors1" wire:ignore id="klb">
        <input type="color" placeholder="Enter a value" wire:model="colorv1" >
      
<div style="margin-left: 400px; margin-top:-20px; " id="hhl" wire:ignore.self>
  <p id="kk">Color2</p>

  <input type="color" placeholder="Enter a value" wire:model="colorv2" wire:change="change" >
 <select name="" id="hm" style="position: relative; top:60px ;left:-72px" wire:model='grd'>
<option >VERTICAL</option>
<option>DIAGONAL</option>
<option>RADIAL</option>
<option>HORIZONTAL</option>

 </select>

</div>
      </div>
        <p id="kk"  class="Colors1" style="display:none" wire:ignore>BackgroundColor</p>
        <div  class="Colors1" style="display:none" wire:ignore>
        <input type="color" placeholder="Enter a value" wire:model="color" >

      </div>
        <div class="label">
          Add logo
          <img src='\images\up.png' alt="" srcset="" style="width:15px;height:10px" id="logo" wire:ignore>
          
        </div>
       
        <form action="" enctype="multipart/form-data" method="post" wire:submit.prevent="addlogo" wire:ignore id="logo1" style="display:none">
          @csrf
        <input type="file" id=""  wire:model='img'>
        <button type="submit" id='jissy'>Add Logo</button>
        <button wire:click='removeLogo' id="jissy">Remove Logo</button>
      
      </form>
      
        <div class="label">
          Select ur style
          <img src='\images\up.png' alt="" srcset="" style="width:15px;height:10px" id="style" wire:ignore>
         
        </div>
        <div wire:ignore style="margin-bottom: 20px ; display:none" id="style1">
          <img src="./images/aqpbb.png" alt="" srcset="" style="width: 80px; height:80px; margin-right:40px; margin-left:80px" wire:click="square" id="one" >
          <img src="./images/round.png" alt="" style="width: 80px; height:80px; margin-right:40px" wire:click="round" id="one" >
          <img src="./images/images.png" alt="" srcset="" style="width: 80px; height:80px" wire:click='dot' id="one" >
        </div>
        <div class="label">
          eye style
          <img src='\images\up.png' alt="" srcset="" style="width:15px;height:10px" wire:ignore id="eye">
        
        
        </div>

        <div style="display:none" wire:ignore id="eye1">
          <img src="./images/sq.png" alt="" srcset="" style="margin-left:150px;padding-right: 40px" wire:click='eyesquare' class="ll">
          <img src="./images/circle.png" alt="" srcset="" wire:click='eyecircle' class="ll">
        </div>
      </div> 

  <div id="q" class="qr"> 
   {{-- <div id="qrCodeDiv">
    @if(empty($input))
       {{QrCode::size('300')->gradient(255,0,0,0,0,255,$grd,$opacity)->generate("unknown value")}}
       @elseif(!empty($input) && $frd==true)
       
       {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->backgroundColor($R,$G,$B,$opacity)->size('300')->generate($input)}}
       @elseif (!empty($input))
     
      {{ QrCode::color($R1,$G1,$B1,$opacity)->backgroundColor($R,$G,$B,$opacity)->size('300')->generate($input)}}
    
      @endif 
    </div>  --}}
  
   
    <div class="qrCodeDiv">
      @if(empty($input) && empty($text) && (empty($subject) || empty($to) || empty($body)) && empty($phone) && 
      (empty($sms) || empty($phoneN)) && (empty($ssid) || empty($password) || empty($encruption)) && empty($facebook) && empty($twitter) && empty($youtube) &&
      empty($instagram)&& (empty($amount) || empty($adress))) 
        {{QrCode::size('300')->eye($eye)->gradient(255,0,0,0,0,255,$grd,$opacity)->margin(100-$margin)->style($style)->generate("hola")}}
      {{QrCode::size('300')->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->eye($eye)->gradient(255,0,0,0,0,255,$grd,$opacity)->margin(100-$margin)->style($style)->generate("hola",public_path('images/qrcode.'.$ext))}}
    {{-- {{QrCode::generate('hh',public_path('images/qrcode.'.$ext))}} --}}
    {{-- <a href="{{asset('images/qrcodek.png')}}">Dowload</a> --}}
    
      @endif
    </div>
    <div id="qrCodeDiv">
     
    @if(!empty($input) && $frd==true)
     
    {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->generate('https://'.$input,public_path('images/qrcode.'.$ext))}}
    {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->generate('https://'.$input)}}
      @elseif (!empty($input) && $bol==false)
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->generate('https://'.$input,public_path('images/qrcode.'.$ext))}}
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->generate('https://'.$input)}}
    @elseif(!empty($input) && $bol==true)
    {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->generate('http://127.0.0.1:8000'.$idd,public_path('images/lala.svg'))}}
    {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->generate('http://127.0.0.1:8000'.$idd)}}

      @endif
    </div>
    <div id="qrCodeDiv">
      @if(!empty($text) && $frd==true)
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->generate($text,public_path('images/qrcode.'.$ext))}}
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->generate($text)}}
      @elseif (!empty($text) )
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->generate($text)}}
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->generate($text,public_path('images/qrcode.'.$ext))}}
      @endif
    </div>
    <div id="qrCodeDiv">
      @if(!empty($subject) && $frd==true && !empty($to) && !empty($body))
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->email($to,$subject,$body)}}
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->generate($to.$subject.$body,public_path('images/qrcode.'.$ext))}}
      @elseif (!empty($to) && !empty($subject) && !empty($body))
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->email($to,$subject,$body)}}
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->generate("to = ".$to."subject = ".$subject."body = ".$body,public_path('images/qrcode.'.$ext))}}
      {{-- @elseif (empty($subject) && !empty($body) && !empty($to) && $frd==true)
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->backgroundColor($R,$G,$B,$opacity)->size('300')->email($to,null,$body)}}
     @elseif (empty($subject) && !empty($body) && !empty($to) )
     {{ QrCode::color($R1,$G1,$B1,$opacity)->backgroundColor($R,$G,$B,$opacity)->size('300')->email($to,null,$body)}}
     @elseif (!empty($subject) && empty($body) && !empty($to) && $frd==true)
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->backgroundColor($R,$G,$B,$opacity)->size('300')->email($to,$subject,null)}}
     @elseif (!empty($subject) && empty($body) && !empty($to) )
     {{ QrCode::color($R1,$G1,$B1,$opacity)->backgroundColor($R,$G,$B,$opacity)->size('300')->email($to,$subject,null)}}
     @elseif (empty($subject) && empty($body) && !empty($to) && $frd==true)
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->backgroundColor($R,$G,$B,$opacity)->size('300')->email($to,null,null)}}
     @elseif (empty($subject) && empty($body) && !empty($to) )
     {{ QrCode::color($R1,$G1,$B1,$opacity)->backgroundColor($R,$G,$B,$opacity)->size('300')->email($to.'@gmail.com',null,null)}}
     --}}
     @endif
    </div>
    <div id="qrCodeDiv">
      @if(!empty($phone) && $frd==true)
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->style($style)->size('300')->margin(100-$margin)->phoneNumber($phone)}}
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->style($style)->size('300')->margin(100-$margin)->generate($phone,public_path('images/qrcode.'.$ext))}}
      @elseif (!empty($phone) )
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->phoneNumber($phone)}}
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->generate($phone,public_path('images/qrcode.'.$ext))}}
      @endif
    </div>
    <div id="qrCodeDiv">
      @if(!empty($sms) && !empty($phoneN)&& $frd==true)
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->sms($phoneN,$sms)}}
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity->format('png')->merge('\storage\app\qrcodes'.$la, 0.2))->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->generate($phoneN.$sms,public_path('images/qrcode.'.$ext))}}
      @elseif (!empty($phoneN)  && !empty($sms))
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->style($style)->sms($phoneN,$sms)}}
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->style($style)->generate($phoneN.$sms,public_path('images/qrcode.'.$ext))}}

      @endif
    </div>
    <div id="qrCodeDiv">
      @if(!empty($password) && !empty($ssid) && !empty($encruption) && $frd==true)
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->margin(100-$margin)->style($style)->size('300')->wifi(['ssid'=>$ssid,
      'encryption'=>$encruption,'password'=>$password])}}
       {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->margin(100-$margin)->style($style)->size('300')->generate('ssid ='.$ssid."&". 'encryption='.$encruption.'& password='.$password)}}
      @elseif (!empty($password) && !empty($ssid) && !empty($encruption))
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->wifi(['ssid'=>$ssid,
      'encryption'=>$encruption,'password'=>$password,'hidden'=>'false'])}} 
       {{ QrCode::color($R1,$G1,$B1,$opacity)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->generate('ssid'.$ssid.
       'encryption'.$encruption.'password'.$password.'hidden'.'false',public_path('images/qrcode.'.$ext))}} 
      @endif
    </div>
    <div id="qrCodeDiv">
      @if(!empty($facebook) && $frd==true)
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->style($style)->size('300')->margin(100-$margin)->generate($facebook)}}
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->style($style)->size('300')->margin(100-$margin)->generate($facebook,public_path('images/qrcode.'.$ext))}}

      @elseif (!empty($facebook) )
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->generate($facebook)}}
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->generate($facebook,public_path('images/qrcode.'.$ext))}}
      @endif
    </div>
    <div id="qrCodeDiv">
      @if(!empty($amount) && !empty($adress) && $frd==true)
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->style($style)->size('300')->margin(100-$margin)->BTC($adress,$amount)}}
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->style($style)->size('300')->margin(100-$margin)->generate($adress.$amount,public_path('images/qrcode.'.$ext))}}

      @elseif (!empty($amount) && !empty($adress) )
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->BTC($adress,$amount)}}
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->backgroundColor($R,$G,$B,$opacity)->size('300')->margin(100-$margin)->style($style)->generate($adress.$amount,public_path('images/qrcode.'.$ext))}}
      @endif
    </div>
    <div id="qrCodeDiv">
      @if(!empty($twitter) && $frd==true)
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->style($style)->size('300')->margin(100-$margin)->generate($twitter)}}
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->style($style)->size('300')->margin(100-$margin)->generate($twitter,public_path('images/qrcode.'.$ext))}}

      @elseif (!empty($twitter) )
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->generate($twitter)}}
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->generate($twitter,public_path('images/qrcode.'.$ext))}}

      @endif
    </div>
    <div id="qrCodeDiv">
      @if(!empty($youtube) && $frd==true)
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->style($style)->size('300')->margin(100-$margin)->generate($youtube)}}
      @elseif (!empty($youtube) )
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->generate($youtube)}}
      @endif
    </div>
    <div id="qrCodeDiv">
      @if(!empty($instagram) && $frd==true)
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->style($style)->size('300')->margin(100-$margin)->generate($instagram,public_path('images/qrcode.'.$ext))}}
      {{ QrCode::gradient($R1,$G1,$B1,$R3,$G3,$B3,$grd,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->style($style)->size('300')->margin(100-$margin)->generate($instagram)}}
      @elseif (!empty($instagram) )
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->generate($instagram)}}
      {{ QrCode::color($R1,$G1,$B1,$opacity)->eye($eye)->format('png')->merge('\storage\app\qrcodes'.$la, 0.2)->backgroundColor($R,$G,$B,$opacity)->size('300')->style($style)->margin(100-$margin)->generate($instagram,public_path('images/qrcode.'.$ext))}}
      @endif
    </div>

    <input type="range" name="" id="" wire:model="opacity">
    <input type="range" name="" id="" wire:model='margin'>
<button id="btnn"><a href="{{asset('images/qrcode.'.$ext)}}"download>Dowload</a></button>
<div id="KL" wire.ignore>
  <div class="png" wire:click='png' wire:ignore>
    <p>PNG</p>
  </div>
  <div class="svg" wire:click='svg' wire:ignore>
    <p>SVG</p>
  </div>
  <div class="jpeg" wire:click='jpeg' wire:ignore>
<p>JPEG</p>
  </div>
</div>
<div wire:ignore style="cursor: pointer;margin-top:20px">
  <input wire:click='store' type="checkbox" name="" style="width: 50px; margin-left:2px" wire:model='bol' >
  
  <label for="chb">Tracking</label>
       </div>
<button  style="background: #ebe5e2;margin-bottom:50px">
  @if($bol==true)
  <a style="color:#393736" href="{{asset('http://127.0.0.1:8000/vue'.$idd)}}">Tracking</a>
  @endif
</button>
      </div>
    
  </div>

  </section>

    <style>
      #eye{
        position: relative;
        left: 25px;
      }
      #logo{
        position: relative; 
        left: 19px;
      }
   #jissy{
    margin-left: 30px;
    border: none;
    padding: 10px;
    font-weight: 700;
    text-decoration-style: unset;
    color: #393736;
    text-transform: uppercase;
    cursor: pointer;
    background-color: #ebe5e2;
    border-radius: 50px;
    margin-bottom: 15px;
   }
      #KL{
        display: flex;
        flex-direction: row;
        margin-top: 10px;
      }
      #KL div{
        border: solid 1px #7b93eb ;
        padding:15px;
        /* background: linear-gradient(150deg, #c8bebe98, 5%, #74b9de8e, 50%, #5e62cc9f); */
       
        margin: 10px;

      }
      #KL>div:hover{
        background: linear-gradient(150deg, #c8bebe98, 5%, #74b9de8e, 50%, #5e62cc9f);
      }
      #kk{
        text-transform: uppercase;
       color: rgb(56, 53, 53);
       font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
           font-weight: 500;
      }
      h4{
        padding: 15px;
        cursor: pointer;
    text-transform: uppercase;
    color: rgb(102, 97, 97);
    /* box-shadow: 5px 10px 5px rgba(0, 0, 0, 0.2); */
      }
      h4:hover{
        font-size: 18px;
        border-bottom: 0.3rem solid;
        border-bottom-color: rgba(0, 0, 0, 0.548);
        color: rgba(0, 0, 0, 0.671);
      }
      input[type="text"]{
        width: 500px;
        height: 40px;
        border-color: gainsboro;
        border: none;
        padding-left: 10px;
        margin-bottom: 30px;
        
      }
      input:hover :not('input[type="color"]'){
        border: solid rgb(160, 129, 129);
      }
    input+label{
        text-transform: uppercase;
    color: rgb(56, 53, 53);
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 500;
       
      }
      .label{
        padding-top: 10px;
        text-align: center;
        width: 500px;
        height: 40px;
        background-color: rgb(255, 249, 249);
        text-transform: uppercase;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 500;
        color: rgba(39, 38, 37, 0.925);
    margin-bottom: 30px;
    cursor: pointer;

      }
      .head{
        margin-top:100px; display:flex; flex-direction: row; padding-left: 10px;
        /* margin-left: 200px; */
        justify-content: center;

      
      font-size: 15px;
      
      }
      .main{
        width: 60%;
        margin-left: 90px;
        border-radius: 40px 0px 0px 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      }
      .qr{
      padding-top: 35px;
     height: auto;
     width: 400px;
     border-radius: 0px 40px 0px 0px;
     background-color: white;
     
   
     box-shadow: 10px 10px 10px  rgba(0, 0, 0, 0.2);
     display: flex;
     flex-direction: column;
   
     align-items: center;
      }
      .qr>button {
        width:300px;
        height: 50px;
        margin-top: 30px;
        border: none;
        border-radius: 50px;
        background: linear-gradient(150deg, #c9312c, 5%, #9545c4, 50%, #3a3ebd);
        text-transform: uppercase;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        font-weight: 500;
        color: white;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
       
      }
     .qr>button:hover{
     background: linear-gradient(150deg, #c9312cb6, 5%, #9645c4a8, 50%,rgba(58, 62, 189, 0.664));
     }
  input[type="color"] {
    width: 50px;
    cursor: pointer;
  
        height: 40px;
        border-color: gainsboro;
        border: none;
        padding-left: 10px;
        margin-bottom: 30px;
   
  }

  input[type="checkbox"]{
width: 50px;
  }
  .ok{
    opacity: 60%;
  }
  button>a{
    text-decoration: none;
    color: white;
  }
  #svg{
width: 10px;
height: 10px:


  }

      </style>
      
      <script> 
      var cmp=1;
      var Content = document.getElementById('Content');
      var kl=false;
   Content.onclick=function(){
    if(kl==false){
    Content.src="/images/up.png";
    kl=true;
    for(var i=0;i<document.getElementsByClassName('Content1').length;i++){
    document.getElementsByClassName('Content1')[i].style.display='none';
    }
    }
    else{
      Content.src="/images/down.png";
    kl=false;
     for(var i=0;i<document.getElementsByClassName('Content1').length;i++){
    document.getElementsByClassName('Content1')[i].style.display='block';
    if(cmp==1){
       
      document.getElementById("hhl").style.display="none";
      cmp++;
    }
    }

    }
   }


   var Colors = document.getElementById('Colors');
      var ol=false;
   Colors.onclick=function(){
    if(ol==false){
    Colors.src="/images/down.png";
    ol=true;
    for(var i=0;i<document.getElementsByClassName('Colors1').length;i++){
    document.getElementsByClassName('Colors1')[i].style.display='flex';
    if(cmp==1){
       
       document.getElementById("hhl").style.display="none";
       cmp++;
     }
    } 
    }
    else{
      Colors.src="/images/up.png";
    ol=false;
     for(var i=0;i<document.getElementsByClassName('Colors1').length;i++){
    document.getElementsByClassName('Colors1')[i].style.display='none';
   
    }

    }
   }

   var logo = document.getElementById('logo');
   var hl=false;
  logo.onclick=function(){
    if(hl==false){
    logo.src="/images/down.png";
    hl=true;
   
    document.getElementById('logo1').style.display='block';
   
    
    }
    else{
      logo.src="/images/up.png";
    hl=false;
    document.getElementById('logo1').style.display='none';

    }
   }

   var stylee = document.getElementById('style');
   var ml=false;
  stylee.onclick=function(){
    if(ml==false){
    stylee.src="/images/down.png";
    ml=true;
   
    document.getElementById('style1').style.display='block';
   
    
    }
    else{
      stylee.src="/images/up.png";
    ml=false;
    document.getElementById('style1').style.display='none';

    }
   }


   var eye = document.getElementById('eye');
   var hl=false;
  eye.onclick=function(){
    if(hl==false){
    eye.src="/images/down.png";
    hl=true;
   
    document.getElementById('eye1').style.display='block';
   
    
    }
    else{
      eye.src="/images/up.png";
    hl=false;
    document.getElementById('eye1').style.display='none';

    }
   }
      var dv = document.querySelectorAll('#KL > div');
      dv[0].style.background ='linear-gradient(150deg, #c8bebe98, 5%, #74b9de8e, 50%, #5e62cc9f)';
      for (var i = 0; i < dv.length;i++){
dv[i].addEventListener('click', function(){
  for(var j=0;j<dv.length;j++){
      dv[j].style.background ='transparent';
    }
    this.style.background = 'linear-gradient(150deg, #c8bebe98, 5%, #74b9de8e, 50%, #5e62cc9f)';

})
      }
       var iml = document.getElementsByClassName('ll');
       iml[0].style.opacity="60%";
       for(var i=0;i<iml.length;i++){
  
  iml[i].addEventListener('click',function(){
    for(var j=0;j<iml.length;j++){
      iml[j].style.opacity ='100%';
    }
    this.style.opacity = '60%';
    
  })
}
        var imgg=document.querySelectorAll('#one');
        imgg[0].style.opacity="60%";
for(var i=0;i<imgg.length;i++){
  
  imgg[i].addEventListener('click',function(){
    for(var j=0;j<imgg.length;j++){
      imgg[j].style.opacity ='100%';
    }
    this.style.opacity = '60%';
    
  })
}
   var test=false;
  //    document.getElementById('la').addEventListener('click',function(){


document.getElementById('chb').addEventListener('click',function(){
    
           if(test==false){
        
        document.getElementById("hhl").style.display="block";

       test=true;
        }else{
          
          document.getElementById("hhl").style.display="none";
    
    test=false;  
        }   
  });  


var data=document.querySelectorAll('h4');
var item=-1;
for (var i=0; i<=data.length; i++) {
  document.getElementById(data[0].id).style.borderBottom="0.3rem solid";
data[i].addEventListener('click', function()
{
  
//   if(item!=i){

//   }
//   else{
//     document.getElementById('url1').style.display="none";
//   }
//  item=i;
   
// })
for(var j=0; j<data.length; j++){

    document.getElementById(data[j].id+'1').style.display="none";
    document.getElementById(this.id +'1').style.display="block";
    // document.getElementById(this.id).style.fontSize="18px";
    // document.getElementById(data[j].id).style.fontSize="15px";
    document.getElementById(this.id).style.borderBottom="0.3rem solid";
    document.getElementById(data[j].id).style.borderBottom="none";
    // alert(i);
    // alert(j);
}

})
}
      </script>
    </div>