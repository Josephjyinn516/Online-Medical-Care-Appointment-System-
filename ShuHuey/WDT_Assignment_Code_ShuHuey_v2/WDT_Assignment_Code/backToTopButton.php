<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_scroll_to_top -->
<!DOCTYPE html>
<html>
<head>
<style>
import "@fontsource/dm-sans"

body{
    font-family: 'DM Sans';
    font-size: 20px;
}

#myBtn {
    font-family: 'DM Sans';
    display: none;
    position: fixed;
    bottom: 5px;
    right: 5px;
    z-index: 99;
    font-size: 20px;
    border: none;
    outline: none;
    background-color: gray;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
}

#myBtn:hover {
  background-color: #01A9B2;
}

#backToTop{
  height: 30px;
  width: 30px;
  color: azure;
}
</style>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">
<img src="img/backToTopWHITE.png" title="Back To Top" alt="Back To Top" id="backToTop"></img>
<br>Top
</button> 

<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 100;
  document.documentElement.scrollTop = 100;
}
</script>

</body>
</html>
