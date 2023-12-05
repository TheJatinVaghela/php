<?php 

// Initialize an empty array to store notes
$Storednotes = array();
    $userName = "";
while (true) {
    // Starting The E-Note
    echo "Welcome To Python E-NOTE"."\n";
    
    //Telling The User About What To Input
    echo "Type 1. Add UserName\nType 2. To Add Note\nType 3. To View Notes\n";
    echo"Type 4. To Exit\n";
    
    //Asking User For Input
    echo "Enter your choice: ";
    
    //Storing The User Input in $userInput
    $userInput = trim(fgets(STDIN));
    

    switch ($userInput) {
        case 1:
            $userName = trim(fgets(STDIN));
            break;
        case 2:
            //If User Asks  To Add Note
            
            echo "Enter your note: ";
            $Usernote = trim(fgets(STDIN));
            array_push($Storednotes, $Usernote);
            echo "Note added successfully.\n";
            break;
        case 3:
            //If User Asks To View notes
            if (empty($Storednotes)) {
                echo "No notes found.\n";
            } else {
                  echo "-----------------------------\n";
                    echo"\n";
                    echo "user =". $userName ."\n";
                foreach ($Storednotes as $note) {
                  
                    echo $note . "\n";
                }
            }
            break;
        case 4:
            // If User Asks To Exit
            echo "Exiting the application.\n";
            exit(0);
        default:
            //If User Inputs Invalid Input
            echo "Invalid choice. Please enter a valid option.\n";
    }
}

?>