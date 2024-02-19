    <header>
        <div class="logo">
            <p><span>Qr</span>Code</p>
        </div>
        <ul class="menu">
            {{-- <li><a href="#home"></a></li>
            <li><a href="#menu"></a></li>
            <li><a href="#about_us"></a></li> --}}
            <!-- <li><a href="#reservation">Réservation</a></li> -->
         </ul>
        <!-- menu responsive -->
        <div class="toggle_menu"></div>
    </header>
@yield('content')

<footer>
  

    <p class="footer_text ">Réalisé par <span>Yassine Aboulanouar</span> </p>
</footer>

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
@media (max-width:964px) {
    header .menu {
        display: none;
    }
    header {
        padding: 0 20px;
    }
    #menu .dishes .dish {
        width: 100%;
        max-width: 260px;
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
}


</style>
<script>
      var small_menu = document.querySelector('.toggle_menu')
        var menu = document.querySelector('.menu')
        small_menu.onclick = function() {
            small_menu.classList.toggle('active');
            menu.classList.toggle('responsive');
        }
       
    document.getElementById('btnn').addEventListener('click', function(){
        alert("hola");
    });

</script>