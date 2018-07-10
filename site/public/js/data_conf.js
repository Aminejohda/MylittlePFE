$(function() {
  $('a[data-confirm]').click(function(ev) {
    var href = $(this).attr('href');
    
    if (!$('#dataConfirmModal').length) {
      $('body').append('<div id="dataConfirmModal" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header modal-header-danger"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Merci de confirmer</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Fermer</button><a class="btn btn-danger" id="dataConfirmOK">Supprimer</a></div></div></div></div>');
    }
    $('#dataConfirmModal').find('.modal-body').text($(this).attr('data-confirm'));
    $('#dataConfirmOK').attr('href', href);
    $('#dataConfirmModal').modal({show:true});
    
    return false;
  });
});

$(function() {
  $('a[data-confirme]').click(function(ev) {
    var href = $(this).attr('href');
    
    if (!$('#dataConfirmModale').length) {
      $('body').append('<div id="dataConfirmModale" class="modal" role="dialog" aria-labelledby="dataConfirmLabel" aria-hidden="true"><div class="modal-dialog"><div class="modal-content"><div class="modal-header modal-header-danger"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="dataConfirmLabel">Merci de confirmer</h3></div><div class="modal-body"></div><div class="modal-footer"><button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Fermer</button><a class="btn btn-info" id="dataConfirmeOK">Devenir Un Prestataire</a></div></div></div></div>');
    }
    $('#dataConfirmModale').find('.modal-body').text($(this).attr('data-confirme'));
    $('#dataConfirmeOK').attr('href', href);
    $('#dataConfirmModale').modal({show:true});
    
    return false;
  });
});
