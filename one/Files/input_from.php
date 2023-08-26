<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="./index.css">
    <script src="../FormPage/index.js" defer></script>
</head>
<body> 

<!-- ---------------------------------------- STYLE------------------------------------------------ -->
    <style>
        
:root{
    --B_T-- :  clamp(2rem, 2rem + 2vw , 7rem);
    --B_T_3-- :  clamp(.5rem, 1rem + 2vw , 4rem);
}
h1{
    background-color: blue;
    text-align: center;
    width: 100%;
}
*,*::before,*::after{
    padding: 0%;
    margin: 0%;
    isolation: isolate;
    box-sizing: border-box;
}
.Color_Red{
    color: red;
}
body{
    background-color: cyan;
    display: flex;
    flex-direction: column;
    gap: 2rem;
}
.B_T{
    width: 100%;
    font-size: var(--B_T--);
    display: block;
}
.B_T_3{
    width: 100%;
    font-size: var(--B_T_3--);
    display: block;
}
.Title{
    background-color: white;
   height: 5rem;
   display: flex;
   align-items: center;
}
.user {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-inline: 10%;
}
.Left{
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-inline: 20%;
}
.Align{
    display: flex;
    width: 100%;
    margin-block: .2rem;
    /* column-gap: 1rem; */
    gap: 1rem;
    justify-content: flex-end;
}
.User_info_Wrap{
  display: flex;
}
.personal{
    
    display: flex;
    flex-direction: column;
    gap: 1rem;

}
.A_C{
    display: flex;
    flex-direction: column;
    gap: 1rem;
}
    </style>
<!-- ---------------------------------------- PHP------------------------------------------------ -->
<?php

print_r($_REQUEST);

?>
<!-- ---------------------------------------- HTML ------------------------------------------------ -->
<form action="" method="post" enctype="multipart/form-data" >
    <div class="Title">
 
            <h1 class="B_T Color_Red">indivisul ragistartion</h1>
      
    </div>
    <div class="user">
        <h3 class="B_T_3 Color_Red">User Perticular</h3>
        <div class="User_info_Wrap">
                
                <div class="Left">
                    <div class="Align">
                    <label for="Login_ID">*Login ID:</label>
                    <input  class="IN"   type="text" id="name" name="name" required><br>
                </div>
                <div class="Align">
                    <label for="Password">*Password:</label>
                    <input  class="IN"  type="Password" id="Password" name="Password" required><br>
                </div>
                <div class="Align">
                    <label for="ComfermPassword">*ComfermPassword:</label>
                    <input  class="IN"  type="ComfermPassword" id="ComfermPassword" name="ComfermPassword" required><br>
                </div>

                
        </div>
    </div>
    <br>
    <br>
    <br>
    <h3 class="B_T_3 Color_Red">personal Perticular</h3>
    <br>
    <br>
    <br>
    <div class="personal">
        <div class="User_info_Wrap">
            <div class="personal_right">
                <div class="" style="margin-inline: 5%; display:flex;justify-content:flex-end;">

                    <label for="Salutation">Salutation:</label>
                        <select id="Salutation" name="Salutation">
                            <option value="one">one</option>
                            <option value="two">two</option>
                            <option value="three">three</option>
                            <option value="Four">Four</option>
                        </select>

                </div>
                <div class="Align">
                    <label for="MiddleName">*Middle Name:</label>
                    <input class="IN"   type="text" id="MiddleName" name="MiddleName" required><br>
                </div>
                <div class="" style="margin-inline: 5%; display:flex;justify-content:flex-end;">
                    
                    <label for="Ragident_Status">Ragident Status:</label>
                        <select id="Ragident_Status" name="Ragident_Status">
                            <option value="one">one</option>
                            <option value="two">two</option>
                            <option value="three">three</option>
                            <option value="Four">Four</option>
                        </select>

                </div>
                <div class="Align">
                    <label for="Email_id">*Email id:</label>
                    <input class="IN"   type="email" id="email" name="email" required><br>
                </div>
            
               
            </div>

            <div class="personal_left">
                <div class="Align">
                    <label for="FirstName">*First Name:</label>
                    <input class="IN"   type="text" id="FirstName" name="FirstName" required><br>
                </div>
                <div class="Align">
                    <label for="LastName">*Last Name:</label>
                    <input class="IN"   type="text" id="LastName" name="LastName" required><br>
                </div>

                <div class="" style="margin-inline: 5%; display:flex;justify-content:flex-end;">
                    
                    <label for="Country">Country:</label>
                        <select id="Country" name="Country">
                            <option value="one">india</option>
                            <option value="two">Pak</option>
                            <option value="three">Rus</option>
                            <option value="Four">America</option>
                        </select>

                </div>

                <div class="Align">
                    <label for="Mo_Nmber">*Mo. Number:</label>
                    <input class="IN"   type="text" id="Mo_Nmber" name="Mo_Nmber" required><br>
                </div>

                
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <h3 class="B_T_3 Color_Red">Account Perticular</h3>
    <br>
    <br>
    <br>
    <div class="A_C">
        <div class="User_info_Wrap">

            <div class="personal_right">
                <div class="Align">
                    <label for="Ac_Num">*Ac_Num ( 15 digit ):</label>
                    <input  class="IN"  type="text" id="Ac_Num" name="Ac_Num" required><br>
                </div>
                
                <div class="" style="margin-inline: 5%; display:flex;justify-content:flex-end;">
                        
                    <label for="FundTranf">FundTranf:</label>
                        <select id="FundTranf" name="FundTranf">
                            <option value="one">one</option>
                            <option value="two">two</option>
                            <option value="three">three</option>
                            <option value="Four">four</option>
                        </select>

                </div>

            </div>
            <div class="personal_left">
                <div class="Align">
                    <label for="Niick_Name">*Niick Name:</label>
                    <input  class="IN"  type="text" id="Niick_Name" name="Niick_Name" required><br>
                </div>
            </div>

        </div>
    </div>

    <center>
        <button type="submit" value="submit">Submit</button>
        <button type="reset" value="reset" id="RESET" onclick="Reset()">Reset</button>
    </center>
</form>

    <br>
    <br>
    <br>

    <h3 class="B_T_3 Color_Red">Decleration</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ea quaerat aperiam aspernatur, voluptate molestias
        nisi voluptatibus ut perspiciatis rerum consequuntur asperiores modi, voluptatum ducimus, id similique eveniet
        magnam dolore consequatur dolorem laborum totam. Corporis in nisi est voluptates, aut, repellat totam quasi nesciunt
        illo doloribus aliquam voluptas adipisci? Autem laboriosam, voluptatem eligendi, nostrum fugiat provident modi nulla
        mollitia delectus, facere adipisci! Vero ducimus sint ea molestiae libero eos praesentium saepe quasi voluptatum
        earum deserunt placeat culpa obcaecati nisi quos ullam eius, blanditiis consectetur maxime possimus quaerat,
        laboriosam alias dignissimos! Inventore voluptas sapiente aspernatur ad, enim odio illum similique aut.
    </p>
    <br>
    <br>
    <br>
<!-- ---------------------------------------- JavaScript ------------------------------------------------ -->
    <script>
        
        let input = document.querySelectorAll(".IN");
        let RESET = document.querySelector("#RESET");

        console.log(RESET);

        function Reset(){
            for (let index = 0; index < input.length; index++) {
                const E = input[index];
                E.value = "";
            }
        }
    </script>

    
</body>
</html>