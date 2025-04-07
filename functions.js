let loginForm =document.getElementById("honeypotForm");

loginForm.addEventListener("submit", function (event){
    event.preventDefault();

 
let username = document.getElementById("username").value;
let password = document.getElementById("password").value;

if(username === "Admin" && password === "007"){ //temporary until database is set up
    window.location.href = "Dashboard.html";
    }
     else {
    fetch("log_attempt.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `username=${username}&password=${password}`
     })
     
        document.getElementById("feedback").innerHTML = `Invalid credentials, ${username}`;    
        alert("Invalid credentials. Please try again.");
    }
  });

