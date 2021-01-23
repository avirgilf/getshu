<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>
        <style>

          body
          {
                font-family: 'Nunito';
          }
          *
          {
                box-sizing: border-box;
          }

            .mobileShow {display: none;}
            .pcshow { display: none; }
            /* Smartphone Portrait and Landscape */
            @media only screen
              and (max-width : 500px){ 
                .mobileShow {display: block;}

                .sign-content {
                background-color: #FD5068;
            }
            .sign-content-in {
                background-color: #FD5068;
                position: absolute;
                top: 0%;
                bottom: 0%;
                left: 2%;
                right: 2%;
                width: 96%;
                height:100%;
                border-width: 2px;
                border-style: solid;
                border-color: white;
            }
            .white-text{
                color:white;
                top: 0%;
                bottom: 0%;
                left: 0%;
                right: 0%;
                width: 100%;
            }
            .span-top-30{
                margin-top:10%;
            }
            .buton{
                background:rgba(10, 10, 9, 0.45);
                background-repeat:no-repeat;
                border: none;
                cursor:pointer;
                overflow: hidden;  
                color:white;
                width:100%;
                height:40px;
                margin-top:0px;
                border-radius: 15px;
            }
            .vertical-align{
                vertical-align: middle;
                margin-top: 0%;
                padding: auto;
            }
            .vertical-align1{
                margin: auto;
                width: 80%;
                padding: 0px;
            }
            .iinput{
                width:100%;
                background-color: #F5F5F5;
                border: 0px solid #F5F5F5;
                height: 40px;
                border-radius: 15px;
                Margin-top:10px;
                padding-left: 20px;
            }
            .iinputsub{
                width:100%;
                background-color: #343434;
                color:white;
                border: 0px solid #343434;
                height: 40px;
                border-radius: 15px;
                Margin-top:10px;
                padding-left: 20px;
            }    
        
            #regForm {
              margin: 10px auto;
              font-family: Raleway;
              padding: 10px;
              width: 100%;
              min-width: 300px;
            }
            
            h1 {
              text-align: center;  
            }
            
            input {
              padding: 10px;
              width: 100%;
              font-size: 17px;
              font-family: Raleway;
              border: 1px solid #aaaaaa;
            }
            
            /* Mark input boxes that gets an error on validation: */
            input.invalid {
              background-color: #ffdddd;
            }
            
            /* Hide all steps by default: */
            .tab {
              display: none;
            }
            
            button {
                padding: 10px 20px;
                font-size: 17px;
                font-family: Raleway;
                cursor: pointer;
            
                background-color: #343434;
                color:white;
                border: 0px solid #343434;
                height: 40px;
                border-radius: 15px;
                Margin-top:10px;
                padding-left: 20px;
                text-decoration:none;
            }
            
            button:hover {
              opacity: 0.8;
            }
            
            #prevBtn {
              background-color: #bbbbbb;
            }
            
            /* Make circles that indicate the steps of the form: */
            .step {
              height: 15px;
              width: 15px;
              margin: 0 2px;
              background-color: #bbbbbb;
              border: none;  
              border-radius: 50%;
              display: inline-block;
              opacity: 0.5;
            }
            
            .step.active {
              opacity: 1;
            }
            
            /* Mark the steps that are finished and valid: */
            .step.finish {
              background-color: #4CAF50;
            }

            }




            /* pc Portrait and Landscape */
            @media only screen
            and (min-width : 501px){
                .pcshow { display: block;}

                

            }




           
            
  
    </style>
    
    </head>
    <body>
        <main>
            <div class="sign-content">
                <div class="sign-content-in">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-6 white-text text-center ">
                            <div class="vertical-align">
                                <img style="whith:150px; height:100px;"  src="../public/storage/Shuga.png" /><br>
                                <span class="white-text" style="font-family: 'Audiowide', cursive;">Get shuga</span><br>
                                <span class="white-text">Hookup | Escorte | Sex call</span><br>
                                <span class="white-text">In Africa</span>
                            </div>
                        </div>
                            <div class="col-md-6 white-text text-center coo mobileShow">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </main>
    </body>
</html>

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab
    
    function showTab(n) {
      // This function will display the specified tab of the form...
      var x = document.getElementsByClassName("tab");
      x[n].style.display = "block";
      //... and fix the Previous/Next buttons:
      if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
      } else {
        document.getElementById("prevBtn").style.display = "inline";
      }
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Register";
      } else {
        document.getElementById("nextBtn").innerHTML = "Next";
      }
      //... and run a function that will display the correct step indicator:
      fixStepIndicator(n)
    }
    
    function nextPrev(n) {
      // This function will figure out which tab to display
      var x = document.getElementsByClassName("tab");
      // Exit the function if any field in the current tab is invalid:
      if (n == 1 && !validateForm()) return false;
      // Hide the current tab:
      x[currentTab].style.display = "none";
      // Increase or decrease the current tab by 1:
      currentTab = currentTab + n;
      // if you have reached the end of the form...
      if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
      showTab(currentTab);
    }
    
    function validateForm() {
      // This function deals with validation of the form fields
      var x, y, i, valid = true;
      x = document.getElementsByClassName("tab");
      y = x[currentTab].getElementsByTagName("input");
      // A loop that checks every input field in the current tab:
      for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
          // add an "invalid" class to the field:
          y[i].className += " invalid";
          // and set the current valid status to false
          valid = false;
        }
      }
      // If the valid status is true, mark the step as finished and valid:
      if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
      }
      return valid; // return the valid status
    }
    
    function fixStepIndicator(n) {
      // This function removes the "active" class of all steps...
      var i, x = document.getElementsByClassName("step");
      for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
      }
      //... and adds the "active" class on the current step:
      x[n].className += " active";
    }
</script>
