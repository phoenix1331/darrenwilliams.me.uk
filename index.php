<?php include('includes/header.php'); 

$page = '';

if(isset($_GET['page'])){
  $page = $_GET['page'];
}

if(empty($page)){
  $page = 'home';
}
   
switch($page){

  case 'home':
    include('boxes/home.php');
  break;

  case '404':
    include('boxes/404.php');
  break;

  case 'contact':
    include('boxes/contact.php');
  break;

  case 'news':
    include('boxes/news.php');
  break;

  case 'publications':
    include('boxes/publications.php');
  break;

  case 'news_archives':
    include('boxes/news_archives.php');
  break;

  case 'thank_you':
    include('boxes/thank_you.php');
  break;

  default:
    include('boxes/page.php');
  break;

} //end switch ?>

<?php include('includes/footer.php'); ?>