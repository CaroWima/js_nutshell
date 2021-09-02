<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style type="text/css">
     

        /* The sidepanel menu */
        .sidepanel {
        height: 500px; /* Specify a height */
        width: 0; /* 0 width - change this with JavaScript */
        position: fixed; /* Stay in place */
        z-index: 1; /* Stay on top */
        top: 0;
        right: 0;
        background-color: #111; /* Black*/
        overflow-x: hidden; /* Disable horizontal scroll */
        padding-top: 60px; /* Place content 60px from the top */
        transition: 0.3s; /* 0.5 second transition effect to slide in the sidepanel */
        }

        /* The sidepanel links */
        .sidepanel a {
        width: 100%;
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        transition: 0.3s;
        }

        /* When you mouse over the navigation links, change their color */
        .sidepanel a:hover {
        color: #f1f1f1;
        }

        /* Position and style the close button (top right corner) */
        .sidepanel .closebtn {
        position: absolute;
        top: 0;
        right: 0;
        font-size: 36px;
        /* margin-left: 50px; */
        }

        /* Style the button that is used to open the sidepanel */
        .openbtn {
        width: 100%;
        right:0;
        font-size: 20px;
        cursor: pointer;
        background-color: #111;
        color: white;
        padding: 10px 15px;
        border: none;
        }

        .openbtn:hover {
        background-color: #444;
        }

        a, h3{
        color: white;
        }
   </style>
  </head>

  <!-- ____________________ end head, start body __________________ -->

<body>
    <div class="row">


    </div>

    <div class="row">
        <div class="col-sm-2">
            
        </div>

        <div class="col-sm-8">

        </div>

        <!-- _____________________ HERE DOWN _______________________-->
        <div class="col-sm-2">
            <button class="openbtn" onclick="openNav()">&#9776; </button>
            <div id="mySidepanel" class="sidepanel">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                
                <div class="toc">
                
                </div>  

                <div class="panel-group" id="accordion">

                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a onclick="expand(this)" data-toggle="collapse" data-parent="#accordion" href="#collapse1">Related Topics</a>
                            </h3>
                        </div>

                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a onclick="expand(this)" data-toggle="collapse" data-parent="#accordion" href="#collapse2">Beginner Topics</a>
                            </h3>
                        </div>
                        
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">

                                links need to be provided
                                A: Zeichenketten verbinden; Single Quotes - Double Quotes
                                B: Zeichenketten und Werte von Variablen anzeigen per  “innerHTML” 
                                C: Rechnen: Addition, Subtraktion, Division, Modulo 		
                                D: if - else if - else - 								
                                F: do-while loop 									
                                G: for loop 										
                                H: Array length push() pop() shift() unshift() sort() forEach() 	
                                I: Datum, Uhrzeit anzeigen 							
                                J: Funktionen mit keinem, einem oder mehreren Argumenten 
                            </div>
                        </div>
                    </div>
                        
                        <hr>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                            <a onclick="expand(this)" data-toggle="collapse" data-parent="#accordion" href="#collapse3">Intermediate Topics</a>
                            </h3>
                        </div>

                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                            links need to be provided
                            K: switch
                            L: let 	
                            M: { } Datenobjekt; verschachtelt	
                            N: Events						
                            O: () => {} Funktionen (Arrow Functions) 
                            P: try {} catch {}				
                            Q: DOM Manipulation			
                            R: Style Manipulation				
                            S: Template Strings				
                            T: Local Storage                        
                            U: setTimeout, setInterval			

                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>

    </div>

    <div class="row">


    </div>
   
   
    <script>
        function openNav() {
                document.getElementById("mySidepanel").style.width = "16.6%";
                }

                /* Set the width of the sidebar to 0 (hide it) */
                function closeNav() {
                document.getElementById("mySidepanel").style.width = "0";
                }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  </body>
  <script>
      function expand(dropDown){
          let check = dropDown.parentElement.parentElement.nextElementSibling.classList.length;
          console.log(check);
          console.log(dropDown.parentElement.parentElement.nextElementSibling.classList.remove("collapse"));

          if(check == 2){
            dropDown.parentElement.parentElement.nextElementSibling.classList.remove("collapse")
          } else {
            dropDown.parentElement.parentElement.nextElementSibling.classList.add("collapse")
          };


      }

  </script>
</html>