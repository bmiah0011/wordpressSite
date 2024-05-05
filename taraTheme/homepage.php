
<?php
/*
 * Template Name: home page
 */

get_header(); 
?>

<style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
</style>

<div class="image-banner-home">
    <div class="image-banner">
        <img src="https://shoptara.co.uk/wp-content/uploads/2024/05/sustainOff.png" alt="25% Off">
    </div>
    <div class="image-banner">
        <img src="https://shoptara.co.uk/wp-content/uploads/2024/05/25off.png" alt="25% Off">
    </div>
    <div class="image-banner">
        <img src="https://shoptara.co.uk/wp-content/uploads/2024/05/logosBanner.png" alt="25% Off">
    </div>
</div>

<script>
let slideIndex = 0;
showSlides();
function showSlides() {
    let i;
    let slides = document.getElementsByClassName("image-banner");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    slides[slideIndex-1].style.animationName = "slideAnimation";
    setTimeout(showSlides, 4000); 
}
</script>


<div class="home-video">
    <video autoplay loop muted>
        <source src="https://shoptara.co.uk/wp-content/uploads/2024/05/ran44.mov" type="video/mp4">
        Your browser does not support the video tag.
    </video>
</div>


<div class="home-title">
<h1>Welcome to, <h1 class="greenT">Green Tara.</h1></h1>
<h2>Bringing Together Brands & Clothing, Commited to Sustainability.</h2>
</div>




<div class="view-all-btn">
    <li>
        <a href="search-clothing-page/">View All Products</a>
    </li>
</div>



<?php
get_footer();
?>
