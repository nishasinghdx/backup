<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon"/>
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon"/>
<?php
/**

Template Name: Service Template

*/
wp_head();
?>

<link rel="stylesheet" id="blahlab-theme-slug-osum-framework.css-css" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/framework.css" type="text/css" media="all"/>
<link rel="stylesheet" id="blahlab-theme-slug-osum-style.css-css" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/style.css" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/master.css" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/styleSalesfoce.css" type="text/css" media="all"/>

<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-49137757-1', 'auto');

		ga('send', 'pageview');
</script>

<script src="//code.tidio.co/hzewymyesqq4eek5a4t1kmm4s2gjhuzc.js"></script>
</head>
<?php
		$PageData = get_post_meta( get_the_ID());
		$Attachments = $PageData;
		$pageName = explode(',',$Attachments['ServicePageName'][0]);
		$pageNameForPosts = '';
		$dataForm = '';
		if(!empty($pageName)){
			$pageNameForPosts = $pageName[0];
			$dataForm = $pageName[1];
		}
	 ?>
<body class="home page page-id-4 page-template page-template-builder page-template-builder-php has-site-logo">
	<a id='Home'></a>
<div class='contain-to-grid sticky-nav fullwidth'>
	<nav class='top-bar onepage' data-options='sticky_on: large' data-topbar=''>
		<ul class='title-area'>
			<li class='name'>

					<a href='#'>
																					<img src="<?php echo $Attachments['ServicePageLogo'][0]; ?>" alt="Logo">
												</a>

			</li>
			<li class='toggle-topbar menu-icon'>
				<a href='#'><i class="fa fa-bars" aria-hidden="true"></i></a>
			</li>
		</ul>
		<section class='top-bar-section closed'>
			<ul id="menu-main" class="right"><li id="menu-item-138" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-138"><a href="#Home">Home</a></li>
		<li id="menu-item-140" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-140"><a href="#Services">Services</a></li>
		<li id="menu-item-141" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-141"><a href="#Our-Work">Work</a></li>
		<li id="menu-item-139" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-139"><a href="#About">About</a></li>


		<li id="menu-item-142" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142"><a href="#Team">Team</a></li>
		<li id="menu-item-147" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-142"><a id="contactusID" href="#Contact-Us">Contact Us</a></li>
		<li id="menu-item-144" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-144"><a href="#Find-Us">Find Us</a></li>

</ul>      </section>
	</nav>
</div>

<div id="main" role="main"><a id="blahlab-widget-slider-3"></a>

<div class="salesforceCover salesforceCoverbackground">
			<div class="container">
				<div class="row">


					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="hire_content"> <small class="wow fadeIn animated" data-wow-delay=".1s">
			<?php if(isset($PageData['ServicePageHeaderFirstHeading'])) { print_r($PageData['ServicePageHeaderFirstHeading'][0]); }?>
			</small> </div>
						<h1><?php if(isset($PageData['ServicePageHeaderSubHeadingLeft'])) { print_r($PageData['ServicePageHeaderSubHeadingLeft'][0]); } ?>
			<img src="<?php if(isset($PageData['ServicePageHeaderImageUrl'])) { print_r($PageData['ServicePageHeaderImageUrl'][0]); } ?>" alt="Salesforce Development">
			<?php if(isset($PageData['ServicePageHeaderSubHeadingRight'])) { print_r($PageData['ServicePageHeaderSubHeadingRight'][0]); }?></h1>
						<p class="tec_des wow fadeIn animated sliderText" data-wow-delay=".3s">
			<?php if(isset($PageData['ServicePageHeaderText'])) { print_r($PageData['ServicePageHeaderText'][0]); }?>
			</p>
					</div>
				</div>
			</div>

			<?php $image = '';
			if(isset($Attachments['ServicePageBannerCloudImage'])) {
					$image = $Attachments['ServicePageBannerCloudImage'][0];
			}?>

				<img src="<?php echo $image; ?>" class="cloudImg" alt="Salesforce Development Services" <?php
				if(!isset($Attachments['ServicePageBannerCloudImage'])) { ?> Style="display:none;" <?php }?>> </div>




			<?php
			if(isset($Attachments['ServicePageImplementSection_id'])) {
				?>
	 <section class="body_container" role="main">
			<section class="SalesForceKey">
				<div class="container">
					<div class="wow fadeIn animated head-implement" data-wow-delay=".2s"><?php if(isset($PageData['ServicePageSecondBlockHeading'])) { print_r($PageData['ServicePageSecondBlockHeading'][0]); } ?> </div>
					<div> <span class="wow fadeIn animated" data-wow-delay=".1s"><?php if(isset($PageData['ServicePageSecondBlockSubHeading'])) { print_r($PageData['ServicePageSecondBlockSubHeading'][0]); } ?></span></div>
					<span class="LineLtl clear">&nbsp;</span>
					<div class="row">


				<?php
			$args = array(
				'post_type' => 'ServicePageData',
				'meta_query'  => array(
						array(
								'key' => 'pageName',
								'value' => $pageNameForPosts
						)
				),
				'posts_per_page' => 3,
				'cat'=>$Attachments['ServicePageImplementSection_id'][0]
			);
			$obituary_query = new WP_Query($args);
			while ($obituary_query->have_posts()) : $obituary_query->the_post(); ?>
			<div class="medium-4 large-4 columns text-center keyPoints"><?php echo the_post_thumbnail( array(120, 120));?>
							<h3><?php echo the_title(); ?></h3>
							<p><?php echo the_excerpt(); ?></p>
						</div>
			<?php  endwhile; wp_reset_postdata(); ?>

					</div>
				</div> </section>
				<?php } ?>




				<?php
				if(isset($Attachments['ServicePageServicesBlock_id'])) {
					?>

		 <section class="section-service active current" id="services">
<a id="Services"></a>
<br/>
				<div class="container">
		 <div class='large-10 large-centered columns'>
		<div class='alt mod modSectionHeader'>
			<div class='special-title centered-text'>
				<h6 class="white TextColorBlack">
					<?php if(isset($Attachments['ServicePageTitleOfServiceSection'][0])){ echo $Attachments['ServicePageTitleOfServiceSection'][0]; } ?>       </h6>
			</div>
		</div>
		<div class='two spacing'></div>
	</div><div class="container">

	<ul class="tabs service-tab">


		<?php
			$args = array(
				'post_type' => 'ServicePageData',
				'posts_per_page' => 5,
				'meta_query'  => array(
						array(
								'key' => 'pageName',
								'value' => $pageNameForPosts
						)
				),
				'cat'=>$Attachments['ServicePageServicesBlock_id'][0]
			);
			$obituary_query = new WP_Query($args);
			$i =1;
			while ($obituary_query->have_posts()) : $obituary_query->the_post();

			$PageData = get_post_meta( get_the_ID(),'ServicePageServicesBlockIcon');
			if(isset($PageData[0])){
				$Icon = $PageData[0];
			}else{
				$Icon = 'http://www.designersx.com/wp-content/themes/dxdev/serviceTemplateData/service-icon-2.png';
			}
			?>
				<li class="tab-link <?php if($i == '1'){ echo 'current'; } ?>" data-tab="tab-<?php echo $i ; ?>"><span class="image"><img src="<?php echo $Icon; ?>" alt="Salesforce Implementation"></span><span class="title"><?php echo the_title(); ?></span>
				<div class="tab">
					<span><?php echo the_title(); ?></span>
					<p><?php echo the_excerpt(); ?></p>
					<div class="image-block"><?php echo the_post_thumbnail( 'full' );?></div>
					</div>
				</li>

			<?php
			$i++;
			endwhile; wp_reset_postdata(); ?>
	</ul>


	<?php
			$args = array(
				'post_type' => 'ServicePageData',
				'posts_per_page' => 5,
				'meta_query'  => array(
						array(
								'key' => 'pageName',
								'value' => $pageNameForPosts
						)
				),
				'cat'=>$Attachments['ServicePageServicesBlock_id'][0]
			);
			$obituary_query = new WP_Query($args);
			$i =1;
			while ($obituary_query->have_posts()) : $obituary_query->the_post(); ?>

					<div id="tab-<?php echo $i ; ?>" class="tab-content2 <?php if($i == '1'){ echo 'current'; } ?> tab SalsesforceTabbing">
				<h5><?php echo the_title(); ?></h5>
						<p><?php echo the_excerpt(); ?></p>
						<div class="image-block"><?php echo the_post_thumbnail( 'full' );?></div>
				</div>
			<?php
			$i++;
			endwhile; wp_reset_postdata(); ?>



</div><!-- container -->
				</div>
		 <div class='two spacing'></div><div class='two spacing'></div>
			</section>


			</section>
			<?php } ?>
<a id="blahlab-widget-achievements-3"></a>


<div class='full parallax white achievementsBackground'>
<div class='row'>
	<div class='large-10 large-centered columns'>
		<div class='alt mod modSectionHeader'>
			<div class='special-title centered-text'>
				<h6 class="white">
					<?php if(isset($Attachments['ServicePageTitleOfAchievementsSection'][0])){ echo $Attachments['ServicePageTitleOfAchievementsSection'][0]; } ?>         </h6>
			</div>
		</div>
		<div class='two spacing'></div>
	</div>
</div>
<div class='row'>
		<?php
			for($i=1; $i<=4; $i++){
					$AttachmentsData = explode(",",$Attachments['ServicePageAchievementsContent'.$i][0]);
					?>
						 <div class='medium-3 large-3 columns'>
						<div class='mod modMilestone'>
							<i class='fa <?php echo $AttachmentsData[0]; ?>'></i>
							<strong data-from='0' data-to='<?php echo $AttachmentsData[2]; ?>'>&nbsp;</strong>
							<span><?php echo $AttachmentsData[1]; ?></span>
							<div class='four spacing'></div>
						</div>
						</div>
					<?php
			}
		?>

</div>
<div class='two spacing'></div>
</div>

<?php
if(isset($Attachments['ServicePagePortfolio_id'])) {
?>

<a id="Our-Work"></a>
<div class='full'>
<div class='row'>
	<div class='large-12 columns'>
		<div class='alt mod modSectionHeader'>
			<div class='special-title centered-text'>
				<h6>  <?php if(isset($Attachments['ServicePageTitleOfOurWorkSection'][0])){ echo $Attachments['ServicePageTitleOfOurWorkSection'][0]; } ?>    </h6>
			</div>
		</div>
		<div class='two spacing'></div>
		<div class='mod modGallery'>

								<div class='gallery-nav'>
					<ul>
						<li class="current">
							<a href='#' data-cat='all'>All</a>
			</li>
			 <?php
			 $args = array(
				 'post_type' => 'ServicePageData',
				 'meta_query'  => array(
						 array(
								 'key' => 'pageName',
								 'value' => $pageNameForPosts
						 )
				 ),
				 'cat'=>$Attachments['ServicePagePortfolio_id'][0]
			 );
			 $obituary_query = new WP_Query($args);
			 $i =1;
			 $PostCatName = array();
			 while ($obituary_query->have_posts()) : $obituary_query->the_post();
				$PostData = get_post_meta( get_the_ID());
				if($PostData['PostCatName'][0]){
					$PostCatNames[$PostData['PostCatName'][0]] = $PostData['PostCatName'][0];
				}
			 endwhile; wp_reset_postdata();

				foreach($PostCatNames as $postCatName) { ?>
						<li>
							<h2><a href='#' data-cat="<?php echo $postCatName; ?>"><?php echo $postCatName; ?></a></h2>
					</li>
				<?php

				}
			?>

												</ul>
				</div>

			<ul class='gallery large-block-grid-3 medium-block-grid-3 seperated small-block-grid-2'>
					<?php
					$args = array(
								'post_type' => 'ServicePageData',
								'meta_query'  => array(
										array(
												'key' => 'pageName',
												'value' => $pageNameForPosts
										)
								),
								'cat'=>$Attachments['ServicePagePortfolio_id'][0]
							);
							$obituary_query = new WP_Query($args);
							$i =1;
							while ($obituary_query->have_posts()) : $obituary_query->the_post();
							$PostData = get_post_meta( get_the_ID());
							$className = '';
							if(isset($PostData['PostCatName'][0])){
									$className = $PostData['PostCatName'][0];
							 }

					?>
				<li class="<?php echo $className; ?> imgClass">
						<?php if(isset($PostData['ServicePagePopUpTitle'])){ ?> <a data-popup-open="popup-<?php echo get_the_ID(); ?>" href="#"><?php } ?>
							<img width="600" height="439" src="<?php echo the_post_thumbnail_url('full'); ?>" class="attachment-portfolio size-portfolio wp-post-image" alt="<?php echo the_title(); ?>" srcset="<?php echo  the_post_thumbnail_url('full'); ?> 300w, <?php echo  the_post_thumbnail_url('full'); ?> 600w" sizes="(max-width: 600px) 100vw, 600px" />                <div class='overlay'>
								<div class='thumb-info'>
									<span><?php echo the_title(); ?></span>

								</div>
							</div>
					 <?php if(isset($PostData['ServicePagePopUpTitle'])){ ?> </a> <?php } ?>
					</li>


		<?php if(isset($PostData['ServicePagePopUpTitle'])){ ?>
	<div class="popup popupCustom" data-popup="popup-<?php echo get_the_ID(); ?>">
		<div class="popup-inner">
		<a class="popup-close" data-popup-close="popup-<?php echo get_the_ID(); ?>" href="#">x</a>
			<div class='full fullCustom'>
				<div class='row'>
				<div class='large-12 columns'>
					<div class='mod modBoxedSlider image-loader'>
					<div class='slides'>
						<?php
							$images = explode(",", $PostData['ServicePagePopUpImages'][0]);
							foreach($images as $image){
						?>
						<div class="slide">
							<img src="<?php echo $image; ?>" alt="<?php echo the_title(); ?>" height="300"/>
						</div>
						<?php } ?>
								</div>
					</div>
				</div>
				</div>
				<div class='spacing'></div>
				<div class='row'>
				<div class='large-12 columns scroll-slide'>
					<div class="poptitle"><?php echo $PostData['ServicePagePopUpTitle'][0]; ?></div>
					<ul class='info'>
								<li><strong>Client: </strong><?php echo $PostData['ServicePagePopUpClient'][0]; ?></li>
								<li><strong>Date: </strong><?php echo $PostData['ServicePagePopUpProjectDate'][0]; ?> </li>
					</ul>
					<p class="pop_p"><?php echo $PostData['ServicePagePopUpDescription'][0]; ?></p>

								</div>

				</div>
			 </div>

		</div>
	</div>

			<?php } ?>



			<?php  $i++;



			endwhile; wp_reset_postdata();

							?>

								</ul>
		</div>
	</div>
</div>
 <div class='two spacing'></div><div class='two spacing'></div>

</div>
<?php } ?>

<a id="blahlab-widget-testimonials-3"></a>

<div class='full parallax white testimonialsBackground'>
<div class='row'>
	<div class='large-12 columns'>
		<p class='centered-text'>
			<i class='fa fa-quote-left testimonial-quote-mark'></i>
		</p>
		<div class='spacing'></div>
	</div>
</div>
<div class='row'>
	<div class='large-12 columns'>
		<div class='alt mod modSectionHeader'>
			<div class='special-title centered-text'>
				<h6 class="white"><?php if(isset($Attachments['ServicePageTitleOfWhatOurClientsSaySection'][0])){ echo $Attachments['ServicePageTitleOfWhatOurClientsSaySection'][0]; } ?></h6>
			</div>
		</div>
		<div class='spacing'></div>
	</div>
</div>
<div class='row'>
	<div class='large-12 columns'>
		<div class='mod modTestimonials'>
			<div class='row'>
				<div class='small-12 columns'>
					<div class='items centered-text'>


		<?php query_posts('category_name=	Testimonials&showposts=9'); ?>
		<?php while (have_posts()) : the_post(); ?>

		 <div class='item'>
								<p class='quote'><?php the_content(); ?></p>
								<p class='author'>
																			<?php
				 $custom_fields = get_post_custom_values('testimonials_author');
				if(!empty($custom_fields)){
					 foreach ( $custom_fields as  $field_values ) {
					echo $field_values;
				}
			}

				?>                  </p>
								<div class='two spacing'></div>
							</div>


						<?php endwhile; ?>


												</div>
				</div>
				<div class='spacing'></div>
			</div>
		</div>
	</div>
</div>
</div>
<a id="About"></a>
<div class='full fullCustom2'>
<div class='row'>
	<div class='large-10 columns large-centered'>

	<div class='large-12 columns'>
		<div class='alt mod modSectionHeader'>
	<div class='special-title centered-text'>
				<h6 class="colorWhite">
<?php if(isset($Attachments['ServicePageTitleOfOurSalesforceExpertSection'][0])){ echo $Attachments['ServicePageTitleOfOurSalesforceExpertSection'][0]; } ?></h6>
			</div>
		</div>
	</div>
		<div class='two spacing'></div>
			<div class='large-12 columns'>
			<div class='large-4 columns'>

	 <p class='centered-text'>
			<img width="260" height="197" alt="ServicePage Developer" src="<?php if(isset($Attachments['ServicePageDeveloperImage'][0])){ echo $Attachments['ServicePageDeveloperImage'][0]; } ?>"  class="ServicePageDeveloperImageStyle" />
		</p>

	</div>


				<div class='large-8 columns'>
	<p class='centered-text big-text big-textCustom'><?php if(isset($Attachments['ServicePageDeveloperName'][0])){ echo $Attachments['ServicePageDeveloperName'][0]; } ?></p>
	 <p class='position positionCustom'><?php if(isset($Attachments['ServicePageDeveloperTitle'][0])){ echo $Attachments['ServicePageDeveloperTitle'][0]; } ?></p>
		<p class="pCustom">
		<?php if(isset($Attachments['ServicePageDeveloperDescription'][0])){ echo $Attachments['ServicePageDeveloperDescription'][0]; } ?>
</p>

		</div>
	 </div>

	 <div class='large-12 columns'>
 <div class='one spacing'></div>
	<div class='large-5 columns'>
	<p class='centered-text big-text abouUsSkills'>
Expertise
</p>



<?php
	if(isset($Attachments['ServicePageDeveloperAchievements_id'])) {
	$args = array(
				'post_type' => 'ServicePageData',
				'posts_per_page' => 5,
				'meta_query'  => array(
						array(
								'key' => 'pageName',
								'value' => $pageNameForPosts
						)
				),
				'cat'=>$Attachments['ServicePageDeveloperAchievements_id'][0]
			);
			$obituary_query = new WP_Query($args);
			$i =1;
			while ($obituary_query->have_posts()) : $obituary_query->the_post();
				$thisPostData = get_post_meta( get_the_ID());
			?>
				<div id="item_3" class="item1">
				<p class="colorWhite inline"><span class="displayin"><img src="<?php echo  the_post_thumbnail_url('post-thumbnail'); ?>" alt="<?php echo the_title(); ?>" class="tooltipMainImage"/></span><h4 class="heading4"><?php echo the_title(); ?></h4></p>
		<div class="tooltip_description tooltipWidth thanksMessageDisplay" title="<?php echo the_title(); ?>">
					<?php the_content(); ?>
				<?php
				for($i=1; $i <= $thisPostData['AchievementsCount'][0]; $i++) {
								$data = explode(",",$thisPostData['ServicePageAchievementsContent'.$i][0]);
				?>
						<div class="Expertisecustom"><span class="displayin"><img src="<?php echo $data [1]; ?>" class="Expertisecustom1" alt="<?php echo $data [0]; ?>"></span><?php echo $data [0]; ?><br/></div>

				<?php } ?>
				</div>
			 </div>


		<?php
			$i++;
			endwhile; wp_reset_postdata();
			}
			?>





</div>
<div class='large-7 columns'>
<p class='centered-text big-text abouUsSkills'>
Skills / Experience
</p>
<div class='large-12'>
		<div class='mod modBarGraph'>
			<ul class='bars'>
		<?php
			for($i=1; $i<=3; $i++){
					$WeAreGoodData = explode(",",$Attachments['ServicePageWeAreGoodContent'.$i][0]);
					?>
						<li>
						<span class="white"><strong class="strong-font"><?php echo $WeAreGoodData[1]; ?>%</strong><br/><?php echo $WeAreGoodData[0]; ?> </span>
						<p class='highlighted' data-percent='<?php echo trim($WeAreGoodData[1]); ?>'></p>
					</li>
					<?php
			}
		?>
	</ul>
		</div>
	</div>
</div>


		 </div>
	</div>
</div>
</div>


<?php
if(isset($Attachments['ServicePageTeamMembers_id'])) {
?>


<a id="Team"></a>

<div class='full'>
<div class='row'>
	<div class='large-12 columns'>
		<div class='alt mod modSectionHeader'>
			<div class='special-title centered-text'>
				<h6><?php if(isset($Attachments['ServicePageTitleOfOurSalesforceTeamSection'][0])){ echo $Attachments['ServicePageTitleOfOurSalesforceTeamSection'][0]; } ?></h6>
			</div>
		</div>
		<div class='two spacing'></div>
	</div>
</div>
<div class='row'>




		<?php
			$args = array(
				'post_type' => 'ServicePageData',
				'meta_query'  => array(
						array(
								'key' => 'pageName',
								'value' => $pageNameForPosts
						)
				),
				'cat'=>$Attachments['ServicePageTeamMembers_id'][0]
			);
			$obituary_query = new WP_Query($args);
			$i =1;
			while ($obituary_query->have_posts()) : $obituary_query->the_post();
			$thisPostData = get_post_meta( get_the_ID());
			?>
			 <div class='small-6 medium-3 large-3 columns'>
					<div class='mod modTeamMember style-2'>
						<div class='member'>
						<img src="<?php echo the_post_thumbnail_url('post-thumbnail'); ?>" alt="<?php echo the_title(); ?>">
						</div>
						<span><?php echo the_title(); ?></span>
						<p class='position'><?php if(isset($thisPostData['ServicePageTeamMemberPosition'][0])){ echo $thisPostData['ServicePageTeamMemberPosition'][0]; } ?></p>
						<p><?php echo the_content(); ?></p>
					</div>
					</div>
			<?php
			$i++;
			endwhile; wp_reset_postdata(); ?>


</div>
<div class='four spacing'></div>
</div>

<?php } ?>




<a id="blahlab-widget-news-3"></a>

<?php
if(isset($Attachments['ServicePageBlogPosts_id'])) {
?>
<div class='full parallax OurRecentPostSectionBackground'>
<div class='row'>
	<div class='large-12 columns'>
		<div class='alt mod modSectionHeader'>
			<div class='special-title centered-text'>
				<h6 >
					OUR RECENT POSTS          </h6>
			</div>
		</div>
		<div class='two spacing'></div>
	</div>
</div>
<div class='row'>

			<?php
			$args = array(
				'post_type' => 'posts',
				'meta_query'  => array(
						array(
								'key' => 'pageName',
								'value' => $pageNameForPosts
						)
				),
				'cat'=>$Attachments['ServicePageBlogPosts_id'][0]
			);
			$obituary_query = new WP_Query($args);
			$i =1;
			while ($obituary_query->have_posts()) : $obituary_query->the_post();
			$PostData = get_post_meta( get_the_ID());
			?>
			<div class='large-4 medium-4 columns'>
			<div class='mod modBlogPost'>
					<a data-popup-open="popup-<?php echo get_the_ID(); ?>" href="#">
				<img width="500" height="228" src="<?php echo the_post_thumbnail_url('medium'); ?>" class="attachment-full size-full imgCustom2" alt="<?php echo the_title(); ?>" srcset="<?php echo the_post_thumbnail_url('medium'); ?> 300w, <?php echo the_post_thumbnail_url('medium'); ?> 768w, <?php echo the_post_thumbnail_url('medium'); ?> 800w" sizes="(max-width: 800px) 100vw, 800px" />          </a>
				<div class='content'>

				<span><a data-popup-open="popup-<?php echo get_the_ID(); ?>" href="#"><?php echo the_title(); ?> </a></span>
				<p class='date'> <?php the_time('l, F j, Y'); ?></p>
				<p class="excerpt"><?php echo the_excerpt(); ?></p>
			</div>
		</div>
		</div>





	<div class="popup popupCustom" data-popup="popup-<?php echo get_the_ID(); ?>">

		<div class="popup-inner">
		<a class="popup-close" data-popup-close="popup-<?php echo get_the_ID(); ?>" href="#">x</a>
		<div class="scroll">

			<div class='full fullCustom'>
				<div class='row'>
					<div class="post-title-container">
						<div class="heading-text">
						<?php echo the_title(); ?>
						</div>
						<div class="post-materials clearfix post-materials_main">
							<span class="post-materials_span">
									<i class="fa fa-user"></i>
									<span class="material-font"> By</span>
									<span class="author-name">
										<a rel="author" title="author profile"><?php echo $author = get_the_author(); ?></a>
									</span>
							</span>
							<span>
								<i class="fa fa-calendar-o"></i>
								<a class="timestamp-link timestamp-link_a" rel="bookmark" title="permanent link">
									<abbr class="published"><?php the_time('l, F j, Y'); ?></abbr>
								</a>
							</span>
						</div>
					</div>
					<div class='large-12 columns'>
						<div class='mod modBoxedimage'>
							<img width="500" height="228" src="<?php echo the_post_thumbnail_url('medium'); ?>" class="attachment-full size-full imgCustom2" alt="<?php echo the_title(); ?>" srcset="<?php echo the_post_thumbnail_url('medium'); ?> 300w, <?php echo the_post_thumbnail_url('medium'); ?> 768w, <?php echo the_post_thumbnail_url('medium'); ?> 800w" sizes="(max-width: 800px) 100vw, 800px" />
						</div>
					</div>
				</div>
				<div class='spacing'></div>
				<div class='row'>
				<div class='large-12 columns pop_p'>

					<p><?php echo the_content(); ?></p>

								</div>

				</div>
			 </div>

		</div>

		</div>

	</div>





	<?php
			$i++;
			endwhile; wp_reset_postdata(); ?>


		</div>
<div class='two spacing'></div><div class='two spacing'></div>
</div>
<?php } ?>
<a id="Contact-Us"></a>

<div class='full'>
<div class='row'>
	<div class='large-12 columns'>
		<div class='alt mod modSectionHeader'>
			<div class='special-title centered-text'>
				<h6>
					CONTACT US          </h6>
			</div>
		</div>
		<div class='two spacing'></div>
	</div>
</div>
<div class='row'>
	<div class='medium-8 columns'>
		<div class='form'>
			<div class='row'>
				<form id='contact_form' method='POST'>
					<div class='large-12 columns'>
						<p id='thanks' class="thanksMessage thanksMessageDisplay2" style="display:none;">
							<?php if(isset($Attachments['ServicePageContactUsThankuMessage'][0])){ echo $Attachments['ServicePageContactUsThankuMessage'][0]; } ?>
						</p>
			<p id='error' class="errorMessage thanksMessageDisplay2" style="display:none;">
							<?php if(isset($Attachments['ServicePageContactUsThankuMessage'][0])){ echo $Attachments['ServicePageContactUsThankuMessage'][0]; } ?>
						</p>
					</div>
			<script src='https://www.google.com/recaptcha/api.js'></script>
		<div class='medium-12 columns'>
			<div class='medium-6 columns'>
						<input class='required' name='name' placeholder='NAME' type='text'>
			</div><div class='medium-6 columns'>
						<input class='required email' name='email' placeholder='EMAIL' type='text'>
			</div><div class='medium-6 columns'>
						<input class='required phone' name='phone' placeholder='PHONE' type='text' onkeyup="this.value=this.value.replace(/[^\d]/,'')">
			</div><div class='medium-6 columns'>
						<input class='required company' name='company' placeholder='COMPANY' type='text'>
			</div>
			<div class='medium-12 columns'>
						<textarea class='required' name='message' placeholder='MESSAGE'></textarea>
						<input type="hidden" name="action" value="blahlab_widget_ajax_contact_details">
						<input type="hidden" name="queryForm" value="<?php echo $dataForm; ?>">
						<input type="hidden" name="widget_action" value="send_email">

			 <div class="g-recaptcha" data-sitekey="6LfnexsUAAAAAASx_3xDGWhsAHnMFv_gH333upR5"></div>
			<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
			<input type="hidden" name="currentPage" value="<?php echo $actual_link; ?>">
						<input class='button' type='submit' value="Submit"><img id="contactPageLoad" class="loaderImage" src="http://www.designersx.com/wp-content/uploads/2017/03/2017-03-08.gif" style="display:none;" alt="Loader"/>
			</div>
		</div>
				</form>
			</div>

		</div>
		<div class='two spacing'></div>
	</div>
	<div class='medium-4 columns'>
		<div class='contact-details'>
								<?php echo $Attachments['ServicePageContactUsAddressDetails'][0]; ?>
						</div>
	</div>
</div>
<div class='two spacing'></div><div class='two spacing'></div>
</div>
<a id="Find-Us"></a>
<div class='full parallax white FindUsBackground'>
<div class='row'>
	<div class='large-12 columns'>
		<div class='alt mod modSectionHeader'>
			<div class='special-title centered-text'>
				<h6 class="white">
					FIND US ELSEWHERE          </h6>
			</div>
		</div>
		<div class='two spacing'></div>
	</div>


		<?php if(isset($Attachments['ServicePageFacebookIconInfo'][0])){

					$facebook =  explode(',',$Attachments['ServicePageFacebookIconInfo'][0]);
					$Twitter =  explode(',',$Attachments['ServicePageTwitterIconInfo'][0]);
					$Dribbble =  explode(',',$Attachments['ServicePageDribbbleIconInfo'][0]);
					$Tumblr =  explode(',',$Attachments['ServicePageTumblrIconInfo'][0]);

				}

	?>


				<div class='medium-3 columns'>
			<div class='big-social'>
				<a href='<?php if(isset($facebook[1])){   echo $facebook[1]; }?>' target="_blank">
					<i class='fa <?php if(isset($facebook[0])){   echo $facebook[0];}?>'></i>
				</a>
				<div class="white"><?php if(isset($facebook[2])){   echo $facebook[2]; }?></div>
			</div>
	<div class='two spacing'></div>
		</div>




				<div class='medium-3 columns'>
			<div class='big-social'>
				<a href='<?php if(isset($Twitter[1])){   echo $Twitter[1]; }?>' target="_blank">
					<i class='fa <?php if(isset($Twitter[0])){   echo $Twitter[0];}?>'></i>
				</a>
				<div class="white"><?php if(isset($Twitter[2])){   echo $Twitter[2]; }?></div>
			</div>
			<div class='two spacing'></div>
		</div>


				<div class='medium-3 columns'>
			<div class='big-social'>
				<a href='<?php if(isset($Dribbble[1])){   echo $Dribbble[1]; }?>' target="_blank">
					<i class='fa <?php if(isset($Dribbble[0])){   echo $Dribbble[0]; }?>'></i>
				</a>
				<div class="white"><?php if(isset($Dribbble[2])){   echo $Dribbble[2]; }?></div>
			</div>
			<div class='two spacing'></div>
		</div>


				<div class='medium-3 columns'>
			<div class='big-social'>
				<a href='<?php if(isset($Tumblr[1])){   echo $Tumblr[1]; }?>' target="_blank">
					<i class='fa <?php if(isset($Tumblr[0])){   echo $Tumblr[0];}?>'></i>
				</a>
				<div class="white"><?php if(isset($Tumblr[2])){   echo $Tumblr[2]; }?></div>
			</div>
			<div class='two spacing'></div>
		</div>


		</div>
<div class='four spacing'></div>
<div class='two spacing'></div>
</div>  </div><!-- end of #main -->

<div class='full no-padding backgroundCoustom'>
	<div class='two spacing'></div>
	<div class='row'>
		<div class='large-12 columns'>
							<p>©<?php echo $Attachments['ServicePageFooterContent'][0]?></p>
		</div>
	</div>
	<div class='spacing'></div>
</div>
<!-- Latest compiled and minified CSS -->

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/jquery.js.download" async></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/jquery-migrate.min.js.download" async></script>

<script src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/jquery.min.js.download"></script>
<script src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/bootstrap.min.js.download"></script>
<script type="text/javascript">
$(document).ready(function(){
$('ul.tabs li').click(function(){
	var tab_id = $(this).attr('data-tab');

	$('ul.tabs li').removeClass('current');
	$('.tab-content2').removeClass('current');

	$(this).addClass('current');
	$("#"+tab_id).addClass('current');
})
})</script>



	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/jquery.tooltip.css" type="text/css" />

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/jquery.tooltip.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			$("div.item1").tooltip();
		});
	</script>



<script>

$(window).on('resize', function(){
	var screenHeight = $( window ).height() - 30;
	var screenHeightSecond = $( window ).height() - 80;
	$('.popup-inner').css('max-height', screenHeight+'px');
	$('.fullCustom').css('max-height', screenHeightSecond+'px');
}).resize();



$(function() {
//----- OPEN
$('[data-popup-open]').on('click', function(e)  {
	var screenHeight = $( window ).height() - 30;
	var screenHeightSecond = $( window ).height() - 80;
	$('.popup-inner').css('max-height', screenHeight+'px');
	$('.fullCustom').css('max-height', screenHeightSecond+'px');

	 document.body.style.overflowY = "hidden";
	var targeted_popup_class = jQuery(this).attr('data-popup-open');
	$('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

	e.preventDefault();
});

//----- CLOSE
$('[data-popup-close]').on('click', function(e)  {
	 document.body.style.overflowY = "scroll";
	var targeted_popup_class = jQuery(this).attr('data-popup-close');
	$('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

	e.preventDefault();
});
});
</script>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/libs.js.js"></script>

<script>
document.getElementById("menu-item-138").click();
</script>
<style>@media (touch-enabled),(-webkit-touch-enabled),(-moz-touch-enabled),(-o-touch-enabled),(-ms-touch-enabled),(modernizr){#touch{top:9px;position:absolute}}</style>


<style>
.modBarGraph .bars p.highlighted {
background: <?php echo $Attachments['ServicePageThemeColor'][0]; ?>;
}

.modGallery .gallery-nav li.current {
border: 1px solid <?php echo $Attachments['ServicePageThemeColor'][0]; ?>;
}
.testimonial-quote-mark{
color: <?php echo $Attachments['ServicePageThemeColor'][0]; ?>;
}
.big-social i {
background-color:  <?php echo $Attachments['ServicePageThemeColor'][0]; ?>;
border: 3px solid  <?php echo $Attachments['ServicePageThemeColor'][0]; ?>;

}
a {
color: <?php echo $Attachments['ServicePageThemeColor'][0]; ?>;
}
.modBoxedTextSlider .box i{
color: <?php echo $Attachments['ServicePageThemeColor'][0]; ?>;
}
.modGallery .gallery-nav li.current a{
color: <?php echo $Attachments['ServicePageThemeColor'][0]; ?>;
}
.modMilestone i{
background: <?php echo $Attachments['ServicePageThemeColor'][0]; ?>;
color: <?php echo $Attachments['ServicePageThemeFontColor'][0]; ?>;
}
.modCallToAction p{
color: <?php echo $Attachments['ServicePageThemeFontColor'][0]; ?>;
}
.button.boxed.black {
color: <?php echo $Attachments['ServicePageThemeFontColor'][0]; ?>;
border: 1px solid <?php echo $Attachments['ServicePageThemeFontColor'][0]; ?>;
}
.big-social i:hover{
border: 3px solid  <?php echo $Attachments['ServicePageThemeColor'][0]; ?>;
}
input[type="submit"]{
background: <?php echo $Attachments['ServicePageThemeColor'][0]; ?>;
}
.button{
background: <?php echo $Attachments['ServicePageThemeColor'][0]; ?>;
}
.salesforceCoverbackground{
background-size: auto;
height: auto;
background-repeat: no-repeat;
background-image:url(<?php if(isset($Attachments['ServicePageHeaderBgImage'])) { print_r($Attachments['ServicePageHeaderBgImage'][0]); }?>)!important;"
}



.FindUsBackground{
background-image: url(<?php if(isset($Attachments['FindUsSectionBackground'])) { print_r($Attachments['FindUsSectionBackground'][0]); }?>);
}
.achievementsBackground{
	background-image: url(<?php if(isset($Attachments['AchievementsSectionBackground'])) { print_r($Attachments['AchievementsSectionBackground'][0]); }?>);
	background-size:cover;
}

.testimonialsBackground{
background-image: url(<?php if(isset($Attachments['TestimonialsSectionBackground'])) { print_r($Attachments['TestimonialsSectionBackground'][0]); }?>);
}
.OurRecentPostSectionBackground{
	background-image: url(<?php if(isset($Attachments['OurRecentPostSectionBackground'])) { print_r($Attachments['OurRecentPostSectionBackground'][0]); }?>);
}

.mod .image-loader {
 background: url(<?php if(isset($Attachments['ServicePageLoaderImage'])) { print_r($Attachments['ServicePageLoaderImage'][0]); }?>) 50% 20% no-repeat;
}

.salesforceCover{
	background-color: <?php if(isset($Attachments['ServicePageMenuBackground'])) { print_r($Attachments['ServicePageMenuBackground'][0]); }?>!important;
}
.f-topbar-fixed.shrink .contain-to-grid{
	background-color: <?php if(isset($Attachments['ServicePageMenuBackground'])) { print_r($Attachments['ServicePageMenuBackground'][0]); }?>!important;
}
.fullCustom2{
	background-color: <?php if(isset($Attachments['ServicePageMenuBackground'])) { print_r($Attachments['ServicePageMenuBackground'][0]); }?>!important;
}

		</style>


</body>
</html>
<link rel="stylesheet" id="fontello.css-css" href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,600,700" type="text/css" media="all"/>
<link rel="stylesheet" id="fontello.css-css" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&subset=latin-ext" type="text/css" media="all"/>
<link rel="stylesheet" id="fontello.css-css" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/fontello.css" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/responsive.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/owl_002.css" type="text/css" media="all"/>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/owl.css" type="text/css" media="all"/>
<link rel="stylesheet" id="blahlab-theme-slug-osum-google-fonts-raleway-css" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/css" type="text/css" media="all"/>
<link rel="stylesheet" id="font-awesome.css-css" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/font-awesome.css" type="text/css" media="all"/>
<link rel="stylesheet" id="blahlab-theme-slug-osum-wp.css-css" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/wp.css" type="text/css" media="all"/>
<link rel="stylesheet" id="blahlab-theme-slug-osum-skins.css-css" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/skins.css" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/serviceTemplateData/font.css" type="text/css" media="all"/>



<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/slick.min.js.download"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/jquery.appear.js.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/jquery.sequence-min.js.download"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/masonry.pkgd.js.download"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/imagesloaded.pkgd.min.js.download"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/jquery.validate.js.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/jquery.countTo.js.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/jquery.easing.1.3.js.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/boot.js.download"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/serviceTemplateData/app.js.download"></script>
<script>
function changeURL(page){
alert(page);

}
</script>
