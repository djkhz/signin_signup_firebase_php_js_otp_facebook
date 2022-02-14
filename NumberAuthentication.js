window.onload=function () {
  render();
};
function render() {
    window.recaptchaVerifier=new firebase.auth.RecaptchaVerifier('recaptcha-container');
    recaptchaVerifier.render();
}
function phoneAuth() {
    //get the number
    var number=document.getElementById('number').value;
    var password = document.getElementById("password").value;
      var username = document.getElementById("username").value;
var email = document.getElementById("email").value;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    // var admin = require("firebase-admin");

    $.ajax({
        url: 'auth.php',
        method: 'POST',
        data: {number:number},
        success:function(data){
        //    $("#message").html(response);
        // var json = $.parseJSON(response); 
        // var received = JSON.parse(JSON.stringify(data));  
           if(data!="true") {
            firebase.auth().signInWithPhoneNumber(number,window.recaptchaVerifier).then(function (confirmationResult) {
                //s is in lowercase
                window.confirmationResult=confirmationResult;
                coderesult=confirmationResult;
                console.log(coderesult);
                alert("Message sent");
            // }).catch(function (error) {
            //     alert(error.message);
            // });
            
            // }
          }); }
            
        }
    });
}

    // $.ajax({
    //     url: "/auth.php", 
    //     type: "POST",
    //     dataType: "json",
    //     contentType: "application/json; charset=utf-8",
    //     data: JSON.stringify({ number: number}),
    //     success: function (result) {
    //         // when call is sucessfull
            
    //      },
    //      error: function (err) {
    //      // check the err for error details
    //      }
    //   }); // ajax call closing

//     firebase.auth().getUserByPhoneNumber(number)
//   .then(function(userRecord) {
//     // User exists.
//     alert("number exists");
//   })
//   .catch(function(error) {
//     if (error.code === 'auth/user-not-found') {
      // User not found.
    

   
   
    
function post() { 
        
       var number=document.getElementById('number').value;
    var password = document.getElementById("password").value;
      var username = document.getElementById("username").value;
var email = document.getElementById("email").value;  
        
        
        
        $.ajax({
                url: 'PushData.php',
                method: 'post',
                data: {username:username,email:email,password:password,number:number},
                success:function(response){
                   $("#message").html(response);
                    window.scrollTo(0,0);
                    
                }
            });}

document.getElementById("verify").addEventListener("click", codeverify);

function codeverify() {
    var code=document.getElementById('verificationCode').value;
    coderesult.confirm(code).then(function (result) {
        alert("Successfully registered");
        var user=result.user;
        console.log(user);
        post();
        window.location = 'http://localhost/kerrili/login.php';
    }).catch(function (error) {
        alert(error.message);
    });
}