require('./bootstrap');
$(function() {
    return $(".modal").on("show.bs.modal", function() {
      var curModal;
      curModal = this;
      $(".modal").each(function() {
        if (this !== curModal) {
          $(this).modal("hide");
        }
      });
    });
  });
