<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>

<body style="
    margin:0; 
    font-family:'Segoe UI', Arial, sans-serif; 
    background:#eef2f3;
    display:flex;
    flex-direction:column;
    min-height:100vh;
">

<?php include 'navbar.php'; ?>

<div style="
    background-image: url('images\restaurant.avif');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 300px;
    color:white;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    position:relative;
">

    <!-- DARK OVERLAY -->
    <div style="
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:rgba(0,0,0,0.5);
    "></div>

    <div style="position:relative; z-index:1; text-align:center;">
        <h1 style="font-size:40px;">Foodie Delight 🍔</h1>
        <p>Best Food & Ambience</p>
    </div>

</div>

<!-- MAIN CONTENT -->
<div style="flex:1;">

<h2 style="text-align:center; margin-top:40px; color:#333;">Our Special Dishes</h2>

<!-- CARDS GRID -->
<div style="
    display:flex; 
    justify-content:center; 
    gap:30px; 
    flex-wrap:wrap; 
    padding:40px;
">

    <!-- CARD -->
    <div style="
        background:white; 
        padding:20px; 
        border-radius:15px; 
        box-shadow:0 8px 20px rgba(0,0,0,0.2); 
        text-align:center;
        width:240px;
        transition:0.3s;
    "
    onmouseover="this.style.transform='translateY(-10px)'" 
    onmouseout="this.style.transform='translateY(0)'">

        <img src="images/Cheese Pizza 🍕.webp" width="200" height="140" 
        style="border-radius:12px;"><br><br>

        <b style="font-size:18px;">Cheesy Pizza</b>
    </div>

    <!-- CARD -->
    <div style="
        background:white; 
        padding:20px; 
        border-radius:15px; 
        box-shadow:0 8px 20px rgba(0,0,0,0.2); 
        text-align:center;
        width:240px;
        transition:0.3s;
    "
    onmouseover="this.style.transform='translateY(-10px)'" 
    onmouseout="this.style.transform='translateY(0)'">

        <img src="images/chicken_dum_biryani.webp" width="200" height="140" 
        style="border-radius:12px;"><br><br>

        <b style="font-size:18px;">Chicken Biryani</b>
    </div>

    <!-- CARD -->
    <div style="
        background:white; 
        padding:20px; 
        border-radius:15px; 
        box-shadow:0 8px 20px rgba(0,0,0,0.2); 
        text-align:center;
        width:240px;
        transition:0.3s;
    "
    onmouseover="this.style.transform='translateY(-10px)'" 
    onmouseout="this.style.transform='translateY(0)'">

        <img src="images/whitesaucepasta.webp" width="200" height="140" 
        style="border-radius:12px;"><br><br>

        <b style="font-size:18px;">White Sauce Pasta</b>
    </div>

</div>

</div>

<!-- FOOTER (STICKY) -->
<div style="
    background:#111; 
    color:white; 
    text-align:center; 
    padding:15px;
    font-size:14px;
">
    © 2026 Foodie Delight | Designed with ❤️
</div>

</body>
</html>