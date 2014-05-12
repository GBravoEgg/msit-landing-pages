<?php include $_SERVER['DOCUMENT_ROOT'].'/views/header.php'; ?>

	<section id="main" class="main">
		<div class="wrapper cf">
  		
  		<form action="">

        <div class="form-item">
          <div class="icon-circle-1"></div>
  				<p class="form-question">When was the last time you visited a Hard Rock Cafe?</p>
  				<div class="form-answers">
    				<div class="form-radio">
              <input type="radio" name="question_1" id="past-month" value="Past Month">
    				  <label for="past-month">Within the past month</label>
    				</div>
    				<div class="form-radio">
              <input type="radio" name="question_1" id="three-months" value="Three Months">
    				  <label for="three-months">Within the past 3 months</label>
    				</div>
    				<div class="form-radio">
              <input type="radio" name="question_1" id="past-year" value="Past Year">
    				  <label for="past-year">Within the past year</label>
    				</div>
    				<div class="form-radio">
              <input type="radio" name="question_1" id="never" value="Never">
    				  <label for="never">Never</label>
    				</div>
  				</div>
        </div>

        <div class="form-item">
          <div class="icon-circle-2"></div>
  				<p class="form-question">Have you recently recommended Hard Rock Cafe to a friend or family member? </p>
  				<div class="form-answers form-two-options">
    				<div class="form-radio">
              <input type="radio" name="question_2" id="q2-yes" value="Yes">
    				  <label for="q2-yes">Yes</label>
    				</div>
    				<div class="form-radio">
              <input type="radio" name="question_2" id="q2-no" value="No">
    				  <label for="q2-no">No</label>
    				</div>
  				</div>
        </div>

        <div class="form-item">
          <div class="icon-circle-3"></div>
  				<p class="form-question">Did you share anything about your last experience at a Hard Rock Cafe with a friend, family member or online (e.g. Facebook)?</p>
  				<div class="form-answers form-two-options">
    				<div class="form-radio">
              <input type="radio" name="question_3" id="q3-yes" value="Yes">
    				  <label for="q3-yes">Yes</label>
    				</div>
    				<div class="form-radio">
              <input type="radio" name="question_3" id="q3-no" value="No">
    				  <label for="q3-no">No</label>
    				</div>
  				</div>
        </div>
				
				<input type="hidden" name="page_id" value="1">
  			  			
  			<button class="btn">Send</button>
  		
  		</form>

		</div>
	</section>

<?php include 'views/footer.php'; ?>