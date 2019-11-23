<!--footer starts here-->


    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018-<?=date('Y')?></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
