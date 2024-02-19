<div>
    

 @if($msg!=null)
    <h2 id="hhh" style="position: relative; top:200px; left:-150px; width:500px; height: 30px; background-color: rgba(0, 128, 0, 0.363); text-align: center; opacity:0%; border-radius: 50px;padding: 5px" >{{$msg}}</h2>
     @endif 
    


    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <section id="reservation" style="margin-left: 200px;">
        <h4 class="mini_title">Sign up or login</h4>
        <h2 class="title"> fill this form to make a more proprieties</h2>
       
        <div id="first-form">
            <label> Your Name</label>
            <input type="text" wire:model="name" name="name">
            @error('name')
            <p style="color: red">{{ $message }}</p>
            @enderror
            <label> Your Email</label>
            <input type="email" wire:model="email" name="email">
            @error('email')
            <p style="color: red">{{ $message }}</p>
            @enderror
            <label> Password</label>
            <input type="password" wire:model='password' name="password">
            @error('password')
            <p style="color: red">{{ $message }}</p>
            @enderror
            <input type="submit" value="Sign up" wire:click="store" id="btn" href="home" >
            <h2 style="color: green; font-size:15px; text-align: center; " id="first-btn" >login</h2>
        </div>
        <form  id="second-form" style="display: none;" action="{{route('login')}}">
           @csrf
            <label> Your Email</label>
            <input type="email" name="email1">
            {{-- @error('email1')
            <p style="color: red">{{ $message }}</p>
            @enderror --}}
            <label> Password</label>
            <input type="password" name="password1">
            {{-- @error('password1')
            <p style="color: red">{{ $message }}</p>
            @enderror --}}
           
            <input type="submit" value="Login">
            <h2 style="color: green; text-align: center; " id="second-btn">Sign up</h2>
        </form>

    </section>
    <style>
#hhh{
    animation: animatee 4s linear;
    transition: 0.5s;
  
}
        @keyframes animatee {
    0% {
        opacity: 100%;
      
    }
    50%{
        opacity: 50%;
      
    } 
    100% {
        opacity: 0%;
      
    }
   

}
#first-form,#second-form p{
    margin-bottom: 15px;
  
font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
font-size: 15px;
}
        </style>
        <script type="text/javascript">
    function ok(var k){
k.preventDefault();
    }
        </script>
</div>
