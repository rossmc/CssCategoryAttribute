# Magento CssCategoryAttribute
#### Overview
This Magento module adds a new Category attribute called *CSS Classes* which you can set in *Catalog > Manage Categories*.  It is then added to the *<li>* on Magento's Topmenu which is used to build the main navigation.

![CSS Category Attribute](http://rossmchugh.com/wp-content/uploads/2017/03/css-category-attribute.png)

With CSS classes added to the main navigation in this way you will be able to customise and re-use the CSS Styles easily to create a custom UX experience.

Additionally you can use this attribute in *app/design/frontend/<package> /<theme>/template/catalog/category/view.phtml* with code similar to the below:

    <?php echo $_category->cssCategoryAttribute() ?>

#### Installation
* Download latest version [here](https://github.com/rossmc/CssCategoryAttribute/archive/master.zip). 
* Unzip to Magento root folder.
* Clear cache.
* Re-index Category Flat Data if you have category flat tables enabled. 
* Logout from admin then login again to access the Report.
