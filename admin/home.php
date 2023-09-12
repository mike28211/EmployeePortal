<h1>Welcome to <?php echo $_settings->info('name') ?></h1>
<hr class="bg-light">
<?php if($_settings->userdata('type') != 3): ?>

<style>
body {
  background-image: url('../uploads/inoac.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
<body>
 
<div class="container">
</body>
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../uploads/tcc top view.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../uploads/tcc-005.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../uploads/1629682500_avatar.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 <img src="../uploads/inoac.png" class="center" style="position: relative;
  text-align: center;
  color: white;
  opacity: 20%;">
 </div>
<?php endif; ?>
