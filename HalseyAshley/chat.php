<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halsey Fan Chat

    </title>
    <link rel="icon" type="image/x-icon" href="favicon-32x32.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-dark  text-light">
 

 
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-app.js"></script>
 
<!-- include firebase database -->
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>
 
<script>
    // Your web app's Firebase configuration
    var  firebaseConfig = {
        apiKey: "AIzaSyAbSkgjal0d7vWk49Y9vsKsZjsWjIenR2I",
  authDomain: "ashley-f6a2c.firebaseapp.com",
  databaseURL: "https://ashley-f6a2c-default-rtdb.firebaseio.com",
  projectId: "ashley-f6a2c",
  storageBucket: "ashley-f6a2c.appspot.com",
  messagingSenderId: "524906477001",
  appId: "1:524906477001:web:a6c5d36980144c32ca2418"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    var myName = prompt("Enter your name");
</script>
     


<div class="card bg-dark text-light col-md-6 mx-auto mt-2 mb-1 signup shadow">
            <div class="card-body">

            <div class="input-group mb-3">
<ul id="messages" class="list-unstyled mx-3 my-3"></ul>
</div>
<form onsubmit="return sendMessage();">
<div class="input-group mb-3">
    <input id="message" placeholder="Enter message" onfocus="this.value=''" autocomplete="off" class="btn btn-outline-primary mx-auto form-control">
 
    <input type="submit" class=" btn btn-outline-primary mx-auto sendmsg"  >
</div>
</form> 
<script>

    firebase.database().ref("messages").on("child_added", function (snapshot) {
        var html = "";
    
        html += " <li class='mx-auto ' id='message-" + snapshot.key + "'>";
  
        if (snapshot.val().sender == myName) {
            html += "<button class='btn btn-outline-danger btn-sm me-2' data-id='" + snapshot.key + "' onclick='deleteMessage(this);'>";
            
                html += "Delete";
            html += "</button>";
        }
        html +=  snapshot.val().sender+ ": " + snapshot.val().message+"</span>";
        html += "</li>";
 
        document.getElementById("messages").innerHTML += html;
    });
    function deleteMessage(self) {
   
    var messageId = self.getAttribute("data-id");
 
 
    firebase.database().ref("messages").child(messageId).remove();
}
 

firebase.database().ref("messages").on("child_removed", function (snapshot) {
    // remove message node
    document.getElementById("message-" + snapshot.key).innerHTML = "This message has been removed";
});
</script>
</div>
</div>
<script>
    function sendMessage() {
        
        var message = document.getElementById("message").value;
 
       
        firebase.database().ref("messages").push().set({
            "sender": myName,
            "message": message
        });
 
       
        return false;
    }
   
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>