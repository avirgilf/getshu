<!-- NAVBAR-->
<nav class="navbar navbar-expand-sm">
  <div class="container" style="width:100%; 
                                margin-left: auto; margin-right: auto; display: inline;" >
        
    <a href="{{ route('dashboard') }}" style="">
        <img style="width:100px ; display: inline;" src="../public/storage/shuga_logo.png"/>
    </a>
    <span class="float-right" style="margin-top:3%">
    <a href="conversations"><i class="fas fa-heart" style="color:white;font-size:25px; margin-rigth:3px "></i></a>
    <i class="fas fa-folder-open" style="color:white;font-size:25px; margin-rigth:3px; "></i>
    <a href="{{ route('profile.show') }}"><i class="fas fa-cog" style="color:white;font-size:25px; margin:auto;"></i></a>  
    </span>
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
                <a class="badge badge-secondary"href="fpack">Add pack</a>
            </div>
<?php   else: ?>
            
<?php   endif; ?>

