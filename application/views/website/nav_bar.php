
 <!-- navbar -->
    <div class="container-custom py-md-2" style="place-items: normal; width:100%;">
        <nav class="navbar navbar-custom navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?=base_url();?>">
                    <img src="<?=base_url('assets/images/search_me_logo.png');?>" alt="seacrh_it_logo" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item mt-3 mt-md-0 mr-md-5" id="nav_home">
                            <a class="nav-link" aria-current="page" href="<?=base_url();?>">Home</a>
                        </li>
                        <li class="nav-item mt-3 mt-md-0  mr-md-5">
                            <a class="nav-link" href="<?=base_url('main/search');?>">Search</a>
                        </li>
                        <li class="nav-item mt-3 mt-md-0  mr-md-5">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item mt-3 mt-md-0  mr-md-5">
                            <a class="nav-link" href="<?=base_url('main/user_profile');?>">Account</a>
                        </li>
                        <form class="d-flex mt-3 mt-md-0 ">
                            <a href="<?=base_url('signup');?>" class="btn-signup px-4 py-2 rounded text-decoration-none">Sign in</a>
                        </form>
                    </ul>
    
                </div>
            </div>
        </nav>
    </div>