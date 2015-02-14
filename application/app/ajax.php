<?php

//define('WP_USE_THEMES', false);
require __DIR__.'/../../wp-load.php';
$subject=sanitize_text_field($_POST['subject']);
$chapter=sanitize_text_field($_POST['chapter']);
$topic=sanitize_text_field($_POST['topic']);
$category=sanitize_text_field($_POST['category']);
$test=sanitize_text_field($_POST['test']);

// for query lecture custom post
if($category == 'lecture'){
$args = array(
	'post_type' => $category,
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'subject',
			'field'    => 'slug',
			'terms'    => array($subject),
		),
		array(
			'taxonomy' => 'Chapter',
			'field'    => 'slug',
			'terms'    => array($chapter),
		),
		array(
			'taxonomy' => 'Topic',
			'field'    => 'slug',
			'terms'    => array($topic),
		),
	),
	);
	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {
		while ( $query->have_posts() ) {
			$query->the_post();

			echo '<h4>'.get_the_title(). '</h4><br />'.get_the_content();
			
		}
	} else {
		echo 'No Result Found.';
	}

}

// For query question custom post other than skill test
if($category == 'question' AND $topic != 'দক্ষতার-পরীক্ষা'){

	if(isset($_POST['page'])){
			$page = sanitize_text_field($_POST['page']);
			if($page == 'app'){
				$paged = 1;
			}else{
				$paged = $page;
			}
			}else{
				$paged = 1;
			}

			$args = array(
			'post_type' => $category,
			'orderby' => 'date',
			'order' => 'ASC',
			'posts_per_page' => 1,
			'paged' => $paged,
			'tax_query' => array(
				'relation' => 'AND',
				array(
					'taxonomy' => 'subject-of-question',
					'field'    => 'slug',
					'terms'    => array($subject),
				),
				array(
					'taxonomy' => 'chapter-of-question',
					'field'    => 'slug',
					'terms'    => array($chapter),
				),
				array(
					'taxonomy' => 'topic-of-question',
					'field'    => 'slug',
					'terms'    => array($topic),
				),
			),
			);

			$query = new WP_Query( $args );
			if ( $query->have_posts() ) {
				while ($query->have_posts()) : $query->the_post(); ?>
					<div class="question">
						<h5> <?php echo the_title() ?></h5>
						<div class="row">
							<div class="col-md-6">
								<p>
									<?php echo 'ক ) &nbsp;' .get_post_meta( get_the_ID(), 'question_option_a', true); ?>
								</p>
							</div>
							<div class="col-md-6">
								<p>
									<?php echo 'খ ) &nbsp;' .get_post_meta( get_the_ID(), 'question_option_b', true); ?>
								</p>
							</div>

						</div>
						<div class="row">
							<div class="col-md-6">
								<p>
									<?php echo 'গ ) &nbsp;' .get_post_meta( get_the_ID(), 'question_option_c', true); ?>
								</p>
							</div>
							<div class="col-md-6">
								<p>
									<?php echo 'ঘ ) &nbsp;' .get_post_meta( get_the_ID(), 'question_option_d', true); ?>
								</p>
							</div>

						</div>

						<div class="row">
							<div class="col-md-12">
								<div id="question_answer" class="button-shortcodes text-size-1 text-padding-1 version-1">উত্তরটা জেনে নাও<span>&#xf0a4;</span></div>
								<div id="answer">
										<?php echo get_post_meta( get_the_ID(), 'question_answer', true); ?>
								</div>
							</div>

						</div>

					</div>

					<?php
				endwhile;
				wp_reset_query();
				?>

			<div id="pagination">
				<input type="hidden" name ="subject" id ="subject" value=<?php echo $subject; ?> />
				<input type="hidden" name ="chapter" id ="chapter" value=<?php echo $chapter; ?> />
				<input type="hidden" name ="topic" id ="topic" value=<?php echo $topic; ?> />
		    	<?php previous_posts_link('<span>&laquo;</span> পূর্ববর্তী প্রশ্নগুলো') ?>
		    	<?php next_posts_link('পরবর্তী প্রশ্নগুলো <span>&raquo;</span>', $query->max_num_pages) ?>
		    </div>

			<?php
			} else {
				echo 'No Result Found.';
			}

}


// query skill test questions summary and diplay instruction page
if($category == 'question' AND $topic == 'দক্ষতার-পরীক্ষা' AND !isset($_POST['test']) AND !isset($_POST['answer_paper'])){

	$args = array(
			'post_type' => $category,
			'orderby' => 'date',
			'order' => 'ASC',
			'tax_query' => array(
				'relation' => 'AND',
				array(
					'taxonomy' => 'subject-of-question',
					'field'    => 'slug',
					'terms'    => array($subject),
				),
				array(
					'taxonomy' => 'chapter-of-question',
					'field'    => 'slug',
					'terms'    => array($chapter),
				),
				array(
					'taxonomy' => 'topic-of-question',
					'field'    => 'slug',
					'terms'    => array($topic),
				),
			),
			);

			$query = new WP_Query( $args );


			if ( $query->have_posts() ) {?>
				<div class="test-info">
					<p>প্রশ্নের সংখ্যা : <span class="time"><?php echo $query->found_posts ?> 
					&nbsp; &nbsp; &nbsp;  </span>পূর্ণমান : <span><?php echo $query->found_posts ?>&nbsp; &nbsp; &nbsp; </span>সময় : <span><?php echo $query->found_posts ?> মিনিট</p>
					<h4>নির্দেশিকা</h4>
				</div>
				<ul>
					<li>দক্ষতার পরীক্ষায় অংশগ্রহনের পুর্বে পাঠ্যপুস্তক থেকে গুরুত্বপূর্ণ বিষয়গুলো ভালোভাবে পড়ে নিতে হবে।</li>
					<li>আমাদের "জেনে রাখা ভাল" অংশটা পড়ে ফেলতে হবে।</li>
					<li>এই পরীক্ষায় অংশগ্রহনের পুর্বে "সম্ভাব্য প্রশ্ন ও উত্তর" অংশটা ভালোভাবে চর্চা করতে হবে। একই সাথে পাঠ্যপুস্তক থেকে সেই সম্পর্কিত বিষয়গুলো পড়লে দক্ষতা আরো বাড়বে।</li>
					<li>এই পরীক্ষায় প্রশ্নের সংখ্যা, পূর্ণমান এবং সময় উপরে বর্ণিত হল।</li>
					<li>পরীক্ষা শুরু করার জন্য নিচের বোতাম চাপলে প্রশ্নপ্রত্র পাওয়া যাবে এবং সময় গণনা শুরু হবে।</li>
					<li>পরীক্ষা উপরে নির্ধারিত সময়ের মধ্য শেষ করতে হবে।</li>
				</ul>

				<a id="load-test" class="button-shortcodes text-size-1 text-padding-1 version-1" href="<?php echo $subject.'/'.$chapter.'/'.$topic.'/'.$category.'/test'  ?>">তোমার পরীক্ষা শুরু করো !!!</a>
			<?php
				}else{
					echo 'No Result Found.';
				}

}

// query skill test questions and display question on page
if($category == 'question' AND $topic == 'দক্ষতার-পরীক্ষা' AND isset($_POST['test'])){
	$args = array(
	'post_type' => $category,
	'orderby' => 'date',
	'order' => 'ASC',
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'subject-of-question',
			'field'    => 'slug',
			'terms'    => array($subject),
		),
		array(
			'taxonomy' => 'chapter-of-question',
			'field'    => 'slug',
			'terms'    => array($chapter),
		),
		array(
			'taxonomy' => 'topic-of-question',
			'field'    => 'slug',
			'terms'    => array($topic),
		),
	),
	);

	$query = new WP_Query( $args );
	if ( $query->have_posts() ) {

		$count = 1;
		while ($query->have_posts()) : $query->the_post(); ?>
			<div class="question">
				<h5> <?php echo the_title() ?></h5>
				<div class="row">
					<div class="col-md-6">
						<p>
							<input type="radio" name="<?php echo $count; ?>" id="<?php echo 'a'.get_the_ID(); ?>" value="<?php echo get_post_meta( get_the_ID(), 'question_option_a', true); ?>" />
							<label for="<?php echo 'a'.get_the_ID(); ?>"><span></span><?php echo get_post_meta( get_the_ID(), 'question_option_a', true); ?></label>

						</p>
					</div>
					<div class="col-md-6">
						<p>
							<input type="radio" name="<?php echo $count; ?>" id="<?php echo 'b'.get_the_ID(); ?>" value="<?php echo get_post_meta( get_the_ID(), 'question_option_b', true); ?>" />
							<label for="<?php echo 'b'.get_the_ID();?>"><span></span><?php echo get_post_meta( get_the_ID(), 'question_option_b', true); ?></label>
						</p>
					</div>

				</div>
				<div class="row">
					<div class="col-md-6">
						<p>
							<input type="radio" name="<?php echo $count; ?>" id="<?php echo 'c'.get_the_ID(); ?>" value="<?php echo get_post_meta( get_the_ID(), 'question_option_c', true); ?>" />
							<label for="<?php echo 'c'.get_the_ID(); ?>"><span></span><?php echo get_post_meta( get_the_ID(), 'question_option_c', true); ?></label>
						</p>
					</div>
					<div class="col-md-6">
						<p>
							<input type="radio" name="<?php echo $count; ?>" id="<?php echo 'd'.get_the_ID(); ?>" value="<?php echo get_post_meta( get_the_ID(), 'question_option_d', true); ?>" />
							<label for="<?php echo 'd'.get_the_ID(); ?>"><span></span><?php echo get_post_meta( get_the_ID(), 'question_option_d', true); ?></label>
						</p>
					</div>

				</div>

			</div>
			<div id="countdowntimer"><span id="hms_timer"></span></div>

			<?php
			$count++;
		endwhile;
		wp_reset_query();
		?>
		<div class="row">
			<div class="col-md-12">
				<input type="hidden" name="count" id="count" value="<?php echo $count-1; ?>" />
				<input type="hidden" name ="subject" id ="subject" value=<?php echo $subject; ?> />
				<input type="hidden" name ="chapter" id ="chapter" value=<?php echo $chapter; ?> />
				<input type="hidden" name ="topic" id ="topic" value=<?php echo $topic; ?> />
				<div id="skill-test" class="button-shortcodes text-size-1 text-padding-1 version-1">ফলাফলটা জেনে নাও<span> &nbsp; &#xf0a4;</span></div>
			</div>

		</div>
	<?php

}else{
	echo 'No Result Found.';
}

}


// display result summary of skill test.
if(isset($_POST['answer_paper'])){

	$answer_paper = $_POST['answer_paper'];
	
	$args = array(
	'post_type' => $category,
	'orderby' => 'date',
	'order' => 'ASC',
	'tax_query' => array(
		'relation' => 'AND',
		array(
			'taxonomy' => 'subject-of-question',
			'field'    => 'slug',
			'terms'    => array($subject),
		),
		array(
			'taxonomy' => 'chapter-of-question',
			'field'    => 'slug',
			'terms'    => array($chapter),
		),
		array(
			'taxonomy' => 'topic-of-question',
			'field'    => 'slug',
			'terms'    => array($topic),
		),
	),
	);

	$query = new WP_Query( $args );

	$total_questions = $query->found_posts;
	$answered = 0;
	$unanswered = 0;
	$correct_answer = 0;
	$wrong_answer = 0;

	if ( $query->have_posts() ) {
		while ($query->have_posts()) : $query->the_post(); 

			$your_answer = $answer_paper[get_the_ID()];
			$right_answer = get_post_meta( get_the_ID(), 'question_answer', true);

			if($your_answer == 'unanswered'){
				$unanswered++;
			}else{
				$answered++;
				if($your_answer == $right_answer){
					$correct_answer++;
				}else{
					$wrong_answer++;
				}
			}

		endwhile;
		wp_reset_query();?>

		<div class="test-info">
			<h4>ফলাফলের সারসংক্ষেপ</h4>
			<p>
				মোট প্রশ্ন : <span><?php echo $total_questions; ?> টি
				&nbsp; &nbsp; &nbsp; </span>উত্তর দিয়েছ : <span><?php echo $answered; ?> টি
				&nbsp; &nbsp; &nbsp; </span>উত্তর দাওনি : <span><?php echo $unanswered; ?> টি
				&nbsp; &nbsp; &nbsp; </span>সঠিক উত্তর : <span><?php echo $correct_answer; ?> টি</span>
			</p>
			<h3>তোমার ফলাফল: <span><?php echo $correct_answer.'/'.$total_questions ?> </span></h3>
				<br />
				<br />
			<h4>বিস্তারিত ফলাফল</h4>
			<br />
		</div>

		<table class="table-bordered">
				<tr>
					<th>প্রশ্ন</th>
					<th>সঠিক উত্তর</th>
					<th>তোমার উত্তর</th>
				</tr>
	<?php

	while ($query->have_posts()) : $query->the_post(); 

			$your_answer = $answer_paper[get_the_ID()];
			$right_answer = get_post_meta( get_the_ID(), 'question_answer', true);?>
				<tr>
					<td><?php echo the_title() ?></td>
					<td><?php echo $right_answer; ?></td>
					<?php
					if($your_answer == 'unanswered'){
						echo '<td style="color:red;">কোন উত্তর পাওয়া যায় নি।</td>';
					}elseif($your_answer == $right_answer){
						echo '<td style="color:#2ECC71;">'.$your_answer.'</td>';
					}else{
						echo '<td style="color:red;">'.$your_answer.'</td>';
					}

					?>

				</tr>
			
		<?php

		endwhile;
		?>
		</table>
		<?php

}else{
	echo 'No Result Found.';
}
}
	
?>