<div class="page-header">
    <h1>Création d'un compte serveur</h1>
</div>

<form id="form" action="<?php echo url_for('sfGuardAuth/register') ?>" method="POST">
  <table class="table table-striped">
    <?php echo $form ?>
    <tr>
      <td colspan="2">
          <a class="btn btn-success" href="#" onclick="document.getElementById('form').submit()">
              <i class="icon-ok icon-white"></i>
              Créer !
          </a>
          <input type="submit" style="visibility: hidden" />
      </td>
    </tr>
  </table>
</form>