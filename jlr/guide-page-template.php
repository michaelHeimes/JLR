<?php
/**
 * Template Name: Guide Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JLR
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			<div class=" wrap-992">
				<section>
					<h2>How to log into your website:</h2>
					<p>The way to access the "back-end" of your website will always be your url with "/wp-admin" after the URL</p>
					<p>For your site, this is going to be <a href="<?php echo get_site_url();?>/wp-admin" target="_blank"><?php echo get_site_url();?>/wp-admin</a>.</p>
				</section>
				
				<section style="margin-bottom: 100px;">
					<h2>How to edit your website:</h2>
					<p>Once you are in the back-end, you will be looking at the WordPress Back-end Navigation and Dashboard.</p>
					
					<h3>Back-end Navigation</h3>
					<p>The Back-end Navigation on the right is what you will use to navigate to the pages where you want to edit and add new pages, update plugins, and make other changes when necessary. I will be going from top to bottom and I will be skipping over anything you most likely will never need to access and often should NOT mess with!</p>

					<h4>Members</h4>
					<p>Here is where you can add/edit/delete the member cards from the Member Directory.</p>
					
					<h4>Media</h4>
					<p>Here is where all of your images and files will be stored. You can click "Add New" to select a file on your computer that you want to upload, or simply drag-and-drop the image or file over the gallery.</p>
					<p>You can also edit images by resizing and/or cropping them.</p>
					
					<h4>Pages</h4>
					<p>You can ignore "Posts" as your site currently isn't set up to have a blog. Instead, you will be using "Pages" to edit and grow the site.</p>		
						
					<h5>Editing Existing Pages</h5>
					<p>If you click on pages, you will see a list of all existing pages. If you click the page name, you will be taken to that page's back-end. Here you will find all the fields for the content on those pages. The fields will be for images, text, and links. The fields are labeled and will be in the order that they appear on the page. I recommend that you always have the page you are editing open in another tab or browser to not only make it easier but to occasionally check your work by refreshing the live page.</p>
					<p>To change an image, hover the image and click the "X" icon. This takes you to the Media page where all your images are stored. You can select a different image or drag a new image from your computer to the Media library and it will add it. Once the image is selected, click "Select".</p>
					<p>Some of the fields are Repeater Fields. These allow you to not only edit the text, images, and links but to add additional sets of fields and to remove and re-order them. An example of this is the Board Of Director cards on the About Page. This type of field is easiest to identify by the ability to ADD them and each row of fields has a number next to it. To reorder, simply drag-and-drop. To remove, hover the row and a "+ and -" will appear on the right side.</p>
					<p><strong>Always remember that any changes you make will not be saved unless you click "Save AS Draft" on a new page and will not be live unless you click "Update" (for existing pages) or "Publish" (for new pages).</strong></p>
					<p>In the Publish Box, a link to view "Revisions". Here you can view past versions of the page you're editing and revert to one of them. This is useful if you decide you made errors or the edits you are making are no longer what you want.</p>
					
					<p>Some existing pages have a field labeled "Gallery Shortcode" and a corresponding gallery that displays on the page. For information on this, scroll down to <a href="/guide//#unite-gallery">Unite Gallery</a></p>
					
					<h5>Adding A New Page</h5>
					<p>There are pages on your site that are navigated to by a parent link. This will be the only time you should add a page to the website without a minor re-deigns to accommodate more navigation menu links. To access one of these pages from the main navigation menu, the parent link is hovered and the submenu containing the child links appears. Community Development and Events are set up this way. This way you can add and remove these pages from the navigation if they are no longer part of your mission.</p>
					<p>To add one of these pages, click "Pages" then click "Add New". Name the page in the Title Box. Under the Publish box, you should see a box titled "Page Attributes". If you don't see this box, near the top-right of the page click on "Page Options". Make sure Page Attributes, Featured Image, and Page SEO Settings are all checked. Now, in the Page Attributes box, select the appropriate Template. If the page you are creating is part of Community Development, select "Community Development Page" from the Template drop-down. If it's part of Events, select "Events Page Template".</p>
					<p>Once the correct template is selected, the fields for the page will change to the fields that make the actual page. While working on the page, you can click "Preview" to see what it would look like when published. You can always save it as a draft as well. Once you're ready for the world to see it, click "Publish". Now to create a navigation link to the page, you can scroll down this guide to the <a href="/guide/#menus">"Appearance -> Menus"</a> section to learn how to do that!</p>
					<p>One last thing about Pages, you can move them to the trash and they will no longer be visible to the public. You can also restore a page from the Trash and make it public again by going into the trash and clicking that option.</p>
										
					<h4>Hiding Content From Non-Members</h4>
					<p>Currently, all pages under RESOURCES are able to be hidden. In order to hide them, open the page from the back end and go to the PUBLISh box in the top-right. Edit VISIBILITY and set it to "Password Protected". When you select that option, a Password field will open. Enter the password, click OK, and then click UPDATE.</p>
					
					<h4>The Home Page</h4>
					<p>The Home Page is designed to be a longer scrolling aggregate of the website's back pages and give small bites of information with the opportunity for the user to "drill down" and learn more. The Community Development and Events sections function like this. When you add a Community Impact or Event page, you can add a preview to the Home Page by scrolling down to the realted section and clicking "ADD PROJECT" or "ADD EVENT". Then in the dropdown, select the page you want to be previewed. These can be dragged and dropped into any order you want.</p>
					
					<h4>Contact</h4>
					<p>Contact handles the Contact Forms on the site. The only thing you'd probably need to change here is where the submitted messages are sent. To change this, click on "Contact", then click on the form you want to edit. Then click the "Mail" tab and change the "To:" address.</p>
										
					<h4 id="menus">Appearance / Menus</h4>
					<p>What good is a new page is no one can find it?! When you add a new page that goes under one of the top-row navigation (such as a new Event), you will need to add a navigation menu link. Do do this, hover "appearance" and then click "Menus" (User must be an Admin). You will see the Pages box to the left and a graphic representation of your main navigation on the right. In the Pages box, you can see recently added pages, all pages, or search for a page. Simple check the page or pages you want to add menu links to, and then click "Add To Menu". At the bottom of the graphic representation of your main menu, you will see the pages you just added. Simple drag and drop them to be under their parent menu and slightly to the right. Since there are already parent menu items with children menu items set up, you can see how new menu link shave to be positioned.</p>
								
					<h4>Plugins</h4>
					<p>You will also, depending on your User Level, update any plugins that need to be updated. Plugins are basically packaged applications that add functionality to your website. From time to time, updates will become available and need to be installed. These updates may be to add new features, increase security, or to be more compatible with the latest version of WordPress. Although you don't always have to update them immediately, it's good practice to not let too much time pass before going so. If something on the site is not working as it used to, it may be because that element has functionality provided by a plugin, and that plugin needs to be updated. Although it's rare, a plugin update may break the site or cause a small issue. If this happens, contact your webmaster.</p>
								
					<h4>WordPress Updates</h4>
					<p>WordPress itself is always evolving and improving security. This to will need to be updated soon after a new version is released. Although it's rare, a WordPress update may break the site or cause a small issue. If this happens, contact your webmaster.</p>
					
					<h4>Users</h4>
					<p>This is where you will add, remove, and generally manage the Back-end Users. These are the people who will be allowed to access the Back-end.</p>
					<p>Each user needs to be given a User Role. An explanation of the different roles can be found here: <a href="https://thethemefoundry.com/blog/wordpress-user-roles/" target="_blank">https://thethemefoundry.com/blog/wordpress-user-roles/</a></p>
					<p>I recommend that at your external Web Master and at least one Internal Member be given the Admin role. Others should be fine with just being Editors.</p>
					
					<h4>Options</h4>
					<p>The Options page is where you will edit anything on the site that is on all or nearly all pages. Usually, this is the header and footer and any text or images in them.</p>
					
					<h4 id="unite-gallery">Unite Gallery</h4>
					<p>Your website uses this plugin to manage several galleries.</p>
					
					<h5>Editing an existing gallery</h5>
					<p>To edit an existing gallery, click "Unite Gallery" in the Admin Navigation. This takes you to the list of all active galleries. The name of each gallery should make it obvious what page the gallery is displayed on. Simple click "EDIT ITEMS" for the gallery you want to edit. From the edit page, you can rearrange, add, and delete images.</p>
					
					<h5>Adding a New Gallery</h5>
					<p>When you add a new page that has a field labeled "Gallery Shortcode", that page's template is ready to show a gallery you create!</p>
					<ol>
						<li>To create a new gallery, click "Unite Gallery" in the Admin Navigation.</li>
						<li>Then click "Create New Gallery". This opens a box with several options for the gallery type. Click "Tiles - Justified".</li>
						<li>Give the gallery a name that will make it obvious what page the gallery will be shown on.</li>
						<li>Next, you need to give the gallery an alias. This alias can only consist of letters and cannot have capital letters or spaces. So if you decided to name the gallery "Girls on the Run", the alias would be "girlsontherun".</li>
						<li>Click "Create Gallery"</li>
					</ol>
						<p>You will then be on the settings page and there are a few settings you will need to change under Gallery Options.</p>
					<ol>
						<li>Change "Space Between Tiles" to "4".</li>
						<li>Change "Tile Image Resolution" to "Big"</li>
						<li>Click "Update Gallery</li>
					</ol>
					<p>Now there is only two steps left! On the settings page, you will see a box labeled "Gallery Shortcode". Simply select what's in the box, and then head over to the page where you want the gallery on. On that page, paste the shortcode you just copied into the field labeled "Gallery Shortcode".</p>
					
					<h4>Annual Report</h4>
					<p>The Annual Report will be in the Resources navigation as a single link that links to the pdf and opens in a new tab.</p>
					<p>To achieve this, you will upload the new report into the Media Library by opening the Library and dragging & dropping the file onto it. Once uploaded, click the file to open the Attachment Details. Once opened, copy the URL. Next go into "Appearance/Menus" and scroll down to the previous year's Annual Report link. Click the link to open it and then paste the URL on the new Report into the link URL. Lastly, change the Navigation Label.</p>
				</section>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
