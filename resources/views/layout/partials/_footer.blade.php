<!-- Bootstrap core JavaScript -->
<script scr="{{asset('js/jquery.min.js')}}"></script>

<!-- Menu Toggle Script -->
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>
