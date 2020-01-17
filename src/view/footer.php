<?php
if($playing === 'true'){
  $js_action = 'stop';
}else{
  $js_action = 'start';
}
$footer = '<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
</body>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
// When the user scrolls down 5px from the top of the document, show the button
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

document.addEventListener("keydown", function(event) {
  console.log(event.which);
  switch (event.which){
    case 13:
      params = "action='.$js_action.'";
      break;
    case 37:
      params = "action=prev&prev='.($currentIndex-1).'";
      break;
    case 38:
      params = "action=prev&prev='.($currentIndex-1).'";
      break;
    case 39:
      params = "action=next&next='.($currentIndex+1).'";
      break;
    case 40:
      params = "action=next&next='.($currentIndex+1).'";
      break;
  }
  var url = "'.$this->settings['URL'].'";
  let xhr = new XMLHttpRequest();
  xhr.open("POST", url, true);

  //Send the proper header information along with the request
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

  xhr.send(params);
  xhr.onload = function() {
    if (xhr.status != 200) { // analyze HTTP status of the response
      alert(`Error ${xhr.status}: ${xhr.statusText}`); // e.g. 404: Not Found
    } else { // show the result
      location.reload();
    }
  };

})
</script>
</html>';
