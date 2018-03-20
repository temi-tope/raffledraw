<div>     
  <ul id="slide-out" class="side-nav fixed sidenavcolor topsidenav">
    <li><a href="#!" class="white-text"><i class="material-icons white-text">cloud</i>First Link With Icon</a></li>
    <li><a href="#!" class="white-text">Second Link</a></li>
    <li><div class="divider white-text"></div></li>
    <li><a class="subheader white-text">Subheader</a></li>
    <li><a class="waves-effect white-text" href="#!">Third Link With Waves</a></li>
  </ul>
  
</div>


    <script type="text/javascript" src ="js/app.js"></script>
    <script type="text/javascript" src ="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="materialize/js/jquary.js"></script>

    <script>
    $(document).ready(function ()
    {
        $('select').material_select();
        $(".button-collapse").sideNav();
        $('.dropdown-button').dropdown();
        $('.modal').modal();
         $('#modal1').modal('open');
    });
    </script>

    </body>
</html>