<?php
/*
Template Name: My custom CV template
*/
get_header();

?>

<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">

    <title>Katja_Gaeva__Portfolio</title>
</head>
<body>
    <header class="header">
        <div class="container">
        <div class="top__header">
        <img src="<?php echo get_template_directory_uri(); ?>/kuvat/logo img.png" height="21" width="79">

            <div class="top__header-top">
                <a class="top__header-top top" href="#about">About</a>
                <a class="top__header-top top" href="#project">Projects</a>
                <a class="top__header-top top" href="#skills">Skills</a>
                <a class="top__header-top top" href="#service__title">Certificates</a>
                <a class="top__header-top top" href="#contact">Contact</a>  
            </div>
        </div>
        <div class="header__title">
            <div id="title-1">I'm Katja</div>
            <div id="title-2">Software developer.</div>
            <div id="title-3">Hi! I'm a student at Riveria school majoring in software development. Constant growth and development of personal skills is an important to me. I'm learning pretty fast, multitasking and stress resistance help me cope with different tasks. </div>
            <img src="<?php echo get_template_directory_uri(); ?>/kuvat/me2.jpg">
              
        </div>
        <div class="header__bottom">
            <div class="book__call">
            <a href="kuvat/cv_en_Katja Gaeva.pdf" download>
                <button class="book__call-btn">
                Download CV (EN) 
                </button>
            </a>
        </div>
        <div class="download_cv">
            
            <a href="kuvat/cv_fi_Katja Gaeva.pdf" download>
                <button class="download_cv-btn">
                Download CV (FI)
                </button>
            </a>
        </div>
        </div>
    </div>
    </header>
    <main>
        <div class="container">
        <div class="slider111" id="project">
            Projects
        </div>
        <div class="slider">
        <input type="radio" name="toggle" id="btn-1" checked>
        <input type="radio" name="toggle" id="btn-2">
        <input type="radio" name="toggle" id="btn-3">
        <input type="radio" name="toggle" id="btn-4">
        <input type="radio" name="toggle" id="btn-5">

        <div class="slider-controls">
            <label for="btn-1"></label>
            <label for="btn-2"></label>
            <label for="btn-3"></label>
            <label for="btn-4"></label>
            <label for="btn-5"></label>
        </div>

        <ul class="slides">
            <li class="slide">
            <div class="slide-content">
                <h2 class="slide-title">Ecommerce website "Sup"</h2>
                <p class="slide-text">This website was created using CSS and HTML. The site was created on the topic of sale, namely the sup-product. The site has a harmonious combination of colors, excellent readability and creative design.</p>
                <a href="projects/start/index.html" class="slide-link">Learn more</a>
            </div>
            <p class="slide-image">
                <img src="<?php echo get_template_directory_uri(); ?>/kuvat/sup.png" width="610" height="400">

            </p>
            </li>
            <li class="slide">
            <div class="slide-content">
                <h2 class="slide-title">Buy and sell (PHP/SQL)</h2>
                <p class="slide-text">This project is related to PHP programming used in sales channels. The goal is to use PHP and SQL to implement a (browser based) buy and sell channel.</p>
                <a href="https://github.com/Kaifutsi/SQL-PHP/tree/main/Osto%20ja%20myynti" class="slide-link">Learn more</a>
            </div>
            <p class="slide-image">
                <img src="<?php echo get_template_directory_uri(); ?>/kuvat/pphp sql.gif" width="600" height="400">

            </p>
            </li>
            <li class="slide">
            <div class="slide-content">
                <h2 class="slide-title">Pizza Calculator (Javascript/HTML)</h2>
                <p class="slide-text">This is a javascript project that can calculate the total cost of a pizza given different toppings and changes in the number of items.</p>
                <a href="https://github.com/Kaifutsi/HTML-Javascript/tree/main/Pizzalaskuri" class="slide-link">Learn more</a>
            </div>
            <p class="slide-image">
                <img src="<?php echo get_template_directory_uri(); ?>/kuvat/Pizzalaskuri.png" width="600" height="400">

            </p>
            </li>
            <li class="slide">
                <div class="slide-content">
                    <h2 class="slide-title">Service Calculator (Java)</h2>
                    <p class="slide-text">Application for calculating the cost of hairdressing services written in Java.</p>
                    <a href="https://github.com/Kaifutsi/NetBeans-Java/tree/main/parturikampaaja" class="slide-link">Learn more</a>
                </div>
                <p class="slide-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/kuvat/netbparturi.png" width="600" height="400">

                </p>
            </li>
            <li class="slide">
                <div class="slide-content">
                    <h2 class="slide-title">Chatbot (Python)</h2>
                    <p class="slide-text">This is my Finnish language learning chatbot written in Python.</p>
                    <a href="https://github.com/Kaifutsi/" class="slide-link">Learn more</a>
                </div>
                <p class="slide-image">
                    <img src="kuvat/finchatbot.gif" alt="stuff" width="200" height="400">
                    <img src="<?php echo get_template_directory_uri(); ?>/kuvat/finchatbot.gif" width="200" height="400">

                </p>
            </li>
        </ul>
        </div>
        <section class="section-3">
            <div class="skills" id="skills">
                <div class="skills__title">
                    Skills
                </div>
                <li>
                    <h3>HTML5</h3><span class="bar"><span class="html"></span></span>
                </li>
            
                <li>
                    <h3>CSS3</h3><span class="bar"><span class="css"></span></span>
                </li>
                <li>
                    <h3>JAVA</h3><span class="bar"><span class="java"></span></span>
                </li>
                <li>
                    <h3>PYTHON</h3><span class="bar"><span class="python"></span></span>
                </li>
                <li>
                    <h3>JAVASCRIPT</h3><span class="bar"><span class="javascript"></span></span>
                </li>
                <li>
                    <h3>SQL</h3><span class="bar"><span class="sql"></span></span>
                </li>
                <li>
                    <h3>PHP</h3><span class="bar"><span class="php"></span></span>
                </li>
                <li>
                    <h3>REACT</h3><span class="bar"><span class="react"></span></span>
                </li>
                <li>
                    <h3>VUE.JS</h3><span class="bar"><span class="vue"></span></span>
                </li>
                <li>
                    <h3>ANGULAR</h3><span class="bar"><span class="angular"></span></span>
                </li>
            </div>
        </section>
        <section class="section-4" id="about">
            <div class="section-4__all__text">
            <div class="section-4__title">
                Software developer
            </div>
            <div class="section-4__title-2">
                That's me!
            </div>
            </div>
            <div class="section-4__all__text">
            <div class="section-4__text">
                Development for me is not only a specialty, but also a hobby, as it is always interesting to discover something new in this field. In my free time, I try to develop not only technical skills, but also creative ones, as this affects creativity and a high level of work. The skills that I have acquired from my experience are the ability to work in a team, solve conflict situations, be attentive to details, have well-developed critical thinking and work in multitasking mode.
I am sure that if I have a chance, I will learn quickly and strive to become part of a team that achieves results for the benefit of the company.
            </div>
            </div>
            <div class="section-4__img">
                <img src="<?php echo get_template_directory_uri(); ?>/kuvat/a4U.gif" width="1000px" height="300px">

            </div>
            <div class="section-4__exper">
                <div class="section-4__exper__1">
                <div class="section-4__education-title">
                    Education
                </div>
                <div class="section-4__education-text">
                    <li><h1>Vocational school Riveria, Joensuu</h1><p>Software developer</p><p>• April 2022 - Present</p></li>
                    <li><h1>Herzen State Pedagogical University of Russia</h1><p>Cultural studies</p><p>• September 2014 - June 2019</p></li>
                    <li><h1>St.Petersburg State Vocational College of Tourism</h1><p>Tourism expert</p><p>• September 2011 - June 2014</p></li>
                </div>
                </div>
                <div class="section-4__exper__1">
                <div class="section-4__education-title">
                    Work Experience
                </div>
                <div class="section-4__education-text">
                    <li><h1>IT </h1><p>IT freelance</p><p>• December 2021 - Present</p></li>
                    <li><h1>Puhdas Ilo Oy</h1><p>Cleaner</p><p>• November 2021 - Present</p></li>
                    <li><h1>St.Petersburg Pulkovo Airport</h1><p>Passenger Check-in Officer</p><p>• February 2018 - June 2021</p></li>
                </div>
                </div>
            </div>
        </section>
        <section class="section-1">
            <div class="service">
                <div class="service__title" id="service__title">
                    <img src="<?php echo get_template_directory_uri(); ?>/kuvat/icon-education-icon-removebg-preview.png">

                </div>
                <div class="service__title-2">
                    Certificates
                </div>
            </div>
            <div>
                <div class="carousel">
                  <ul class="slides">
                    <input type="radio" name="radio-buttons" id="img-1" checked />
                    <li class="slide-container">
                      <div class="slide-image_1">
                        <img src="<?php echo get_template_directory_uri(); ?>/kuvat/js.png">
                      </div>
                      <div class="carousel-controls">
                        <label for="img-3" class="prev-slide">
                          <span>&lsaquo;</span>
                        </label>
                        <label for="img-2" class="next-slide">
                          <span>&rsaquo;</span>
                        </label>
                      </div>
                    </li>
                    <input type="radio" name="radio-buttons" id="img-2" />
                    <li class="slide-container">
                      <div class="slide-image_1">
                        <img src="<?php echo get_template_directory_uri(); ?>/kuvat/sql.png">
                      </div>
                      <div class="carousel-controls">
                        <label for="img-1" class="prev-slide">
                          <span>&lsaquo;</span>
                        </label>
                        <label for="img-3" class="next-slide">
                          <span>&rsaquo;</span>
                        </label>
                      </div>
                    </li>
                    <input type="radio" name="radio-buttons" id="img-3" />
                    <li class="slide-container">
                      <div class="slide-image_1">
                        <img src="<?php echo get_template_directory_uri(); ?>/kuvat/cloud.png">
                      </div>
                      <div class="carousel-controls">
                        <label for="img-2" class="prev-slide">
                          <span>&lsaquo;</span>
                        </label>
                        <label for="img-4" class="next-slide">
                          <span>&rsaquo;</span>
                        </label>
                      </div>
                    </li>
                    <input type="radio" name="radio-buttons" id="img-4" />
                    <li class="slide-container">
                        <div class="slide-image_1">
                          <img src="<?php echo get_template_directory_uri(); ?>/kuvat/vue.png">
                        </div>
                        <div class="carousel-controls">
                          <label for="img-3" class="prev-slide">
                            <span>&lsaquo;</span>
                          </label>
                          <label for="img-5" class="next-slide">
                            <span>&rsaquo;</span>
                          </label>
                        </div>
                      </li>
                      <input type="radio" name="radio-buttons" id="img-5" />
                      <li class="slide-container">
                          <div class="slide-image_1">
                            <img src="<?php echo get_template_directory_uri(); ?>/kuvat/angular.png">
                          </div>
                          <div class="carousel-controls">
                            <label for="img-4" class="prev-slide">
                              <span>&lsaquo;</span>
                            </label>
                            <label for="img-1" class="next-slide">
                              <span>&rsaquo;</span>
                            </label>
                          </div>
                        </li>
                  </ul>
                </div>
              </div>
        </section>
    </div>
    </main>
    <div class="container">
    <div class="footer">
            <div class="footer__title" id="contact">
                Contact
            </div>
            <br>
            <br>
            <br>
            <div class="footer__title-2">
                Let's get on a call.
            </div>
            <div class="footer__bottom">
                <div class="footer__bottom-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/kuvat/img portfolio.png" height="21" width="79">

                </div>
                <div class="footer__bottom-contact">katja.gaeva@edu.riveria.fi
                </div>
                <div class="footer__bottom-mail">
                    <svg width="30" height="21" viewBox="0 0 30 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.48148 0H28.1481C28.5411 0 28.9179 0.122916 29.1957 0.341708C29.4736 0.560501 29.6297 0.857247 29.6297 1.16666V19.8334C29.6297 20.1428 29.4736 20.4395 29.1957 20.6583C28.9179 20.8771 28.5411 21 28.1481 21H1.48148C1.08857 21 0.711748 20.8771 0.433916 20.6583C0.156084 20.4395 0 20.1428 0 19.8334V1.16666C0 0.857247 0.156084 0.560501 0.433916 0.341708C0.711748 0.122916 1.08857 0 1.48148 0ZM14.9037 10.1301L5.40444 3.77766L3.48592 5.55566L14.923 13.2031L26.1541 5.54984L24.2163 3.78466L14.9052 10.1301H14.9037Z" fill="#424242" fill-opacity="0.5"/>
                    </svg>
                    <p><a href="mailto:ekaterina_94_1994@icloud.com">ekaterina_94_1994@icloud.com</a></p>
                </div>       
            </div>
            <div class="footer__bottom-2">
                <table>
                <tr>
                    <td>LinkedIn</td>
                    <td>Instagram</td>
                    <td>Github</td>
                </tr>
                <tr>
                    <td><a href="https://fi.linkedin.com/in/ekaterina-gaeva-8a55371a2" target="_blank"><i class="fab fa-facebook fa-3x"></i></a></td>
                    <td><a href="https://www.instagram.com/ekaterinacornel/" target="_blank"><i class="fab fa-instagram fa-3x"></i></a></td>
                    <td><a href="https://github.com/Kaifutsi" target="_blank"><i class="fab fa-github fa-3x"></i></a></td>
                </tr>
            </table>
            </div>
    </div>
    </div>
</body>
</html>