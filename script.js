// searchbar open close
let main_nav = document.querySelector(".main_nav");
let searchBar = document.querySelector(".search_bar .bx-search");


searchBar.addEventListener("click", () => {
	main_nav.classList.toggle("showInput");
	if (main_nav.classList.contains("showInput")) {
		searchBar.classList.replace("bx-search", "bx-x");
	} else {
		searchBar.classList.replace("bx-x", "bx-search");
	}
});

// main navbar menu open close
let navLinks = document.querySelector(".nav_links");
let menuOpenBtn = document.querySelector(".main_nav .bx-menu");
let menuCloseBtn = document.querySelector(".nav_links .bx-x");
menuOpenBtn.onclick = function() {
	navLinks.style.left = "0";
}
menuCloseBtn.onclick = function() {
	navLinks.style.left = "-100%";
}


// main navbar submenu open close
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.onclick = function() {
	navLinks.classList.toggle("show1");
}
let moreArrow = document.querySelector(".more-arrow");
moreArrow.onclick = function() {
	navLinks.classList.toggle("show2");
}
let jsArrow = document.querySelector(".js-arrow");
jsArrow.onclick = function() {
	navLinks.classList.toggle("show3");
}

// topic navbar open close
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
	dropdown[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var dropdownContent = this.nextElementSibling;
		if (dropdownContent.style.display === "block") {
			dropdownContent.style.display = "none";
		} else {
			dropdownContent.style.display = "block";
		}
	});
}

// button back to top
var topbutton = document.getElementById("Top");
window.onscroll = function() {
	scrollFunction()
};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		topbutton.style.display = "block";
	} else {
		topbutton.style.display = "none";
	}
}

function topFunction() {
	document.body.scrollTop = 0;
	document.documentElement.scrollTop = 0;
}

// accordion (known problems and solutions)
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}

// poll
function getVote(int) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}