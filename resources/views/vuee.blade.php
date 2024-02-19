
<html >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<header>
    <div class="logo">
        <p><span>Qr</span> Code</p>
    </div>
  
    <!-- menu responsive -->
    <div class="toggle_menu"></div>
</header>

<div style="position: fixed;">
   <table style="position:relative; top:120px;left: 120px" class="table table-bordered w-25 pr-10">
    <tr>
        <td>id</td>
        <td>Adresse ip</td>
        <td>Browser</td>
        <td>System Ex</td>
        <td>Device</td>

    </tr>
    
    @foreach ($trackk as $dataa )
    <tr>
    <td>{{$dataa->id}}</td>
    <td>{{$dataa->AdressIp}}</td>
    <td>{{$dataa->Browser}}</td>
    <td>{{$dataa->Systeme}}</td>
    <td>{{$dataa->Device}}</td>
</tr>
  @endforeach 
  
    
   
       
   

   
  

   </table>
</div>
   
<div style=" position: fixed;
;border-left:10px #c0c0c0 solid   ;width:500px;background-color: rgba(255, 255, 255, 0.471);display:flex;padding-top:100px; flex-direction: column;justify-content: flex-end; align-items:flex-end; align-content: center;margin-left:700px">


<img  src="images/lala.svg" alt="" srcset="" style="height:300px; width:300px">

<h1 style="margin-top:70px;font-size:150px;margin-right:120px">{{$data->scan_count}}</h1>
</div>
</div>
</html>
<style>

header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 50px;
    padding: 0 10%;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-color: rgba(255 255 255 /0.9);
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    z-index: 10;
}
.menu {
    display: flex;
}

.logo {
    color: #27ae60;
    font-weight: 700;
    font-size: 25px;
}

.logo span {
    color: #273e60;
}


</style>





