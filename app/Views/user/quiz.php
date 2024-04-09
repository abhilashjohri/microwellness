<?= $this->extend('frontend/layout/default') ?>



<?= $this->section('head') ?>

<style>

        .text-center {

            display: flex;

            justify-content: space-between;

        }

    </style>



 <?= $this->endSection() ?>

 

<?= $this->section('content') ?>

  <!-- ====== Banner Start ====== -->

  <section class="ud-page-banner">

      <div class="container">

        <div class="row">

          <div class="col-lg-12">

            <div class="ud-banner-content">

              <h1><?= ucfirst(session()->get('first_name')) ?> Quiz</h1>

            </div>

          </div>

        </div>

      </div>

    </section>

    <!-- ====== Banner End ====== -->

    <div class="container mt-5 mb-5">

  <form  id="quizform" method="post" action ="<?= site_url('/quiz/submitQuiz'); ?>">

  <div id="emoji_section">

  <!-- Emoji selection -->

  <div class="row"  >

  <h4 class="mb-4">How are you feeling today?</h4>
 
 <?php // echo '<pre>';print_r($emoji_data);  echo '</pre>';

   foreach ($emoji_data as $key => $emoji) { 
       // code...
       $emoji_quotes_arr = array(ucwords($emoji['emoji_quote1']),ucwords($emoji['emoji_quote2']),ucwords($emoji['emoji_quote3']),ucwords($emoji['emoji_quote4']),ucwords($emoji['emoji_quote5'])); 
       $emoji_quotes = json_encode($emoji_quotes_arr);


    ?>
     <div class=" col-lg-2 col-md-4 col-sm-4 mb-3">

      <button type="button" class="btn btn-outline-primary btn-emoji" data-id="<?php echo ($emoji['id'])?>"
      data-name="<?php echo ucfirst($emoji['name'])?>" data-emoji="<?php echo json_decode($emoji['emoji_code'])?>"><?php echo json_decode($emoji['emoji_code'])?></button>
         <span class="emoji-name"><?php echo ucwords(($emoji['name']));?></span>
         <textarea style="display: none" id="emoji_quote1<?php echo ($emoji['id'])?>"> <?php echo $emoji_quotes;?></textarea>
           <input type="hidden"  id="emoji_link<?php echo ($emoji['id'])?>" value="<?php echo $emoji['link'];?>"/>
         
       
    </div>
   <?php }
 ?>
    
  </div>



  <!-- Display selected emoji -->

  <div class="row mt-4">

    <div class="col-md-12 m-2">

      <h6>Your selected emoji:</h6>

      <p id="selected-emoji">Select an emoji above</p>

      <input type="hidden" value="" name="selected_emoji" id="selected_emoji"/>

    </div>
      <div class="col-md-12 m-2 ">

      <h6> Emoji Quotation:</h6>

      <p id="selected-emoji-quote"></p>

      <input type="hidden" value="" name="selected_emoji" id="selected_emoji"/>
        <input type="hidden" value="" name="selemoji_link" id="selemoji_link"/>
      <br>
 
    </div>

  </div>
    <p id="disclaimer" style="display: none;">Disclaimer :This content including advice provides generic information only. It is in no way a substitute for qualified medical opinion.</p>
    <div class="text-center m-4">
       

            <button class="btn btn-success" id="startbtn">Start Quiz</button>

             <button class="btn btn-success" id="skipbtn">Skip</button>

        </div>

  </div>





    <div id="quiz-container" style="display:none">

        <?php foreach ($quizs as $key => $question): ?>

            <div class="question mb-4" style="<?= $question['status'] == 'active' ? 'display: block;' : 'display: none;' ?>">

                <h5 class="mb-2"><?= $question['question'] ?></h5>

                <input type="hidden" name="question[<?= $key ?>]" value="<?php echo $question['question']?>" />

                <input type="hidden" name="question_id[<?= $key ?>]" value="<?php echo $question['id']?>" />

                <input type="hidden" name="correct_anser[<?= $key ?>]" value="<?php echo $question[$question['answer']]?>" />

                <div class="form-check">

                    <input class="form-check-input" type="radio" name="answer[<?= $key ?>]" value="<?= $question['option1'] ?>" required>

                    <label class="form-check-label"><?= $question['option1'] ?></label>

                </div>

                <div class="form-check">

                    <input class="form-check-input" type="radio" name="answer[<?= $key ?>]" value="<?= $question['option2'] ?>" required>

                    <label class="form-check-label"><?= $question['option2'] ?></label>

                </div>

                <div class="form-check">

                    <input class="form-check-input" type="radio" name="answer[<?= $key ?>]" value="<?= $question['option3'] ?>" required>

                    <label class="form-check-label"><?= $question['option3'] ?></label>

                </div>

                <div class="form-check">

                    <input class="form-check-input" type="radio" name="answer[<?= $key ?>]" value="<?= $question['option4'] ?>" required>

                    <label class="form-check-label"><?= $question['option4'] ?></label>

                </div>

            </div>

        <?php endforeach; ?>

        <div class="text-center">

            <button class="btn btn-primary" id="prevBtn" style="<?= $quizs[0]['status'] == 'active' ? 'display: none;' : 'display: block;' ?>">Previous</button>

            <button class="btn btn-primary" id="nextBtn" style="<?= $quizs[count($quizs) - 1]['status'] == 'active' ? 'display: none;' : 'display: block;' ?>">Next</button>

            <button class="btn btn-success" id="submitBtn" style="<?= $quizs[count($quizs) - 1]['status'] == 'active' ? 'display: block;' : 'display: none;' ?>">Submit</button>

        </div>

    </div>

  </form>

</div>



<?= $this->endSection() ?>



<?= $this->section('javascript') ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>

  // Script to handle emoji selection

  const emojiButtons = document.querySelectorAll('.btn-emoji');

  const selectedEmojiDisplay = document.getElementById('selected-emoji');
  const selectedQuoteDisplay = document.getElementById('selected-emoji-quote');



  emojiButtons.forEach(button => {

    button.addEventListener('click', function() {

      const selectedEmoji = this.dataset.emoji;
       const selectedEmoji_name = this.dataset.name;
          const selectedEmoji_id = this.dataset.id;

        const  emoji_link =document.getElementById('emoji_link'+selectedEmoji_id).value
       const   selected_quotes =    JSON.parse(document.getElementById('emoji_quote1'+selectedEmoji_id).value) ;
       // Select a random index
            var randomIndex = Math.floor(Math.random() * selected_quotes.length);

            // Get the random value
            var randomQuoteValue = selected_quotes[randomIndex];

            // Output the random value
            console.log("Random Value:", randomQuoteValue);
           //alert(selectedEmoji_name);
          //  alert(selectedEmoji_id);
         
      selectedEmojiDisplay.textContent = selectedEmoji+' ' +selectedEmoji_name;

        selectedQuoteDisplay.textContent = randomQuoteValue;
       $("#disclaimer").show();
      

      document.getElementById('selected_emoji').value =selectedEmoji;
        document.getElementById('selemoji_link').value =emoji_link;

      

     // $("#quiz-container").show(300);

     // $("#emoji_section").hide(500);

    });

  });



</script>



<script>

    document.addEventListener('DOMContentLoaded', function () {

           const startBtn = document.getElementById('startbtn');
            const skipbtn = document.getElementById('skipbtn');
           


        const questions = document.querySelectorAll('.question');

        const nextBtn = document.getElementById('nextBtn');

        const prevBtn = document.getElementById('prevBtn');

        const submitBtn = document.getElementById('submitBtn');

        let currentQuestion = 0;



   skipbtn.addEventListener('click', function () {

     const   selemoji_link =   document.getElementById("selemoji_link").value ;
                    if(selemoji_link){
              window.location.href = selemoji_link;
          }
         console.log('skipbtn'+selemoji_link);
        });

         startBtn.addEventListener('click', function () {

             $("#quiz-container").show(300);

           $("#emoji_section").hide(500);

        });

        function showQuestion(index) {

            questions.forEach((question, i) => {

                question.style.display = i === index ? 'block' : 'none';

            });



            prevBtn.style.display = index === 0 ? 'none' : 'block';

            nextBtn.style.display = index === questions.length - 1 ? 'none' : 'block';

            submitBtn.style.display = index === questions.length - 1 ? 'block' : 'none';

        }



        function validateOptions(index) {

            const options = document.querySelectorAll(`input[name="answer[${index}]"]:checked`);

            return options.length > 0;

        }



        nextBtn.addEventListener('click', function () {

            if (validateOptions(currentQuestion)) {

                currentQuestion++;

                showQuestion(currentQuestion);

            } else {

                alert('Please select an option before moving to the next question.');

            }

        });



        prevBtn.addEventListener('click', function () {

            currentQuestion--;

            showQuestion(currentQuestion);

        });



        submitBtn.addEventListener('click', function () {

            if (validateOptions(currentQuestion)) {

                // Add your logic to handle the submission

                // var formData = $("#quizform").serialize();

                // $.ajax({

                //     url: SITE_URL+'/quiz/submitQuiz', // Adjust the URL based on your routes

                //     method: 'POST',

                //     data:formData,

                //     success: function (response) {

                //         // Handle success response

                //     },

                //     error: function (error) {

                //         // Handle error

                //     }

                // });

              

              //  alert('Quiz submitted successfully!');

                return false; // Move the return false statement here

                window.location.href = "<?php echo site_url('blog'); ?>";

            } else {

                alert('Please select an option before submitting the quiz.');

                return false; // Add a return false statement here as well

            }

            return false; // Move the return false statement outside the if-else block

        });



        showQuestion(currentQuestion);

    });

</script>



   <?= $this->endSection() ?>