<?php
  if(isset($_SESSION['logged']) && $_SESSION['logged']){ 
    echo "<script>
    let espaceGuest = document.querySelector('#espaceGuest');
    espaceGuest.style.display = 'none';
    </script>";
  }
  else{
    echo "<script>
    let espaceUser = document.querySelector('#espaceUser');
    espaceUser.style.display = 'none';
    </script>";
  }
?>
    <script src="PC3/Application/view/styles/js.js"></script>
    <script src="bootstrap/bootstrap-5.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>