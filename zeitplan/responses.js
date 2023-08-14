function getBotResponse(input) {
    //rock paper scissors
    

    // Simple responses
    if (input == "hello") {
        return "Type '1' for fixing an appointment . '2' for connecting with your doctor via video call . '3' for getting information about schemes";
    } else if (input == "1") {
        return "alright for fixing the appointment for Dr please go to main page";
    } 
    
    else if (input == "2") {
        return "alright for connecting with the Dr please go to main page";
    }
    else if (input == "3") {
        return "Alright , go to the main page and click on 'Blog'";
    }
    else if(input =="Thankyou") {
        return "you'r welcome we hope it was helpful";
    }
    else {
        return "Try asking something else!";
    }
}