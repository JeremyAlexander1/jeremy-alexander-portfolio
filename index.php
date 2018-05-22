<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <title>Jeremy Alexander - Web Designer</title>
    <meta name="description" content="Jeremy Alexander, freelance web design based in Portland, Oregon.">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/reset.css"> 
    <link rel="stylesheet" href="css/style.css"> 
    <link rel="stylesheet" href="css/helper.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/navigation.css">
    
    <!-- Imported Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    
     <!-- PHP header include -->
    <?php
        include 'includes/header.php';
    ?>
    
    <!-- Navigation -->
    <nav class="topnav" id="myTopnav">
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>    
            <a href="index.php" class="active">Home</a>
            <a href="#services">Services</a>
            <a href="#my-work">My Work</a>
            <a href="#about-me">About Me</a>
            <a href="#contact">Contact</a>

        <script>
            function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
            x.className += " responsive";
            } else {
            x.className = "topnav";
            }
            } 
        </script>     
    </nav>
    
    <main>
        <section class="section group" id="services">
            <h2>Services</h2>
            <section class="col span_3_of_12">
                <h3>Custom & Simple to Use Websites</h3>
                <img src="images/networking.jpg" alt="networking" class="small-heading-img">
                <p>I specialize in designing websites from the scratch. All finished products begin with an idea. My goal is to assist with the planning, designing, and exectution aspects of this process.</p>
            </section>
            <section class="col span_3_of_12">
                <h3>Designing for Multiple Devices</h3>
                <img src="images/devices.jpg" alt="cms" class="small-heading-img">
                <p>It's a fact that over half of the internets overall traffic comes from mobile devices. I design interfaces that use media queries to create a mobile-first design with progressive enhancement to larger resolutions.</p>
            </section>
            <section class="col span_3_of_12">
                <h3>Content Management Systems</h3>
                <img src="images/cms.jpg" alt="cms" class="small-heading-img">
                <p>If you are new to the coding world or perhaps looking for a better way to manage content for your site, CMS allows you to edit your websites content in a more seamless manner. I can upload websites to a content management system (CMS) as requested. Example: WordPress.</p>
            </section>
            <section class="col span_3_of_12">
                <h3>Web Optimization and Marketing</h3>
                <img src="images/seo.jpg" alt="seo" class="small-heading-img">
                <p>I design websites to be optimized for search engine results. I can also help create and build a social media presence.</p>
            </section>
            
            <section class="col span_4_of_12">
                <h3>Skillset</h3>    
                <ul>
                    <li>Proficent in front end web development using HTML5, CSS3, LESS, and JavaScript.</li>
                    <li>Ability to implement online marketing agendas, including SEO best practices.</li>
                    <li>Experience writing code for a content management system (CMS) such as WordPress.</li>
                    <li>Optimizing website content and styles for a mobile first design, using progressive enhancement for larger resolutions.</li>
                    <li>Familiarity with Photoshop.</li>
                    <li>Knowledge of PHP.</li>
                </ul>
            </section>
            <section class="col span_4_of_12">
                <h3>Objectives</h3>
                <ul>
                    <li>Support department staff to update, maintain, and develop new features for the organizations platform and website.</li>
                    <li>Assist with other research department website activities as necessary.</li>
                    <li>Gain on-hands experience with networking and working with peers within the industry.</li>
                    <li>Add new features, refresh existing designs, and troubleshooting websites.</li>
                    <li>Commitment to deliver high quality work.</li>
                </ul>
            </section>
            <section class="col span_4_of_12">
                <h3>My Goals</h3>
                <ul>
                    <li>Complete an internship by applying my classroom learnings in a real world environment.</li>
                    <li>Graduate Summer of 2018.</li>   
                    <li>Network with peers and experts in web development and design communities.</li>                 
                    <li>Work with small business owners, entrepreneurs, and individuals seeking to create an online presence in the form of websites.</li>                    
                </ul>
                <img src="images/goal-oriented.jpg" alt="goals">
            </section>
        </section>
        
        <section class="section group" id="my-work">    
            <h2>My Work</h2>
            <section class="col span_4_of_12">
                <h3><a href="http://jeremyalexander.webhostingforstudents.com/mock-sites/aja_final_web-site/">Andrew Joseph Alexander</a></h3>
                <a href="http://jeremyalexander.webhostingforstudents.com/mock-sites/aja_final_web-site/"><img src="images/placeholder.png" alt="Andrew Joseph Alexander" class="thumbnail-image"></a>
                <p><a href="http://jeremyalexander.webhostingforstudents.com/mock-sites/aja_final_web-site/">*Desktop resolution. Click screenshot to visit Andrew Joseph Alexander's website.</a></p>
                <p>Andrew Joseph Alexander works on Video Editing, Cinematography, Music Videos, Short Films, VFX, Highlight Films, Commercials, Cover Art, and Multimedia Videos. I redsigned Andrew's website to be optimized as a mobile-first interface with progressive enhancements for larger resolution devices.</p>
            </section>
            <section class="col span_4_of_12">
                <h3><a href="http://jeremyalexander.webhostingforstudents.com/mock-sites/burrito-masala-mock-website/">Burrito Masala</a></h3>
                <a href="http://jeremyalexander.webhostingforstudents.com/mock-sites/burrito-masala-mock-website/"><img src="images/placeholder.png" alt="Burrito Masala" class="thumbnail-image"></a>
                <p><a href="http://jeremyalexander.webhostingforstudents.com/mock-sites//burrito-masala-mock-website/">*Desktop resolution. Click screenshot to visit Burrito Masala.</a></p>
                <p>Burrito Masala is a fictional food cart located in downtown Portland, Oregon on the corner of SW 3rd and Alder. Burrito Masala specializes in cooking delicious southern Indian (Kerala) and Mexican food. The cart offers options to build burritos or bowls, and you can pick your ingredients. This site was designed to showcase my portfolio of work.</p>
            </section>
            <section class="col span_4_of_12">
                <h3><a href="#">Night Owl Party Supplies</a></h3>
                <a href="#"><img src="images/placeholder.png" alt="asset 3" class="thumbnail-image"></a>
                <p><a href="#">*Desktop resolution. Click screenshot to visit asset 3.</a></p>
                <p>Night Owl Party Supplies is a fictional site designed by Jeremy Alexander. Site coming soon.</p>
            </section>
        </section>
        
        <section class="section group" id="about-me">
            <h2>About Jeremy Alexander</h2>
            <section class="col span_6_of_12">
                <p>I'm a student at Portland Community College, and I will be graduating by summer of 2018. My degree is in Associate of Applied Science, AAS majoring in Web Site Development & Design. My goal is to complete work for small businesses, freelance creators, or any individuals seeking to design a clear and concise web presence.</p>  
                <p>When I'm not designing web sites, my hobbies include playing and watching sports, hiking, enjoying nature, and music production.</p>
                <p>Jeremy Alexander, freelance web design based in Portland, Oregon.</p>
                <a href="assets/resume_jeremy-alexander.pdf">Jeremy's PDF Resume</a>
            </section>  
            <section class="col span_6_of_12">
                <img src="images/jeremy-alexander-headshot-close-up-1.jpg" alt="Jeremy Alexander head shot">
            </section>              
        </section>
        
            <div class="container">
            <h3>Jeremy's Gallery</h3> 
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li> 
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li> 
            <li data-target="#myCarousel" data-slide-to="5"></li> 
            <li data-target="#myCarousel" data-slide-to="6"></li>
            <li data-target="#myCarousel" data-slide-to="7"></li> 
            <li data-target="#myCarousel" data-slide-to="8"></li>          
            </ol>    

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                
            <div class="item active">
            <img src="images/jeremy-alexander-headshot-1-resize.jpg" alt="Jeremy Alexander Headshot" style="width:100%;">
            </div>

            <div class="item">
            <img src="images/jeremy-alexander-headshot-2-resize.jpg" alt="Jeremy Alexander Headshot" style="width:100%;">
            </div>
                
            <div class="item">
            <img src="images/jeremy-alexander-headshot-3-resize.jpg" alt="Jeremy Alexander Headshot" style="width:100%;">
            </div>
                
            <div class="item">
            <img src="images/jeremy-alexander-headshot-4-black-white-resize.jpg" alt="Jeremy Alexander Headshot" style="width:100%;">
            </div>
                    
            <div class="item">
            <img src="images/jeremy-3d-graphic-design-aja.jpg" alt="Jeremy in 3D" style="width:100%;">
            </div>      
                
            <div class="item">
            <img src="images/jeremy-nature-1.png" alt="Jeremy in the Forest" style="width:100%;">
            </div>
                
            <div class="item">
            <img src="images/jeremy-nature-2.png" alt="Jeremy in the Forest" style="width:100%;">
            </div>
                
            <div class="item">
            <img src="images/jeremy-nature-3.png" alt="Jeremy in the Forest" style="width:100%;">
            </div>
                
            <div class="item">
            <img src="images/jeremy-nature-4.png" alt="Jeremy in the Forest" style="width:100%;">
            </div>
                
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
        
    </main>
        
    <?php
        include 'includes/footer.php';    
    ?>
    
</body>
</html>