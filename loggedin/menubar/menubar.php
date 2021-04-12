<link rel="stylesheet" href="/ProjectWebpro/loggedin/menubar/style.css">
<div class="nav">
    <img class="logo" src="/ProjectWebpro/materials/logo.png" alt="">
    <nav>
        <ul class="nav_link">
            <li><a href="/ProjectWebpro/loggedin/index.php">Home</a></li>
            <li><a href="/ProjectWebpro/loggedin/switch.php">Switches</a></li>
            <li><a href="/ProjectWebpro/loggedin/keycap.php">Keycaps</a></li>
            <li><a href="/ProjectWebpro/loggedin/about.php">About</a></li>
            <li><a href="/ProjectWebpro/loggedin/comment.php">Comment</a></li>
            <a href="?logout='1'"><button>Logout</button></a>
            <div class="user">
                Username : <?php echo $_SESSION['username']; ?>
            </div>
            

        </ul>
    </nav>
</div>