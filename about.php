<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
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

<!-- HERO SECTION WITH IMAGE -->
<div style="
    background: url('images/about_bg.jpg') center/cover no-repeat;
    color:white;
    padding:100px 20px;
    text-align:center;
    position:relative;
">

    <!-- OVERLAY -->
    <div style="
        position:absolute;
        top:0; left:0;
        width:100%; height:100%;
        background:rgba(0,0,0,0.6);
    "></div>

    <div style="position:relative; z-index:1;">
        <h1 style="font-size:40px; margin-bottom:10px;">About Foodie Delight 🍔</h1>

        <p style="max-width:700px; margin:auto; font-size:18px; line-height:1.6;">
            We provide delicious food with great ambience and quality service. 
            Our mission is to give customers the best dining experience with 
            fresh ingredients and a cozy environment.
        </p>
    </div>

</div>

<!-- MAIN CONTENT -->
<div style="flex:1;">

<!-- FEATURES SECTION -->
<div style="
    display:flex; 
    justify-content:center; 
    gap:30px; 
    padding:50px 20px; 
    flex-wrap:wrap;
">

    <!-- CARD -->
    <div style="
        background:white; 
        padding:25px; 
        border-radius:15px; 
        box-shadow:0 8px 20px rgba(0,0,0,0.2); 
        width:240px; 
        text-align:center;
        transition:0.3s;
    "
    onmouseover="this.style.transform='translateY(-10px)'" 
    onmouseout="this.style.transform='translateY(0)'">

        <h3 style="margin-bottom:10px;">🍽 Quality Food</h3>
        <p style="color:#555;">Fresh, hygienic and tasty meals made with care.</p>

    </div>

    <!-- CARD -->
    <div style="
        background:white; 
        padding:25px; 
        border-radius:15px; 
        box-shadow:0 8px 20px rgba(0,0,0,0.2); 
        width:240px; 
        text-align:center;
        transition:0.3s;
    "
    onmouseover="this.style.transform='translateY(-10px)'" 
    onmouseout="this.style.transform='translateY(0)'">

        <h3 style="margin-bottom:10px;">🏠 Great Ambience</h3>
        <p style="color:#555;">Enjoy a cozy and comfortable dining environment.</p>

    </div>

    <!-- CARD -->
    <div style="
        background:white; 
        padding:25px; 
        border-radius:15px; 
        box-shadow:0 8px 20px rgba(0,0,0,0.2); 
        width:240px; 
        text-align:center;
        transition:0.3s;
    "
    onmouseover="this.style.transform='translateY(-10px)'" 
    onmouseout="this.style.transform='translateY(0)'">

        <h3 style="margin-bottom:10px;">🚀 Fast Service</h3>
        <p style="color:#555;">Quick and friendly service for best experience.</p>

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