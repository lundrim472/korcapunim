
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Musicology</title>
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <!-- Font family Oswald Regular -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/script.js"></script>
    <style>
      .pricing 
      {
        text-align:center;
        background-color: #303030;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        align-content: center;
      }

      .ndarja
      {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        align-content: center;
      }
      .ndarja-majte ,.ndarja-mes,.ndarja-djathte
      {
        display: flex;
        margin:100px;
        justify-content: space-between;
        flex-direction: column;
        width: 33%;
        align-items:center;
        background-color: #e8631c;
        padding: 80px;
          }

          .ndarja button 
          {
            color:white;
            background-color: black;
            width: 100px;
            padding: 10px;
          }


          @media only screen and (max-width: 1199.99px){
            .ndarja
      {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        align-content: center;
      }
          }

          .dyshe 
          {
            display: grid;
            grid-template-columns: 1fr 1fr;
          }

          .shkrimi 
          {
            background-color: #e8631c;
            display: flex;
            justify-content: center;
            flex-direction: column;
            text-align: left;
            align-items: center;
            height: 600px;
          }

          .shkrimi button, .shkrimi p 
          {
            width: 300px;
          }

          .shkrimif
          {
            background-image: url(img/card1.jpg);
            background-repeat: no-repeat;
            background-size: cover;
          }

          @media only screen and (max-width: 1199.99px){ 
            .dyshe 
          {
            display: grid;
            grid-template-columns: 1fr;
          }
          }

          .container
          {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
          }

        .rradhitja 
        {
          display: grid;
          grid-template-columns: 1fr 1fr 1fr;
        }

        .kutia 
        {
          margin: 50px 100px 50px 100px;}

          @media only screen and (min-width: 300px){ 
               .rradhitja 
        {
          display: grid;
          grid-template-columns: 1fr;
        }
        }
        @media only screen and (min-width: 800px){ 
               .rradhitja 
        {
          display: grid;
          grid-template-columns: 1fr 1fr 1fr;
        }
        }
        @media only screen and (min-width: 1200px){ 
               .rradhitja 
        {
          display: grid;
          grid-template-columns: 1fr 1fr 1fr;
        }
        }
        
        .right a:hover , .right li:hover
        {
          color:gray;
          transition: 0.4s ease;
          cursor: pointer;
        }

        .footer {
  width: 100%;
  height: 600px;
  background: #303030;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
}
.footer .left {
  width: 50%;
  margin-left: 100px;
}

.footer .left p {
  margin: 20px 0;
  font-size: 20px;
}

.footer .left .social i {
  background-color: #fff;
  color: #303030;
  padding: 20px;
  font-size: 20px;
  border-radius: 50%;
  margin-right: 10px;
  transition: 0.5s all;
}

.footer .left .social i:hover {
  background-color: #303030;
  color: #fff;
}

.footer .right {
  display: flex;
  width: 50%;
  justify-content: space-around;
}

.footer .right ul {
  list-style: none;
}

.footer .right ul li {
  font-size: 20px;
  font-weight: 400;
  font-family: Montserrat;
  margin-bottom: 10px;
}

.footer .right ul li:nth-child(1) {
  font-family: "Oswald", sans-serif;
  font-size: 30px;
}

/* CSS Media Query */
@media (max-width: 1150px) {
  .cards {
    flex-wrap: wrap;
  }
}

@media (max-width: 1050px) {
  body {
    overflow-x: hidden;
  }
  .navbar .links {
    width: 100%;
    overflow: hidden;
    position: absolute;
    display: flex;
    flex-direction: column;
    top: 90px;
    left: 0;
    z-index: 100;
    background-color: #303030;
    display: none;
  }
  .navbar .burger-menu {
    display: inline;
  }

  .intro .content {
    width: 100%;
  }
  .intro .content h1 {
    font-size: 50px;
  }
  .intro .content p {
    font-size: 20px;
    width: 80%;
  }

  .subscribe form input[type="email"] {
    width: 200px;
  }
}
.pricing 
{
  text-align:center;
}
    .pricing 
      {
        text-align:center;
        background-color: black;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        align-content: center;
      }

      .ndarja
      {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        align-content: center;
      }
      .ndarja-majte ,.ndarja-mes,.ndarja-djathte
      {
        display: flex;
        margin:100px;
        justify-content: space-between;
        flex-direction: column;
        width: 33%;
        align-items:center;
        background-color: #e8631c;
        padding: 80px;
          }

          .ndarja button 
          {
            color:white;
            background-color: black;
            width: 100px;
            padding: 10px;
          }

          @media only screen and (max-width: 1199.99px){
            .footer {
  width: 100%;
  height: 600px;
  background: #303030;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}
          }
          .footer {
  width: 100%;
  height: 600px;
  background: #303030;
  color: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: row;
}


.footer .left {
  width: 50%;
  margin-left: 100px;
}

.footer .left p {
  margin: 20px 0;
  font-size: 20px;
}

.footer .left .social i {
  background-color: #fff;
  color: #303030;
  padding: 20px;
  font-size: 20px;
  border-radius: 50%;
  margin-right: 10px;
  transition: 0.5s all;
}

.footer .left .social i:hover {
  background-color: #303030;
  color: #fff;
}

.footer .right {
  display: flex;
  width: 50%;
  justify-content: space-around;
}

.footer .right ul {
  list-style: none;
}

.footer .right ul li {
  font-size: 20px;
  font-weight: 400;
  font-family: Montserrat;
  margin-bottom: 10px;
}

.footer .right ul li:nth-child(1) {
  font-family: "Oswald", sans-serif;
  font-size: 30px;
}

/* CSS Media Query */
@media (max-width: 1150px) {
  .cards {
    flex-wrap: wrap;
  }
}

@media (max-width: 1050px) {
  body {
    overflow-x: hidden;
  }
  .navbar .links {
    width: 100%;
    overflow: hidden;
    position: absolute;
    display: flex;
    flex-direction: column;
    top: 90px;
    left: 0;
    z-index: 100;
    background-color: #303030;
    display: none;
  }
  .navbar .burger-menu {
    display: inline;
  }

  .intro .content {
    width: 100%;
  }
  .intro .content h1 {
    font-size: 50px;
  }
  .intro .content p {
    font-size: 20px;
    width: 80%;
  }

  .subscribe form input[type="email"] {
    width: 200px;
  }
}
.pricing 
{
  text-align:center;
}
    .pricing 
      {
        text-align:center;
        background-color: black;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        align-content: center;
      }

      .ndarja
      {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        align-content: center;
      }
      .ndarja-majte ,.ndarja-mes,.ndarja-djathte
      {
        display: flex;
        margin:100px;
        justify-content: space-between;
        flex-direction: column;
        width: 33%;
        align-items:center;
        background-color: #e8631c;
        padding: 80px;
          }

          .ndarja button 
          {
            color:white;
            background-color: black;
            width: 100px;
            padding: 10px;
          }




    </style>
  </head>
  <body>
    <nav class="navbar">
      <div class="logo">
        <a href="index.html">
          <i class="fa-solid fa-music"></i> <br />
          Musicology
        </a>
      </div>
      <button onclick="openNav()" class="burger-menu">
        <i class="fa-solid fa-bars"></i>
      </button>
      <div id="links" class="links">
        <a href="index.html">HOME</a>
        <a href="product.html">PRODUCT</a>
        <a href="promo.html">PROMO</a>
        <a href="about.html">ABOUT</a>
        <a href="contact.html">CONTACT</a>
      </div>
      <div class="search">
        <button>
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
    </nav>
    <div class="intro">
      <div class="content">
        <h1>Title HERE</h1>
        <p class="myfont">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa sint
          labore quam autem ipsum fugiat eligendi quisquam quas, veniam
          voluptate quos nihil est officia eaque! Illum at laborum soluta in.
        </p>
        <button><a href="registration.php">Regjitrohu</a></button>
      </div>
    </div>
    <div class="dacne-tour_section">
      <h1 class="title">Dance tour</h1>
      <p class="desc myfont">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia
        odio vitae vestibulum vestibulum.
      </p>
      <div class="cards">
        <div class="card">
          <img src="img/card1.jpg" alt="" />
          <h1>America</h1>
          <p class="myfont">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
        <div class="card">
          <img src="img/card1.jpg" alt="" />
          <h1>America</h1>
          <p class="myfont">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
        <div class="card">
          <img src="img/card1.jpg" alt="" />
          <h1>America</h1>
          <p class="myfont">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
    </div>

    <div class="pricing">
      <h1>pricing</h1>
      <p style="width: 50%; text-align: center;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod sequi incidunt nesciunt iure id e
        ligendi consequuntur eum ex, culpa sunt quibusdam voluptatibus atque accusamus aliquam ipsum veritatis sed quam provident.</p>

        <div class="ndarja">
          <div class="ndarja-majte">
                <img src="img/certificate" alt="" class="certificate">
                <h3>Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit beatae unde fugit possimus, error</p>
                <button class="ndarja">subscribe</button>
          </div>
          <div class="ndarja-mes">
                <img src="img/certificate" alt="" class="certificate">
                <h3>Title</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit beatae unde fugit possimus, error</p>
                <button class="ndarja">subscribe</button>
          </div>
          <div class="ndarja-djathte">
          <img src="img/certificate" alt="" class="certificate"> 
          <h3>Title</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit beatae unde fugit possimus, error</p>
          <button class="ndarja">subscribe</button>       
          </div>
        </div>
    </div>

    <div class="dyshe">
      <div class="shkrimi" >
        <img src="img/card1.jpg" alt="" height="100%" width="100%">

      </div>
      <div class="shkrimi" style="float: left; text-align: left;">
        <h1 style="font-size: 50px;">hello</h1>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus totam id quibusdam omnis, quia et, 
          ducimus hic laudantium nostrum magni molestiae harum iure repellendus facere non ex voluptate accusamus. Maxime.
        </p>
        <button>alnj</button>  
      </div>

      <div class="shkrimi" style="float: left; text-align: left;">

        <h1 style="font-size: 50px;">hello</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt sapiente iusto illum dolorem! Inventore consequatur consectetur quae aliqui
          d veritatis aspernatur perferendis illum sint! Beatae assumenda laudantium, obcaecati consequatur ut magnam.
        </p>
        <button>alnj</button>  
      </div>
      <div class="shkrimi"  >
        <img src="img/card1.jpg" alt="" height="100%" width="100%">
      </div>
    </div>

    <section id="pjesa-numeruese" style="color: white; text-align: center; 
    background-color: #303030;">
      <div class="container" style="color: white;
      background-color: #303030; ">

      <h1 style="font-size: 50px;">hello</h1>
      <p style="width: 700px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, atque. Nobis, voluptas? Recusandae 
        ullam dolor facere atque id unde dicta quibusdam nulla, doloribus similique voluptatibus. Explicabo voluptatem labore saepe a.</p>
  
          <div class="rradhitja" style="color: white;
          background-color: #303030; ">
              <div class="kutia">
                 <div class="numeruesi-produkt">
                  <div class="pershkrimi-linje" style="color:white;" >
                    
                    <a style="color: white; font-size: 80px;" class="numeruesi" data-target="200"></a>
                    <a style="color: white; font-size: 80px;">+</a> <br>
                    <a style="color: white; font-size: 20;">shtete</a>
                   </div>
                  </div>
              </div>
             
  
              <div class="kutia">
                  <div class="numeruesi-produkt">
                    <div class="pershkrimi-linje" style="color:white;" >
                      
                      <a style="color: white; font-size: 80px;" class="numeruesi" data-target="200"></a>
                      <a style="color: white; font-size: 80px;">+</a><br>
                      <a style="color: white; font-size: 20;">shtete</a>
                     </div>
                   </div>
               </div>
  
               <div class="kutia">
                  <div class="numeruesi-produkt">
                      <div class="pershkrimi-linje" style="color:white;" >
                        
                       <a style="color: white; font-size: 80px;" class="numeruesi" data-target="200"></a>
                       <a style="color: white; font-size: 80px;">+</a><br>
                       <a style="color: white; font-size: 20;">shtete</a>
                      </div>
                    </div>
                   </div>
               </div>
          </div>
      </div>
  </section>

    <div class="subscribe">
      <h1>SUBSCRIBE</h1>
      <p class="myfont">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi quidem
        fuga iste soluta cumque molestias?
      </p>
      <form action="" style="text-align: center;">
        <input class="myfont" type="email" placeholder="Your Email" />
        <input type="submit" value="SUBSCRIBE" onclick="alert('per te na bere subscribe ju duhet te regjistroheni Regjistrohu</a>!')"/>
        
      </form>
    </div>
    <div class="footer">
      <div class="left">
        <h1>Musicology</h1>
        <p class="myfont">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. <br />
          Voluptas ipsum, aliquam nihil exercitationem nesciunt sequi dicta nisi
          labore
          <br />
          repellendus aperiam aspernatur. Vitae illum, blanditiis possimus ad
          quae voluptatibus iure? Culpa.
        </p>
        <div class="social">
          <a href="#">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="#">
            <i class="fa-brands fa-facebook-f"></i>
          </a>
          <a href="#">
            <i class="fa-brands fa-twitter"></i>
          </a>
          <a href="#">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
      
        </div>
      </div>
      <div class="right">
        <ul class="myfont">
          <li>ABOUT</li>
          <li>History</li>
          <li>Our Team</li>
          <li>Our Team</li>
          <li>Our Team</li>
          <a href="login.php" style="text-decoration: none;color: white;" class="kycreg">Kycu</a>
          <a href="registration.php" style="text-decoration: none;color: white;" class="kycreg">Regjistrohu</a>
        </ul>
        <ul class="myfont">
          <li>Services</li>
          <li>History</li>
          <li>Our Team</li>
          <li>Our Team</li>
          <li>Our Team</li>
        </ul>
        <ul class="myfont">
          <li>Other</li>
          <li>History</li>
          <li>Our Team</li>
          <li>Our Team</li>
          <li>Our Team</li>
        </ul>
      </div>
    </div>

<script>
  let section_counter = document.querySelector('#section_counter');
let pjnr = document.querySelector('#pjesa-numeruese');
let counters = document.querySelectorAll('.counter-item .counter');
let numeruesit = document.querySelectorAll('.numeruesi-produkt .numeruesi');
let imgcounter = document.querySelectorAll('.counter-img')

//email
let numeruesiObserver = new IntersectionObserver(
  (entries, observer) => {
    let [entry] = entries;
    if (!entry.isIntersecting) return;

    let speed = 200;
    numeruesit.forEach((numeruesi, index) => {
      function Updatenumeruesi() {
        const targetNumber = +numeruesi.dataset.target;
        const initialNumber = +numeruesi.innerText;
        const incPerCount = targetNumber / speed;
        if (initialNumber < targetNumber) {
          numeruesi.innerText = Math.ceil(initialNumber + incPerCount);
          setTimeout(Updatenumeruesi, 40);
        }
        else {
          numeruesi.innerText = targetNumber;
        }
      }
      Updatenumeruesi();

      if (numeruesi.parentElement.style.animation) {
        numeruesi.parentElement.style.animation = '';
      } else {
        //numeruesi.style.animationduration
        numeruesi.parentElement.style.animation = `slide-up 3s ease forwards ${
          index / numeruesit.length + 0.5
        }s`;

        /*imgnumeruesi.parentElement.style.animation = `slide-uwp 3s ease forwards ${
          index / numeruesit.length + 0.5
        }s`;*/
      }
    });
    observer.unobserve(pjnr);
  },
  {
    root: null,
    threshold: window.innerWidth > 600 ? 0.4 : 0.3,
  }
);

numeruesiObserver.observe(pjnr);

// produktet

let CounterObserver = new IntersectionObserver(
  (entries, observer) => {
    let [entry] = entries;
    if (!entry.isIntersecting) return;

    let speed = 200;
    counters.forEach((counter, index) => {
      function UpdateCounter() {
        const targetNumber = +counter.dataset.target;
        const initialNumber = +counter.innerText;
        const incPerCount = targetNumber / speed;
        if (initialNumber < targetNumber) {
          counter.innerText = Math.ceil(initialNumber + incPerCount);
          setTimeout(UpdateCounter, 40);
        }
        else {
          counter.innerText = targetNumber;
        }
      }
      UpdateCounter();

      if (counter.parentElement.style.animation) {
        counter.parentElement.style.animation = '';
      } else {
        //counter.style.animationduration
        counter.parentElement.style.animation = `slide-up 3s ease forwards ${
          index / counters.length + 0.5
        }s`;

        /*imgcounter.parentElement.style.animation = `slide-uwp 3s ease forwards ${
          index / counters.length + 0.5
        }s`;*/
      }
    });
    observer.unobserve(section_counter);
  },
  {
    root: null,
    threshold: window.innerWidth > 600 ? 0.4 : 0.3,
  }
);

CounterObserver.observe(section_counter);
</script>
  </body>
</html>
