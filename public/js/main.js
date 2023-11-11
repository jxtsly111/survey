document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('multistepsform');
    var loader = document.getElementById('loader');
  
    //  I added an  event listener to the form submit event
    form.addEventListener('submit', function() {
      //this wil  Show the loader when the form is submitted
      loader.style.display = 'block';
    });
  
    // this will  stop the loader  attribute and hide the loader
    var stopLoader = loader.getAttribute('data-stop-loader');
    if (stopLoader === 'true') {
      loader.style.display = 'none';
    }
  });