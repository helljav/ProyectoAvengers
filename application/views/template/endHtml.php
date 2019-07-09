<!-- page-wrapper -->
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script src="<?php base_url();?>js/script.js"></script>
<script type="text/javascript">

  $('.list-group.iz').on('click', 'a', function() {
      $('.list-group a.active').removeClass('active');
      $(this).addClass('active');
      var y = document.getElementsByClassName('active');
      var str = y[0].innerHTML;
      var fields = str.split(' - ');

      var id = fields[0];

      console.log(id);
      document.getElementById("caja_add").value = id;
      //document.getElementById("caja_rem").value = id;
  });

  $('.list-group.der').on('click', 'a', function() {
      $('.list-group a.active').removeClass('active');
      $(this).addClass('active');
      var y = document.getElementsByClassName('active');
      var str = y[0].innerHTML;
      var fields = str.split(' - ');

      var id = fields[0];

      console.log(id);
      //document.getElementById("caja_add").value = id;
      document.getElementById("caja_rem").value = id;
  });
</script>
</body>
</html>
