<style>
#_custom_meta_metabox .hndle{
 background: none repeat scroll 0 0 #2EA2CC;

}
#_custom_meta_metabox .hndle span{
 color:#ffffff;padding-left:10px;
}
</style>




<div class="my_meta_control">
 

 
 
 <label>Enter Fav Ion URL</label>
 
	<p>
		<?php $mb->the_field('fav'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>Fav Ion URL</span>
	</p>
 
 
 
 
 
 
 
	 
	<label>Theme Colors Code</label>
 
	<p>
		<?php $mb->the_field('logo'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>Enter Logo Url</span>
	</p>
	
	
	
	
	<label>Theme background image</label>
 
	<p>
		<?php $mb->the_field('bgimg'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>Enter background image path</span>
	</p>
	

	<label>Last Menu Item</label>
		<p>
		<?php $mb->the_field('menu'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>Enter menu name  </span>
	</p>
	
	
 
	<label>Tag Line</label>
 
	<p>
		<?php $mb->the_field('title'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>"   value="<?php $mb->the_value(); ?>" />
		<span>Enter Page Title you want to write on start page</span>
	</p>

	
	
	
	<label>Page  discription</label>
 
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
	

		<h2 class="hndle">
<span>Highlights</span>
</h2>
	
	<?php while($mb->have_fields_and_multi('services')): ?>
	<?php $mb->the_group_open(); ?>
 
		<?php $mb->the_field('serv'); ?>
		<label>Enter Highlights Name</label>
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
	


	<p><label>Project Features</label>
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