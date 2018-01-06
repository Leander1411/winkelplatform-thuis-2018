<!DOCTYPE html>
<html lang="en">
<head>
  <title>navbar</title>
    {{--  <link rel="stylesheet" type="text/css" href="header.css">  --}}
    {{ HTML::style('css/header.css') }}
    {{--  <script src="header.js"></script>  --}}
    {{ HTML::script('js/header.js') }}
    <?php //include('livesearch.php') //php file voor auto-aanvulling voor search bar. Werkt nog niet. ?>
</head>
<main>

<div class="menu">
  <div class="menu_buttons">
    <button class="tablink" onclick="openPage('Home', this, 'red')">Home</button>
    <button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">News</button>
    <button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>
  </div>
  <div class="menu_search">
    <form class="tablink">
      <input type="text" onkeyup="showResult(this.value)">
      <div id="livesearch"></div>
    </form>
  </div>
  <div class="menu_login">
    {{--  <a href='{{ route('login') }}'><button class="tablink">inloggen</button></a><br>  --}}
    @guest
      <a href='{{ route('login') }}'>
        <button class="tablink">inloggen</button>
      </a>
    @else
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <button class="tablink">Uitloggen</button>
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
    @endguest
  </div>
</div>


<div id="Home" class="tabcontent">
   <div class="row">
        <div class="column">
          <h3>Category 1</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 2</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 3</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
</div>

<div id="News" class="tabcontent">
  <div class="row">
        <div class="column">
          <h3>Category 1</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 2</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 3</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
</div>

<div id="Contact" class="tabcontent">
   <div class="row">
        <div class="column">
          <h3>Category 1</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 2</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 3</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
</div>

<div id="About" class="tabcontent">
   <div class="row">
        <div class="column">
          <h3>Category 1</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 2</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
        <div class="column">
          <h3>Category 3</h3>
          <a href="#">Link 1</a>
          <a href="#">Link 2</a>
          <a href="#">Link 3</a>
        </div>
      </div>
</div>
</main>
</html>
