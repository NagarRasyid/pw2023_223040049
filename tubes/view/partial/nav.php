<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark p-3" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand <?= uriIs(BASE_URL); ?>" href="<?= BASE_URL; ?>">Ciumbuleuit</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ms-auto mb-2 mb-md-0 ">
          <li class="nav-item">
            <a class="nav-link active <?= uriIs(BASE_URL); ?>"  aria-current="page" href="<?= BASE_URL; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active <?= uriIS(BASE_URL . '/pages.php'); ?>" aria-current="page" href="pages.php">Pages</a>
          </li>
            <!-- search bar -->
          
              <form class="d-flex" role="search">
              <div class="input-group">
                <input class="form-control search-field" type="search" value="" role="combobox" aria-expanded="false" aria-owns="predictive-search-results-list" aria-controls="predictive-search-results-list" aria-haspopup="listbox" aria-autocomplete="list" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" placeholder="Search" aria-label="Search" name="q">
                <div class="input-group-btn">
                <button type="button" class="btn btn-outline-success">
                  <i class="bi bi-search"></i>
                </button>
                </div>
              </div>
              </form>
            
          <!-- sign in -->
          <li class="nav-item">
            <button type="button" class="btn btn-secondary ms-5 nav-link active <?= uriIS(BASE_URL . '/login.php'); ?>" aria-current="page" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><a href="login.php" style="color: #ffffff; text-decoration: none;"> Masuk </a>
            </button> 
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-primary ms-1 nav-link active <?= uriIS(BASE_URL . '/registrasi.php'); ?>" aria-current="page" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><a href="registrasi.php" style="color: #ffffff; text-decoration: none;"> Daftar </a>
            </button> 
          </li>
        </ul>
      </div>
    </div>
  </nav>