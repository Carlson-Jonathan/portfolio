<!DOCTYPE html>
<html lang="en-US">

    <head>
        <?php include("../scripts/head.php"); ?>
    </head>

    <body>
        <header>
            <h1>Web Development</h1>
            <div class="relative">
                <a href="../index.php"><img id="home" src="../images/home.jpg"></a>
            </div>            
        </header>

        <main>
            <!-----------------------------------------------------------------
             - This is the left column which should include a picture and 
                some general information below it 
            ------------------------------------------------------------------>
            <div class="row">
                <div class="column" id="column1" style="height: 800px">
                    <img src="../images/web.png" alt="Project Picture">
                    <h3>Technology</h3>
                    <p class="data">HTML5<br>CSS3<br>JavaScript<br>PHP<br>PostgreSQL
                        <br>Node.js<br>AJAX<br>
                    <h3>Repositories</h3>
                    <a href="https://github.com/Carlson-Jonathan/SalmonRiverAdventures" target="_blank"><p class="datalnk" style="text-decoration: underline;">Salmon River Adventures</p></a>
                    <a href="https://github.com/Carlson-Jonathan/Carlson-Jonathan.github.io/tree/master/pages" target="_blank"><p class="datalnk" style="text-decoration: underline;">DOM Manipulation</p></a>
                    <a href="https://github.com/Carlson-Jonathan/Carlson-Jonathan.github.io/tree/master/pages" target="_blank"><p class="datalnk" style="text-decoration: underline;">Text Encoder</p></a>
                    <a href="https://github.com/Carlson-Jonathan/CS313Week10" target="_blank"><p class="datalnk" style="text-decoration: underline;">Favorite Feeds</p></a>
                    <a href="https://github.com/Carlson-Jonathan/CS313-PHP/tree/master/web" target="_blank"><p class="datalnk" style="text-decoration: underline;">Roller Derby Database</p></a>
                </div>

            <!-----------------------------------------------------------------
             - The right column should include the main links to the projects
             - and main information that the page is displaying. 
            ------------------------------------------------------------------>
                <div class="column" id="column2"><br>
                     <h4>These web applications illustrate a variety of my academic web-based projects, some using more complex back-ended web development tools and methods.</h4><br>
                    
                    <a href="http://sra.photographybyshannon.com/" target="_blank";><h3 class="weblink" style="text-decoration: underline;">Salmon River Adventures</h3></a>
                    <h4>Academic project for a front-end web development course that illustrates basic web design principles using HTML, CSS, JavaScript, and jQuery.</h4>
                    
                    <br><div class="linerc"></div><br>

                    <a href="https://carlson-jonathan.github.io/pages/DOM.html" target="_blank"><h3 class="weblink" style="text-decoration: underline">DOM Manipulation</h3></a>
                    <h4>Academic project that demonstrates JavaScript DOM manipulation and use of local storage. </h4>
                    
                    <br><div class="linerc"></div><br>
                    
                    <a href="https://carlson-jonathan.github.io/pages/encoder.html" target="_blank"><h3 class="weblink" style="text-decoration: underline">Text Encoder</h3></a>
                    <h4>Academic project illustrating advanced use of CSS combined with JavaScript and AJAX. </h4>
                    
                    <br><div class="linerc"></div><br>

                    <a href="https://pure-dusk-96015.herokuapp.com/" target="_blank"><h3 class="weblink" style="text-decoration: underline">Favorite Feeds</h3></a>
                    <h4>Academic project using the ‘express’ and ‘ejs’ modules of Node.js to run a server and display several API feeds using AJAX and JSON.</h4>

                    <br><div class="linerc"></div><br>

                    <a href="https://tranquil-mesa-11516.herokuapp.com/pages/prove06/prove06.php" target="_blank"><h3 class="weblink" style="text-decoration: underline">Roller Derby Database</h3></a>
                    <h4>Academic project that demonstrates reading and writing data to a PostgreSQL database using PHP.</h4>



                    
                </div>
            </div>
        </main>  

        <footer>            
            <?php include("../scripts/footer.php"); ?>
        </footer>
    </body>
</html>
