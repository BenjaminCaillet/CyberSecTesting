<?php
var comments = ['<p>Great post!</p>', '<p><script>alert("XSS Attack!")</script></p>'];
document.getElementById('comments').innerHTML = comments.join('');
?>
