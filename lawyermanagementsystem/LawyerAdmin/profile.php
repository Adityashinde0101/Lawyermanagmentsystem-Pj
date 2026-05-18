<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Profile</title>
<script>
  function showProfilePopup() {
    // Calculate the center position for the popup window
    var centerX = (window.innerWidth - 400) / 2;
    var centerY = (window.innerHeight - 300) / 2;
	var profileURL = 'lawyermanagementsystem/LawyerAdmin/index.php';

    // Open the popup window with calculated position
    var profileWindow = window.open('', 'User Profile', 'width=400,height=300,left=' + centerX + ',top=' + centerY);

    if (profileWindow) {
      profileWindow.document.write('<!DOCTYPE html>');
      profileWindow.document.write('<html>');
      profileWindow.document.write('<head>');
      profileWindow.document.write('<title>User Profile</title>');
      profileWindow.document.write('</head>');
      profileWindow.document.write('<body>');
      profileWindow.document.write('<h2>User Profile</h2>');
      profileWindow.document.write('<p>Name: John Doe</p>');
      profileWindow.document.write('<p>Email: john@example.com</p>');
      profileWindow.document.write('<p>Age: 30</p>');
      // Add more profile information here
      profileWindow.document.write('</body>');
      profileWindow.document.write('</html>');
    } else {
      alert("The popup window was blocked. Please enable popups for this site and try again.");
    }
  }

// Call showProfilePopup() with a slight delay when the page loads
window.onload = function() {
  setTimeout(showProfilePopup, 100);
};

</script>
</head>
<body>
</body>
</html>
