<?php
if (isset($_GET['lang'])) {
  $language = $_GET['lang'] == 'en' ? 'English' : 'Français';
} else {
  $language = 'Français';
}

include('logic.php');
$current_page = basename($_SERVER['PHP_SELF']);

interface iGenrateContent {
  public function GenerateContent();
}

class GenerateHeader implements iGenrateContent {
  private $websiteLanguage;
  private $currentPage;

  public function __construct($websiteLanguage = "Français", $currentPage) {
    $this->websiteLanguage = $websiteLanguage;
    $this->currentPage = $currentPage;
    $this->GenerateContent();
  }

  public function GenerateContent() {
    if ($this->websiteLanguage == "Français") {
      ?>
      <header>
          <nav class="navbar">
              <a href="#accueil" class="logo"><img src="Assets/notes.png" alt="mon logo"></a>
              <div class="nav-links" id="nav-links">
                  <ul>
                      <li><a id="accueil_nav" onclick="actif('accueil_nav')" href="home_eleve.php">Accueil</a></li>
                      <li><a id="notes_nav" onclick="actif('notes_nav')" href="notes.php">Notes</a></li>
                      <li><a id="emploie_nav" onclick="actif('emploie_nav')" href="emploie.php">Emploi du temps</a></li>
                      <?php if ($this->currentPage != 'home_prof.php') { ?>
                        <li><a id="travaux_nav" onclick="actif('travaux_nav')" href="travail.php">Travail à faire</a></li>
                      <?php } ?>
                      <li><a id="info_nav" onclick="actif('info_nav')" href="information.php">Info</a></li>
                      <li class="language-selector">
                          <a href="?lang=fr" class="language-button">Français</a>
                          <a href="?lang=en" class="language-button">English</a>
                      </li>
                  </ul>
              </div>
              <img id="menu_hamburger" src="Assets/humberger.png" alt="menu hamburger" onclick="toggleMenu()">
          </nav>
      </header>
      <?php
  } else if ($this->websiteLanguage == "English") {
      ?>
      <header>
          <nav class="navbar">
              <a href="#home" class="logo"><img src="Assets/notes.png" alt="my logo"></a>
              <div class="nav-links" id="nav-links">
                  <ul>
                      <li><a id="home_nav" onclick="actif('home_nav')" href="home_eleve.php">Home</a></li>
                      <li><a id="notes_nav" onclick="actif('notes_nav')" href="notes.php">Notes</a></li>
                      <li><a id="schedule_nav" onclick="actif('schedule_nav')" href="emploie.php">Schedule</a></li>
                      <?php if ($this->currentPage != 'home_prof.php') { ?>
                        <li><a id="homework_nav" onclick="actif('homework_nav')" href="travail.php">Homework</a></li>
                      <?php } ?>
                      <li><a id="info_nav" onclick="actif('info_nav')" href="information.php">Info</a></li>
                      <li class="language-selector">
                          <a href="?lang=fr" class="language-button">Français</a>
                          <a href="?lang=en" class="language-button">English</a>
                      </li>
                  </ul>
              </div>
              <img id="menu_hamburger" src="Assets/humberger.png" alt="menu hamburger" onclick="toggleMenu()">
          </nav>
      </header>

      <?php
    }
  }
}


new GenerateHeader($language, $current_page);


?>