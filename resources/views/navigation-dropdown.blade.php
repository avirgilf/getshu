<!-- NAVBAR-->
<nav class="navbar navbar-expand-sm">
  <div class="container" style=" margin-left: auto; margin-right: auto; display: block;" >
    <a href="{{ route('dashboard') }}">
        <img style="width:100px ; margin-left: auto; margin-right: auto;display: block;" 
             src="../storage/app/public/profile-photos/SHUGAI.png"/>
    </a>
    
<!-- Logo Image 
    <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>

    <div id="navbarSupportedContent" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="#" class="nav-link">Home <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
      </ul>
    </div>-->
  </div>
</nav>

<?php 
    $profil=Auth::user()->profil;
        if ($profil=='Admin'): ?>
            <div>
                <a class="badge badge-secondary" href="fcurrency">Add Currency</a>           
                <a class="badge badge-secondary"href="flanguage">Add Language</a>
                <a class="badge badge-secondary"href="fcountry">Add Country</a>
                <a class="badge badge-secondary"href="fcity">Add City</a>
            </div>
<?php   else: ?>
            message.
<?php   endif; ?>

