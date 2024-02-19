<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QR CODE</title>
    @livewireStyles
    
</head>
<body>
    <header>
        <div class="logo">
            <p><span>Qr</span>Code</p>
        </div>
        <ul class="menu">
            <li><a href="#home">Acceuil</a></li>
            <li><a href="#mainn">Login</a></li>
            <li><a href="#mainn">Sign up</a></li>
            <li><a href="#about">About Me</a></li>
            <!-- <li><a href="#reservation">Réservation</a></li> -->
        </ul>
        <!-- menu responsive -->
        <div class="toggle_menu"></div>
    </header>


    <!-- section acceuil home -->
    <section id="home" style="width: 90%;">
 
        <div class="left">
            <h4 style="margin-bottom: 20px;">Qr Code Generator</h4>
            <h1 style="letter-spacing: 2px;">LET'S GENERATE UR QR CODE NOW</h1>
            <!-- <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa sequi eveniet sed quidem reprehenderit libero officiis.</p> -->
            <button><a href="{{route('qrcode')}}">GENERATE</a></button>
        </div>
         @if(session('success')) 
       
        <h1 id="jsp" style="position: absolute; top:20px; left:250px;width:500px; height: 30px; z-index:auto;background-color: rgba(0, 128, 0, 0.363); text-align: center; border-radius: 50px;padding: 5px; opacity: 0;">{{session('success')}}</h1>
        @endif 
        @if(session('err')) 
       
        <h1 id="jsp" style="position: absolute; top:20px; left:250px;width:500px; height: 30px; z-index:auto;background-color: rgba(230, 29, 29, 0.993); text-align: center; border-radius: 50px;padding: 5px; opacity: 0;">{{session('err')}}</h1>
        @endif 
      

        
      
        <div class="jsp"></div>
        <div class="right">
            <img src="images/hand-qrcodes.png" style="margin-left: 300px;margin-top: -50px;">
        </div>
        <div style="height: 700px; width:150px;background-color: rgb(72, 148, 54); border-top-left-radius: 100%; border-bottom-left-radius: 100%; margin-left:200px; opacity: 70%;">

        </div>
    </section>




    <!-- section about us -->

    <section id="about_us" style="background-color:  rgba(85, 84, 84, 0.05);">
        <h4 class="mini_title">What is </h4>
        <h2 class="title">Qr code?</h2>
        <div style="margin-top: -100px;" class="about">
            <div class="left">
                <img src="images/Qrcode 2.png">
            </div>
            <div class="right">
                <h3>Qr code</h3>
                <p class="bottom-spacing">
                    QR code stands for <strong>Quick Response Code</strong> and is barcode type that was invented by <a href="https://www.denso.com" target="_blank">Denso Wave</a> in 1994. Get more information at <a href="https://en.wikipedia.org/wiki/QR_code" target="_blank">Wikipedia</a>.
                </p>
                <!-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis ipsa non quis pariatur enim fugit ratione. Unde maiores veritatis eaque accusamus minus sunt, eligendi nisi officiis quis vitae dignissimos officia.</p> -->
                <button><a href="#">Learn More</a></button>
            </div>
        </div>
    </section>
    <section id="about_us" style="background-color:  rgba(255, 255, 255, 0.05);">
        
        <h1 class="title">FREQUENTLY ASKED QUESTIONS</h1>
        <div style="display: flex; padding: 25px">
     <div class="first-div" style="margin-right: 150px">
<div class="par">
<h2>Can I use generated QR CODES for comercial purposes?</h2>
<p>Yes, all QR codes you created with this QR generator are free and can be used for whatever you want.</p>
</div>
<div class="par">
    <h2>Are the created qr codes expiring?</h2>
    <p>They do not expire and will work forever! QR Codes created with QRCode Monkey are static and do not stop working after a certain time. You just can’t edit the content of the QR Codes again.</p>
    </div>
    <div class="par">
        <h2>Is there a scan limit for the QR codes?</h2>
        <p>There is no limit and the created QR code will work forever. Scan it is many times as you wish!</p>
        </div>
        <div class="par">
            <h2>My website work in all browsers??</h2>
            <p>Mywebsite needs a modern HTML5 capable browser and is officially supporting Chrome, Firefox, Safari, Edge and Internet Explorer 11.!</p>
            </div>
     </div>
     <div class="second-div">
        <div class="par">
            <h2>My QR code is not working, what can I do?</h2>
            <p>There are many reasons why a QR code is not working correctly. At first check your entered data. Sometimes there are little typos in your URL that break your QR code. Some QR codes (like vCard) contain a lot of data. Try reducing the data you entered for your QR code when possible. This can make it easier for QR code scanner apps to read your code. Try to remove the logo in your QR code and check if this helps. Also make sure that there is enough contrast between the background and foreground of the QR code. The foreground should always be darker than the background. Here is an article about reasons why your QR codes are not working.!</p>
            </div>
           
     </div>
    </div>
    </section>

    <!-- section comments -->

    <!-- section reservation -->
    <div class="main" style="display: flex;  justify-content: center; align-items: center;background-color:  rgba(147, 145, 145, 0.05);" id="mainn">
        <div class="imgg">
            <img src="./images/v2.png" alt="">
        </div>
        <livewire:home>
        
    </div>
    <!-- footer -->
    <footer>
        <div class=" services_list " id="about">


            <div class="service ">
                <img src="images/pin.png " alt=" ">
                <h2>Adresses</h2>
                <p>Morroco</p>
                <p>Berrechid</p>
            </div>
            <div class="service ">
                <img src="images/email.png " alt=" ">
                <h2>Emails</h2>
                <p>anoire.yassine@gmail.com</p>
                <p></p>
            </div>
            <div class="service ">
                <img src="images/call.png " alt=" ">
                <h2>Numbers</h2>
                <p>0774950554</p>
            </div>
            <hr>
        </div>

        <p class="footer_text ">Réalisé par <span>Yassine Aboulanouar</span> </p>
    </footer>
    <script>
        var small_menu = document.querySelector('.toggle_menu')
        var menu = document.querySelector('.menu')
        var fbtn = document.getElementById('first-btn');
        var sbtn = document.getElementById('second-btn');
        fbtn.onclick = function() {

            document.getElementById('first-form').style.display = 'none';
            document.getElementById('second-form').style.display = 'flex';
           

        }
        sbtn.onclick = function() {
            document.getElementById('second-form').style.display = 'none';
            document.getElementById('first-form').style.display = 'flex';
            
      


        }

        small_menu.onclick = function() {
            small_menu.classList.toggle('active');
            menu.classList.toggle('responsive');
        }
    </script>
  
    @livewireScripts
</body>
</html>



<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;500;700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
#jsp{
        animation: animatee 4s linear;
    transition: 0.5s;

    }

#first-form,
#second-form {
    animation: animate 2s linear;
    transition: 0.5s;
}

section {
    margin-top: 50px;
}

body {
    position: relative;
}

html {
    scroll-behavior: smooth;
    font-size: 62.5%;
}

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

.menu li {
    margin: 0 15px;
    list-style: none;
}

.menu li a {
    font-size: 14px;
    text-decoration: 0;
    color: #999;
    position: relative;
}

.menu li a::before {
    position: absolute;
    top: -5px;
    left: 0;
    content: "";
    width: 0;
    height: 2px;
    border-radius: 6px;
    background-color: #27ae60;
    transition: 0.5s;
}

.menu li a:hover::before {
    width: 100%;
}

.menu li a::after {
    position: absolute;
    bottom: -5px;
    right: 0;
    content: "";
    width: 0;
    height: 2px;
    border-radius: 6px;
    background-color: #27ae60;
    transition: 0.5s;
}

.menu li a:hover::after {
    width: 100%;
}

.menu li a:hover {
    color: #000;
}

.par p{
    max-width: 400px;
    font-size: 15px;
    letter-spacing: 0.03cm;
    padding-bottom: 6px;
    opacity: 70%;
}
.par h2{
    letter-spacing: 0.03cm;
    padding-bottom: 10px
}
/* home CSS */

#home {
    margin-top: 50px;
    display: flex;
    align-items: center;
    margin-left: 10%;
    margin-right: 10%;
    height: calc(100vh - 50px);
    justify-content: space-between;
}

#home .left {
    width: 40%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

#home .left h4 {
    font-size: 20px;
    color: #27ae60;
}

#home .left h1 {
    font-size: 40px;
}

#home .left p {
    font-size: 12px;
    color: #999;
}

#home .left button {
    margin-top: 20px;
    width: fit-content;
    padding: 5px 10px;
    background-color: #000;
    border: 0;
    transition: 0.5s;
    position: relative;
    cursor: pointer;
}

#home .left button a {
    text-decoration: 0;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    transition: 0.5s;
}

#home .left button::before {
    position: absolute;
    left: 5px;
    top: 5px;
    content: "";
    height: 100%;
    width: 100%;
    z-index: -1;
    background-color: #27ae60;
}

#home .left button:hover a {
    letter-spacing: 1px;
}

#home .right {
    width: 50%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
}

#home .right img {
    width: 100%;
    animation: animate 2s linear;
    transition: 0.5s;
}


/* animation image */

@keyframes animate {
    0% {
        opacity: 0;
    }
    100% {
        opacity: 1;
    }
}


/* menu CSS */

#menu {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    background-color: rgba(0, 0, 0, 0.05);
    padding: 50px 10px;
}

.mini_title {
    margin-top: 25px;
    font-size: 16px;
    color: #27ae60;
    text-transform: capitalize;
}

.title {
    font-size: 20px;
    /* text-transform: uppercase; */
    color: #273e60;
    margin-bottom: 25px;
    text-align: center;
}

.dishes {
    display: flex;
    flex-wrap: wrap;
    width: 80%;
    justify-content: space-around;
}


/*   */


/*Scrollbar CSS*/

::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-thumb {
    background-color: #27ae60;
}


/* about us CSS */

#about_us {
    display: flex;
    align-items: center;
    height: calc(100vh - 50px);
    flex-direction: column;
    padding: 50px 10%;
    width: 100%;
}

.about {
    display: flex;
    align-items: center;
    width: 100%;
    justify-content: space-between;
    height: 70vh;
}

.about .left {
    width: 40%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
}

.about .left img {
    width: 90%;
}

.about .right {
    width: 60%;
}

.about .right h3 {
    font-size: 35px;
    color: #273e60;
    margin: 10px 0;
}

.about .right p {
    font-size: 14px;
    color: #999;
}

.about .right button {
    margin: 20px 0;
    padding: 5px 60px;
    background-color: #27ae60;
    border: 0;
}

.about .right button a {
    color: #fff;
    text-decoration: 0;
    font-weight: bolder;
}


/* comment section CSS */


/* reservation CSS */

#reservation {
    margin-top: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    flex-direction: column;
}

#reservation div,form {
    display: flex;
    background-color: rgba(0, 0, 0, 0.05);
    padding: 25px;
    border-radius: 6px;
    flex-direction: column;
    width: 350px;
}

#reservation div,form label {
    margin-bottom: 8px;
    font-size: 14px;
}

#reservation div input {
    margin-bottom: 10px;
    padding: 5px;
    border: 1px solid transparent;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    outline: 0;
}
#reservation form input {
    margin-bottom: 10px;
    padding: 5px;
    border: 1px solid transparent;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    outline: 0;
}

#reservation div input:focus {
    outline: 1px solid #27ae60;
}

#reservation div input[type="submit"] {
    margin-top: 15px;
    color: #fff;
    background-color: #27ae60;
    border: 1px solid #27ae60;
}
#reservation form input[type="submit"] {
    margin-top: 15px;
    color: #fff;
    background-color: #27ae60;
    border: 1px solid #27ae60;
}


/* footer CSS */

footer {
    background-color: rgba(0, 0, 0, 0.05);
}

footer .services_list {
    padding: 10px 10%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.service img {
    width: 40px;
    background-color: #27ae60;
    padding: 10px;
    border-radius: 50%;
    margin-bottom: 10px;
}

.service {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin: 25px auto;
}

.service p {
    color: #333;
}

hr {
    background-color: #ccc;
    border: 0;
    height: 2px;
    width: 100%;
}

.footer_text {
    text-align: center;
    font-size: 15px;
    padding: 8px 0;
}

.footer_text span {
    color: #27ae60;
}

.toggle_menu {
    display: none;
}


/* Responsive */

@media (max-width:964px) {
    header .menu {
        display: none;
    }
    header {
        padding: 0 20px;
    }
    #home {
        flex-direction: column;
        padding: 12px;
        height: fit-content;
    }
    #home .left,
    #home .right {
        width: 100%;
        padding: 0;
    }
    #home .left {
        margin: 100px 0;
    }
    #home .left h1 {
        font-size: 20px;
        margin-bottom: 15px;
    }
    #home .left h4 {
        font-size: 15px;
    }
    #home .left p {
        font-size: 15px;
    }
    #menu .dishes .dish {
        width: 100%;
        max-width: 260px;
    }
    #about_us {
        padding: 10px;
        height: auto;
    }
    #about_us .about {
        flex-direction: column;
        height: fit-content;
    }
    #about_us .left,
    #about_us .right {
        width: 100%;
    }
    #about_us .left {
        height: fit-content;
    }
    #about_us .left img {
        width: 50%;
    }
    #about_us .right {
        text-align: center;
        padding: 20px;
    }
    .comment_section {
        height: auto;
    }
    .comment_section .comments .comment {
        width: 100%;
        margin-top: 20px;
    }
    .services_list .service {
        padding: 0 50px;
    }
    .toggle_menu {
        display: flex;
        height: 40px;
        width: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        cursor: pointer;
    }
    .toggle_menu::before {
        position: absolute;
        content: "";
        height: 3px;
        width: 28px;
        background-color: #27ae60;
        border-radius: 6px;
        box-shadow: 0 10px 0 #27ae60;
        transform: translateY(-10px);
        transition: 0.5s;
    }
    .toggle_menu.active::before {
        transform: translateY(0) rotate(135deg);
        box-shadow: 0 0 0 #27ae60
    }
    .toggle_menu::after {
        position: absolute;
        content: "";
        height: 3px;
        width: 28px;
        background-color: #27ae60;
        border-radius: 6px;
        transform: translateY(10px);
        transition: 0.5s;
    }
    .toggle_menu.active::after {
        transform: translateY(0) rotate(-135deg);
    }
    header .menu.responsive {
        display: flex;
        position: absolute;
        top: 50px;
        left: 0;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        flex-direction: column;
    }
    header .menu.responsive li {
        margin: 15px 0;
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
}
    </style>