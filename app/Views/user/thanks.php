<?= $this->extend('frontend/layout/default') ?>



<?= $this->section('head') ?>

<?= $this->endSection() ?>

 

<?= $this->section('content') ?>
<!-- ====== Banner Start ====== -->

  <section class="ud-page-banner">

      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="ud-banner-content">

              <h1><?= ucfirst(session()->get('first_name')) ?> Thanks</h1>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!-- ====== Banner End ====== -->

    <div class="container mt-5 mb-5">
    	<div class="row"  >
    		<h5 class="text-center"> Thank you for your response. We will get back to you shortly.</h5>
    	</div>
    </div>

    <?= $this->endSection() ?>



<?= $this->section('javascript') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
// Function to redirect after 5 seconds
function redirectAfterDelay() {
    // Get the current URL
    var currentURL = window.location.href;
      var urlValue = getParameterValue('url');
    // Set a timeout to redirect after 5 seconds
    setTimeout(function() {
        // Redirect to the current URL
         if(urlValue){
        window.location.href = urlValue;
	    }else{
	    	 window.location.href = currentURL;
	    }
    }, 5000); // 5000 milliseconds = 5 seconds
}

// Function to get parameter value from the current URL
function getParameterValue(parameterName) {
    // Get the search portion of the URL
    var queryString = window.location.search;

    // Create a URLSearchParams object from the query string
    var searchParams = new URLSearchParams(queryString);

    // Get the value of the specified parameter
    var paramValue = searchParams.get(parameterName);

    return paramValue;
}

// Example usage:
var paramValue = getParameterValue('url');
console.log(paramValue); // Output the value of the parameter
// Call the function to initiate the redirect
redirectAfterDelay();
</script>


 <?= $this->endSection() ?>