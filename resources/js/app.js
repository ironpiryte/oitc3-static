import './bootstrap';

$(document).ready( () => {

  const yearEl = document.getElementById("current_year");
    if (yearEl) {
        yearEl.textContent = new Date().getFullYear();
    }

  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
});
