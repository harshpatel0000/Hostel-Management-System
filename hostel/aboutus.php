<html lang="en">

<head>
    <title>Contact</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing:border-box ;
    font-family:'Poppins',sans-serif;
}
.contact
{
    position:relative;
    min-height: 100vh;
    padding: 50px 100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background:url(img/aboutbg.avif);
    background-size: cover;
}
.contact .content
{
    max-width: 800px;
    text-align: center;
}
.contact .content h2
{
    margin-top: -30px;
    font-size: 60px;
    font-weight: 500;
    color: black;
    font-weight: bold;
    text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
  font-weight: bold;
      font-size: 190px;
}

@keyframes textclip {
  to {
    background-position: 200% center;
    font-weight: bold;
  }
}
 .waviy {
  position: relative;
  color: black;
    font-weight: bold;
}
.waviy span {
    color: black;
    font-weight: bold;
  position: relative;
  display: inline-block;
  font-size: 40px;
  
  
}
@keyframes flip {
  0%,80% {
    font-weight: bold;
    transform: rotateY(360deg) 
  }

}
.contact .content p
{
    /* margin: -25px; */
    margin-top: 20px;
    padding: 10px;
    font-weight: 300;
    color: #000;
}
.container
{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
}
.container .contactInfo
{
    width: 50%;
    display: flex;
    flex-direction: column;
}
.container .contactInfo .box
{
    position: relative;
    padding: 20px 0px;
    display: flex;
}
.container .contactInfo .box .icon
{
    min-width: 60px;
    height: 60px;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    font-size: 22px;
}
.container .contactInfo .box .text
{
    display: flex;
    margin-left: 20px;
    font-size: 16px;
    color: darkblue;
    flex-direction: column;
    font-weight: 300;
}
.container .contactInfo .box .text h3
{
    font-weight: 500;
    color: black;
}
.contactForm
{
    width: 40%;
    padding: 40px;
    margin-top: 30px;
    background: #fff;
}
.contactForm h2
{
    font-size: 30px;
    color: #333;
    font-weight: 500;
}
.contactForm .inputBox
{
    position: relative;
    width: 1005;
    margin-top: 10px;
}
.contactForm .inputBox input,
.contactForm .inputBox textarea
{
    width: 100%;
    padding: 5px 0;
    font-size: 16px;
    margin: 10px 0;
    border: none;
    border-bottom: 2px solid #333;
    outline: none;
    resize: none;
}
.contactForm .inputBox span
{
    position: absolute;
    left: 0;
    padding:5pd 0;
    font-size: 16px;
    margin: 16px 0;
    pointer-events: none;
    transition: 0.5s;
    color: #666;
}
.contactForm .inputBox input:focus ~ span,
.contactForm .inputBox input:valid ~ span,
.contactForm .inputBox textarea:focus ~ span,
.contactForm .inputBox textarea:focus ~ span
{
    color: #e91e63;
    font-size:12px ;
    transform: translateY(-20px);
}
.contactForm .inputBox input[type="submit"]
{
    width: 100px;
    background: #00bcd4;
    color: #fff;
    border: none;
    cursor: pointer;
    padding: 10px;
    font-size: 18px;
}
@media (max-width: 991px)
{
    .contact
    {
        padding: 50px;
    }
    .container
    {
        flex-direction: column;
    }
    .container .contactInfo
    {
        margin-bottom: 40px;
    }
    .container .contactInfo, .contactForm
    {
        width: 100%;
    }
}

.navbar{
        
    border-radius: 30px;
}
.navbar ul{
    display: flex;
    float: right;
    padding: 20px;
    margin-right: -755px;
    margin-top: -65px;
    transition: .3s ease-in-out;
}
.navbar li{
    list-style: none ;
    margin: 13px 20px; 
    
}
.navbar li a{
    padding: 3px 3px;
    /* padding-left: 15px; */
    text-decoration: none;
    color: black;
    font-size: 18px;
    font-weight: bold;
    font-family: 'Times New Roman';
    
}
/* .search{
    float: right;
    color: darkslategray;
    padding: 12px 75PX;
} */
.navbar input{
    border-radius: 4px;
    padding: 3px 17px;
    width: 130px;
}

.navbar a:hover{
    color:#fff;
}
.navbar ul li::after{ 
    content: '';
    height: 2px;
    width: 0;
    background:black;
    transition: 0.5s;
    display: block;
    margin: auto;
} 

.navbar ul li:hover::after{
    width: 100%;
}
.logo{
    float: left;
    padding-top: 10px;
    cursor: pointer;
    margin-top: 10px;
}

.logo img{
    float: left;
    width: 250px;
    height: 150px ;
    margin-top:-110px;
    margin-left:-760px;
    animation: none;
}


.footer{
    background:black;
    color: #8a8a8a;
    font-size: 14px;
    padding: 60px 0 20px;
}

.footer p{
    color: #8a8a8a;
}

.footer h3{
    color: #fff;
    margin-bottom: 20px;
}

.footer-col-1, .footer-col-2, .footer-col-3, .footer-col-4{
    min-width: 250px;
    margin-bottom: 20px;
}

.footer-col-1{
    flex-basis: 30%;
}

.footer-col-2{
    flex: 1;
    text-align: center;
}

.footer-col-2 img{
    width: 200px;
    margin-bottom: 20px;
}

.footer-col-3, .footer-col-4{
    flex-basis: 12%;
    text-align: center;
}

.footer ul{
    list-style-type: none;
}

.app-logo{
    margin-top: 20px;
}

.app-logo img{
    width: 140px;
}

.footer hr{
    border: none;
    background: #b5b5b5;
    height: 1px;
    margin: 20px 0;
}

.copyright{
    text-align: center;
}

.containerr{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px ;
}
.row1{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}
.containerr{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px ;
}
        </style>
</head>

<body>
        <section class="contact">  
        
        <div class="content">
            
        <div class="waviy content">
   <span style="--i:1">A</span>
   <span style="--i:2">b</span>
   <span style="--i:3">o</span>
   <span style="--i:4">u</span>
   <span style="--i:5">t</span>
   <span style="--i:6">-</span>
   <span style="--i:7">U</span>
   <span style="--i:8">s</span>
  </div>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Boys Hostel, R.C.Technical Institute, near Sola Civil,<br>S.G Road,Ahemdabad.</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>7433065770</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                        <h3>Email Address</h3>
                        <p>harshpketanbhai@gmail.com</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="text">
                    <h3>Location</h3>
                    <a href="https://goo.gl/maps/Bb4ky11Ho5uC3k9y8">Our Hostel Location</a>
                    </div>
                </div>
            </div>
            </div>
</div>
        </div>
    </section>

    </div>
</body>

</html>