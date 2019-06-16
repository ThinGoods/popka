<div class="footer_placeholder"></div>
<div class="container_footer">
  <div class="contacts">
    <!-- Контакти -->
    <div class="list_of_contacts">
       <div><i data-type="map" class="fa fa-map-marker" aria-hidden="true"></i>улица Ивана Корсакова 56, Суми, Сумська область</div>
       <div><i data-type="phone_1" class="fa fa-phone" aria-hidden="true"></i>+380123456789</div>
       <div><i data-type="phone_2" class="fa fa-phone" aria-hidden="true"></i>+380123456789</div>
       <div><i data-type="email" class="fa fa-envelope" aria-hidden="true"></i>mail@mail.com</div>
    </div>
    <div class="icons_of_contacts">
      <a class="footer_a" data-type="telegram">
        <i class="fa fa-telegram" aria-hidden="true"></i>
      </a>
      <a class="footer_a" data-type="facebook">
        <i class="fa fa-facebook-official" aria-hidden="true"> </i>
      </a>
      <a class="footer_a" data-type="youtube">
        <i class="fa fa-youtube" aria-hidden="true"> </i>
      </a>
      <a class="footer_a" data-type="instagram">
        <i class="fa fa-instagram" aria-hidden="true"> </i>
      </a>
      <a class="footer_a" data-type="admin" href="login.php">
        <i class="fa fa-lock" aria-hidden="true"> </i>
      </a>
      <a class="footer_a" data-type="twitter">
        <i class="fa fa-twitter" aria-hidden="true"> </i>
      </a>
    </div>
  </div>
</div>
<div class="go_to_up" id="go_to_up">
  <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
</div>
<style type="text/css">
  .footer_placeholder {
    height: 100px;
    background-color: white;
  }
  .container_footer {
    bottom: 0;
    position: fixed;
    background-color: #0e5861;
    width: 100%;
    height: 100px;
    margin: 0 auto;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    color: white;
    font-weight: bolder;
    font-size: 13pt;
    box-shadow: 0px 0px 3px black;
    z-index: 1;
  }
  .contacts {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 70%;
    font
  }
  .list_of_contacts {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-direction: row;
    width: 80%;
  }
  .list_of_contacts > div > i[data-type="phone_1"]{
    color: lightgreen;
  }

  .list_of_contacts > div > i[data-type="map"]{
    color: #f80000;
  }

  .list_of_contacts > div > i[data-type="phone_2"]{
    color: #1d9dec;
  }

  .list_of_contacts > div > i[data-type="email"]{
    color: yellow;
  }
  .list_of_contacts > div > i {
    margin: 10px;
    font-size: 18pt;
  }
  .icons_of_contacts {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-direction: row;
    width: 50%;
  }
  .icons_of_contacts > a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 43px;
    height: 42px;
    margin: 10px;
    font-size: 25pt;
    border-radius: 50%;
    background-color: white;
  }
  .icons_of_contacts > a[data-type="telegram"] {
    color: #1d92c3;
  }

  .icons_of_contacts > a[data-type="facebook"] {
    color: #39569a
  }

  .icons_of_contacts > a[data-type="instagram"] {
    color: #e8492e;
  }
  .icons_of_contacts > a[data-type="youtube"] {
    color: #f80000;
  }
  .icons_of_contacts > a[data-type="admin"] {
    color: #356492;
  }
  .icons_of_contacts > a[data-type="twitter"] {
    color: #1d9dec;
  }
  .go_to_up {
    position: fixed;
    bottom: 0;
    right: 0;
    font-size: 40pt;
    margin: 15px;
    color: white;
    cursor: pointer;
    z-index: 2;
 }
 .go_to_up:hover {
   color: lightgrey;
 }
 .footer_a {
  text-decoration: none;
  color: black;
 }
</style>

<script type="text/javascript">
  document.getElementById('go_to_up').addEventListener('click', function(){
  document.body.scrollTop = document.documentElement.scrollTop = 0;
  });   
</script>