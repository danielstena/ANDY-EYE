<?php  

echo "<h1 class='miniFooter'>Andy & EYE Company, 2018.</h1>";
?>
<footer id="footer">
<div id="FooterOne" class="ToDoList">
  <h2 class="column">Customers To Do list:</h2>
  <input type="text" id="myInput" placeholder="My mind tells me...">
  <span onclick="newElement()" class="addBtn">Add</span>
</div>

<ul id="myUL">
  <li>Buy our products.</li>
  <li>Send Andy&EYE a Message</li>
  <li>Become a global citizen and love everyone.</li>
</ul>
<br/>
    <br/>
    <br/>
    <br/>
<div class="column">
    <p>We love the structure of walking freely with your favorite shoes in our 100% Ecologic Shoelaces.
        </p>
        <p>Made in Sweden, our supplies are made out of the Northern Woods. We believe in the Sustained Development.</p>
    </div>
    <br/>
    <br/>
    <br/>
    <br/>
<div class="column"> <b>Social Medias</b>
    <p><i class="fab fa-facebook-f"></i></p>
    <p><i class="fab fa-instagram"></i></p>
    <p><i class="fab fa-linkedin-in"></i></p>
    <p><i class="fab fa-youtube"></i></p>
</div>

<script> 

        // Create a "close" button and append it to each list item
var myNodelist = document.getElementsByTagName("LI");
var i;
for (i = 0; i < myNodelist.length; i++) {
  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  myNodelist[i].appendChild(span);
}

// Click on a close button to hide the current list item
var close = document.getElementsByClassName("close");
var i;
for (i = 0; i < close.length; i++) {
  close[i].onclick = function() {
    var div = this.parentElement;
    div.style.display = "none";
  }
}

// Add a "checked" symbol when clicking on a list item
var list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if (ev.target.tagName === 'LI') {
    ev.target.classList.toggle('checked');
  }
}, false);

// Create a new list item when clicking on the "Add" button
function newElement() {
  var li = document.createElement("li");
  var inputValue = document.getElementById("myInput").value;
  var t = document.createTextNode(inputValue);
  li.appendChild(t);
  if (inputValue === '') {
    alert("You forgot to write something!");
  } else {
    document.getElementById("myUL").appendChild(li);
  }
  document.getElementById("myInput").value = "";

  var span = document.createElement("SPAN");
  var txt = document.createTextNode("\u00D7");
  span.className = "close";
  span.appendChild(txt);
  li.appendChild(span);

  for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
}

</script>
        
</body>
</footer>
</html>