<?php

$footer = '  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</body>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 5 || document.documentElement.scrollTop > 5) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }

}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
     $(\'html, body\').animate({scrollTop:0}, \'slow\');
}
</script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</html>';
