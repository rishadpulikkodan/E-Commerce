<footer class="page-footer font-small stylish-color-dark pt-4 bg-dark text-light">
  <div class="container text-center text-md-left">
    <div class="row" style="display:block;">
      <?php $user = $this->session->userdata('user');
      if($user && $user['privilege'] == array_keys(return_privilage())[1]){ ?>
        <p align="center" style="width:100%;">
          <a href="<?=base_url()?>login/logout">logout</a>&nbsp;<?=$user['username']?>
        </p>
        
        <hr>
      <?php } ?>
    </div>
  </div>
  <hr>
  <div class="footer-copyright text-center py-3">&copy; <?php echo date("Y"); ?> Copyright:
    <a href="<?=base_url()?>"> ecommerce</a>
  </div>
</footer>
<script type="text/javascript">
  function progresson(){
    document.getElementById('rainbow-progress-bar').style.display = 'block';
  }
  function offprogress(){
    document.getElementById('rainbow-progress-bar').style.display = 'none';
  }
</script>
<script src="<?= base_url()?>res/js/srcblock.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>