// Confirm registration form
function registerFunction() {
	var form = document.getElementById('form-register');
	var xhttp;  
	try {
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
		    	if(this.responseText.includes("success")) {
		    		location.replace("../html/news_feed.php");
		    	}
			}
		};
		var data = new FormData(form);
		xhttp.open("POST", "../php/register.php", true);
		xhttp.send(data);
	} catch(err) {
		console.log("Error is: " + err);
		document.getElementById('error').innerHTML = err;
	}
}

// Confirm login of user
function loginFunction() {
	var form = document.getElementById('form-login');
	var xhttp;  
	try {
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
		    	if(this.responseText.includes("success")) {
		    		location.replace("../html/news_feed.php");
		    	} else {
		    		document.getElementById('error').innerHTML = this.responseText;
		    	}
			}
		};
		var data = new FormData(form);
		xhttp.open("POST", "../php/login.php", true);
		xhttp.send(data);
	} catch(err) {
		console.log("Error is: " + err);
		document.getElementById('error').innerHTML = err;
	}
}

// Add Posts to db
function addPostFunction() {
	var form_data = document.getElementById('formAddPostId');
	var xhttp;
	try {
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
		    	if(this.responseText.includes("success")) {
		    		form_data.submit();
		    		document.getElementById('error').innerHTML = "Post added";
		    	} else {
		    		document.getElementById('error').innerHTML = "Error, sql is : " + this.responseText;
		    	}
			}
		};
		var data = new FormData(form_data);
		xhttp.open("POST", "../php/addPost.php", true);
		xhttp.send(data);
	} catch(err) {
		console.log("Error is: " + err);
		document.getElementById('error').innerHTML = err;
	}
}

// show my posts
function showMyPost() {
	var a = document.getElementById('myPostsId');
	var xhttp;
	try {
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
		    	if(!this.responseText.includes("Failed")) {
		    		document.getElementById('myPostsId').innerHTML = this.responseText;
		    	} else {
		    		document.getElementById('error_2').innerHTML = "Error, sql is : " + this.responseText;
		    	}
			}
		};
		xhttp.open("POST", "../php/showMyPost.php", true);
		xhttp.send();
	} catch(err) {
		console.log("Error is: " + err);
		document.getElementById('error_2').innerHTML = err;
	}
}

// Enable button on radio selected
function radioBtnSelected() {
	document.getElementById('delete').disabled = false;
	document.getElementById('edit').disabled = false;
}

// Delete post
function deletePost() {
	var form_data = document.getElementById('formDelUptPost');
	var xhttp;
	try {
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
		    	if(this.responseText.includes("success")) {
		    		form_data.submit();
		    		document.getElementById('error').innerHTML = "Post deleted";
		    	} else {
		    		document.getElementById('error').innerHTML = "Error, sql is : " + this.responseText;
		    	}
			}
		};
		var data = new FormData(form_data);
		xhttp.open("POST", "../php/delete.php", true);
		xhttp.send(data);
	} catch(err) {
		console.log("Error is: " + err);
		document.getElementById('error').innerHTML = err;
	}
}

// Show Edit form
function editPost() {
	document.getElementById('editPost').style.visibility = "visible";
}

// Update post
function updatePostFunction() {
	var form_data = document.getElementById('formDelUptPost');
	var xhttp;
	try {
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
		    	if(this.responseText.includes("success")) {
		    		form_data.submit();
		    		document.getElementById('error').innerHTML = "Post Update";
		    	} else {
		    		document.getElementById('error').innerHTML = "Error, sql is : " + this.responseText;
		    	}
			}
		};
		var data = new FormData(form_data);
		xhttp.open("POST", "../php/edit.php", true);
		xhttp.send(data);
	} catch(err) {
		console.log("Error is: " + err);
		document.getElementById('error').innerHTML = err;
	}
}

// golbal variable
var isOnPageReload = false;
// Show all posts from database on page reload

function showAllPosts() {
	var xhttp = new XMLHttpRequest();
	try {
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
			    if(!this.responseText.includes("failed")) {
			  		document.getElementById('all_posts').innerHTML = this.responseText;
			    } else {
			    	document.getElementById('all_posts').innerHTML = "No posts available";
		    	}
			}
		};
		xhttp.open("GET", "../php/getAllPosts.php", true);
		xhttp.send();
		isOnPageReload = true;
	} catch(err) {
		console.log(err);
		document.getElementById('all_posts').innerHTML = err;
	}
	isOnPageReload = true;
}


// Show all posts after page reload, dynamically
setInterval( () => {
	var div = document.getElementById('all_posts');
	var xhttp;  
	try {
		xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
		    	if(this.responseText != "") {
		    		div.innerHTML = this.responseText;
		    	} else {
			   		div.innerHTML = "No posts available";
			   	}
			}
		};
		xhttp.open("POST", "../php/getAllPosts.php", true);
		xhttp.send();
	} catch(err) {
		console.log("Error is: " + err);
		document.getElementById('error').innerHTML = err;
	}
}, 500);
