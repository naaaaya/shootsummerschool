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
	<div class='main-wrapper'>
		<div class='catch-copy'>
			<h3><span class='with_indent'>探求、探検、</span><span>発見しよう。</span></h3>
			<p class='copy_paragraph'><span>SHOOTは</span><span>高校生、大学生が</span></br>
				<span>「中学生に、今伝えたいこと」</span><span>をテーマに創り上げた</span><span>サマースクールです。</span></br>
			</p>
			<p class='copy_paragraph' >
				<span>学校も年齢も違う仲間と、</span><span>将来の夢・進路のこと・勉強のこと、</span></br>
				<span>いつもと違う視点で</span><span>ちょっぴり真剣に考える</span><span>４日間を提供します。</span></br>
			</p>
		</div>
	</div>

	<div class='overview-wrapper'>
		<div class='overview'>
			<h2 class='overview_title'>開催概要</h2>
				<h4 class='heading'>開催期間</h4>
				<span>2018年8月9日(木)</span><span>～12日(日)</span>

			<h4 class='heading'>宿泊施設</h4>
				<span>東京さぬき倶楽部<span></br>
				<span>〒108-0073 </span><span>東京都港区三田一丁目 11-9</span>

			<h4 class='heading'>対象</h4>
				<span>中学生 32名</span>

			<h4 class='heading'>参加費</h4>
				<span>33,000円前後を予定しております。</span></br>
				<span>（宿泊費・食事代・ワークショップ体験料・</span>
				<span>旅行傷害保険料含む）</span>

			<h4 class='heading'>ご協賛企業</h4>
				<span>株式会社PIANO</span><span>（<a href='http://piano-corp.com/'>http://piano-corp.com/</a>）</span>

			<h4 class='heading'>協力団体</h4>
				<span>NPO法人 ちょっくらホームステイ</span> <span>（<a href='http://chokkura.org/'>http://chokkura.org/</a>）</span>
		</div>
	</div>

	<div id="primary" class="row-fluid">
		<div id="content" role="main" class="news_list">

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
					<h1 class='title'>News</h1>
					<h1 class="404">まだ投稿がありません。</h1>
				</article>

			<?php endif; // OK, I think that takes care of both scenarios (having posts or not having any posts) ?>
		</div><!-- #content .site-content -->
	</div><!-- #primary .content-area -->

	<div class='briefing'>
		<div class='briefing_description'>
			<h1><span>説明会参加者</span><span>募集中</span></h1>
			<a href='http://shootsummerschool.org/briefings/'>
				<button type="button" class="btn btn-success btn-lg briefing_link">参加する</button>
			</a>
		</div>
	</div>
<?php get_footer(); // This fxn gets the footer.php file and renders it ?>
