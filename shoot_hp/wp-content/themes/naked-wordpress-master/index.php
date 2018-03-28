<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine
 * doesn't know which template to use (e.g. 404 error)
 */

get_header(); // This fxn gets the header.php file and renders it ?>
	<div class='top-contents'>
		<div class='slogan'>
			<h2>Explore your world.</h2>
		</div>
	</div>
	<div class='catch-copy'>
		<h3>探求、探検、発見しよう</h3>
		<p class='copy_paragraph1'>SHOOTは高校生、大学生が</br>
			「中学生に、今伝えたいこと」をテーマに創り上げたサマースクールです。</br>
		</p>
		<p class='copy_paragraph2' >
			学校も年齢も違う仲間と、将来の夢・進路のこと・勉強のこと、</br>
			いつもと違う視点でちょっぴり真剣に考える４日間を提供します。</br>
		</p>
	</div>

	<!-- <div class="contents-menu">
		<h3>SUMMER SCHOOL</h3>
		<div class='container'>
			<div class="row">
			  <div class="col-sm-2">
			    </div>
			  </div>
			  <div class="col-sm-2">
			    </div>
			  </div>
			</div>
		</div>
	</div> -->


	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="span8 offset2">

			<?php if ( have_posts() ) :
			// Do we have any posts in the databse that match our query?
			// In the case of the home page, this will call for the most recent posts
			?>
				<article class="post">
					<h1 class='title'>News</h1>
					<div class="post-list list-group">
						<?php while ( have_posts() ) : the_post();
						// If we have some posts to show, start a loop that will display each one the same way
						?>
								<a href="<?php the_permalink(); // Get the link to this post ?>" title="<?php the_title(); ?>">
								<div class="list-group-item">
									<?php the_time('Y/m/d'); // Display the time published ?>
									<div class='post-title'><?php the_title(); // Show the title of the posts as a link ?></div>
								</div>
							</a>
						<?php endwhile; // OK, let's stop the posts loop once we've exhausted our query/number of posts ?>
					</div>
				</article>
			<?php else : // Well, if there are no posts to display and loop through, let's apologize to the reader (also your 404 error) ?>

				<article class="post error">
					<h1 class="404">まだ投稿がありません。</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
