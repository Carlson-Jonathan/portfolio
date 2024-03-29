<!DOCTYPE html>
<html lang="en-US">

    <head>
        <?php include("scripts/head.php"); ?>
    </head>

    <body>
        <header>
            <h1>Jonathan Carlson</h1>
        </header>

        <main>
            <!-----------------------------------------------------------------
             - This is the left column which should include a picture and 
                some general information below it 
            ------------------------------------------------------------------>
            <div class="row">
                <div class="column" id="column1">
                    <img src="images/jon.jpg" alt="Profile picture">
                    <h2>Software Engineer</h2>
                    <div class="linelc"></div>
                    <h3>Contact:</h3>
                    <p class="contact">705 Larry Drive<br> Madison, Al 35758<br><br>
                    H: 256-513-6210<br>
                    C: 256-289-1177<br>
                    O: 256-665-8512</p><br>
                    <p class="contact">
                        Work:<br>
                        <a href="mailto:Jonathan.C.Carlson@SSA.gov?Subject=Position%20Vacancy" 
                        target="_top">Jonathan.C.Carlson@SSA.gov</a><br><br>
                    
                        Academic:<br>
                        <a href="mailto:Car99020@byui.edu?Subject=Position%20Vacancy" 
                        target="_top">Car99020@BYUI.edu</a><br><br>
                    
                        Personal:
                        <a href="mailto:JonathanCarlson3712@hotmail.com?Subject=Position%20Vacancy" 
                        target="_top">JonathanCarlson3712@Hotmail.com</a>
                        <span class="detail"> (preferred method of contact)</span>
                    </p><br><br>
                </div>

            <!-----------------------------------------------------------------
             - The right column should include the main links to the projects
             - and main information that the page is displaying. 
            ------------------------------------------------------------------>
                <div class="column" id="column2"><br>
                     <h4><i>"Jonathan is a dedicated professional who not only ensures that the job gets done, but will find innovative ways to create solutions to problems. He doesn't rely on being "told" what to do. He is observant and ensures that the extra mile is achieved. His business and management skills are sharp. Anyone would be lucky to have him on their team."</i><br><div style="text-align: right; margin-right: 20px;">-Damon Hall</div><br> 
                    
                    <div class="linerc"></div>
                    
                    <h3>Credentials</h3>
                    <ul class="indexli">
                        <a href="https://carlson-jonathan.github.io/documents/Jonathan%20Carlson's%20Resume.pdf" target="_blank"><li>Resume</li></a>
                        <a href="pages/references.php"><li>References</li></a>
                        <a href="https://carlson-jonathan.github.io/documents/Letter%20of%20Recommendation%20-%20Martin%20Roggio.pdf" target="_blank">
                            <li>Letter of Recommendation</li></a>
                    </ul><br>
                    <h3>Coding Projects</h3>
                    <ul class="indexli">
                        <a href="pages/serpentine.php"><li>Serpentine (Python)</li></a>
                        <a href="pages/pantryapp.php"><li>Stockpile Pantry App (Java)</li></a>  
                        <a href="pages/webprojects.php"><li>Web Development Projects</li></a>
                        <a href="pages/microprocessor.php"><li>Digital Micro-Processor</li></a>
                        <a href="pages/datastructures.php"><li>Data Structures (C++)</li></a>  
                        <a href="pages/SSA.php"><li>Social Security Calculators</li></a>
                    </ul>
                </div>
            </div>
        </main>  

        <footer>            
            <?php include("scripts/footer.php"); ?>
        </footer>
    </body>
</html>
