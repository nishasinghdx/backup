<style>
#_custom_meta_metabox .hndle{
 background: none repeat scroll 0 0 #2EA2CC;

}
#_custom_meta_metabox .hndle span{
 color:#ffffff;padding-left:10px;
}
</style>




<div class="my_meta_control">
 

 
	<label>Logo Url</label>
 
	<p>
		<?php $mb->the_field('logo'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>Enter Logo Url</span>
	</p>
	
	<label>Menu name</label>
		<p>
		<?php $mb->the_field('menu'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>Enter menu name  </span>
	</p>
	
	
 
	<label>Main Page Title</label>
 
	<p>
		<?php $mb->the_field('title'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>"   value="<?php $mb->the_value(); ?>" />
		<span>Enter Page Title you want to write on start page</span>
	</p>

	
	
	
	<label>Main Page Title discription</label>
 
	<p>
		<?php $mb->the_field('titledescription'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
		<span>Enter Page Title discription showing at bottom of Title</span>
	</p>
	
	
	<label>Video Image</label>
	<p>
		<?php $mb->the_field('videoimg'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>"   value="<?php $mb->the_value(); ?>" />
		<span>Enter you tube video image</span> 
	</p>
	
	
	
	
	
	
	
	<label>Video Link</label>
	<p>
		<?php $mb->the_field('video'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>"   value="<?php $mb->the_value(); ?>" />
		<span>Enter you tube video link</span>
	</p>
	
	
	<label>Enter Button image URL</label>
	<p>
		<?php $mb->the_field('consultant'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>"   value="<?php $mb->the_value(); ?>" />
		<span>Enter URL of the button shows right side on the video</span>
	</p>
		<h2 class="hndle">
<span>Services</span>
</h2>
	
	<?php while($mb->have_fields_and_multi('services')): ?>
	<?php $mb->the_group_open(); ?>
 
		<?php $mb->the_field('serv'); ?>
		<label>Enter Service Name</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" style="width:50%;"   />	
			<a href="#" class="dodelete button">Remove Services</a>
		</p>	
 
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>
 
	<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-services button">Add Services</a></p>
	
	
	<h2 class="hndle">
<span>Skills</span>
</h2>
	
<label>Skill Title</label>
 
	<p>
		<?php $mb->the_field('skilltitle'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>"   value="<?php $mb->the_value(); ?>" />
		<span>Enter the skill area hedding  title. </span>
	</p>	
	
	<label>Enter Skills</label>
 
	<p>
		<?php $mb->the_field('skills'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
		<span>Enter Multiple Skills with icon code and skill name . for ex (icon code1: skill name1),(icon code2 : skill name2)</span>
	</p>
	
	<br/><br/>
		<h2 class="hndle">
<span>Portfolio</span>
</h2>
<label>Projects</label>	
	
<?php while($mb->have_fields_and_multi('Project')): ?>
	<?php $mb->the_group_open(); ?>
 
		<?php $mb->the_field('projname'); ?>
		<label>Enter Project Name</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" style="width:50%;"   />
		
		<?php $mb->the_field('projshot'); ?>
		<label>Enter Project Screenshot URL</label>
		<p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>" style="width:50%;"   />
		
	<p>
	<label>Discription</label>
		<?php $mb->the_field('projdisc'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
		<span>Enter Discription of the Project</span>
	</p>
	


	<p>
		<?php $mb->the_field('features'); ?>
		<textarea name="<?php $mb->the_name(); ?>" rows="3"><?php $mb->the_value(); ?></textarea>
		<span>Enter Project Features with comma separated values . for ex - Specialized User Experience , Custom Date, Time & Selector </span>
	</p>


				
			<a href="#" class="dodelete button">Remove Project</a>
		</p>	
 
	<?php $mb->the_group_close(); ?>
	<?php endwhile; ?>
 
	<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-Project button">Add Project</a></p>
		
	
	
	
	
	
	
	
</div>