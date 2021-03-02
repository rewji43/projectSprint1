<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";O:8:"stdClass":2:{s:5:"items";O:8:"stdClass":6:{s:4:"blog";O:8:"stdClass":20:{s:4:"name";s:4:"blog";s:7:"xmlpath";s:65:"/var/www/html/components/com_flexicontent/templates/blog/item.xml";s:8:"xmlmtime";i:1614603813;s:4:"view";s:4:"item";s:7:"tmplvar";s:11:".items.blog";s:5:"thumb";s:51:"components/com_flexicontent/templates/blog/item.png";s:6:"params";s:25132:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_BLOG_ITEM_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_BLOG_ITEM_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>

			<!--field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2" /-->

			<field name="htmlmode" type="multilist" subtype="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group group-fcinfo">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>

			<field name="params_above_tabset_spacer" type="separator" default="" level="none" class="fcspacer-16"/>

			<field name="params_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>
			<field name="params_tab_basic" type="separator" default="FLEXI_TMPL_BASIC_TAB" description="" icon_class="icon-cog" level="tab_open" box_type="1"/>

			<field name="display_field_grp" type="separator" cssprep="1" default="FLEXI_TMPL_FIELD_DISPLAY" description="" level="level2"/>
			<field name="show_author" type="radio" default="" label="FLEXI_SHOWAUTHOR" description="FLEXI_SHOWAUTHOR_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_create_date" type="radio" default="" label="FLEXI_SHOWCREATED" description="FLEXI_SHOWCREATED_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_modifier" type="radio" default="" label="FLEXI_SHOWMODIFIEDBY" description="FLEXI_SHOWMODIFIEDBY_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_modify_date" type="radio" default="" label="FLEXI_SHOWMODIFIED" description="FLEXI_SHOWMODIFIED_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_category" type="radio" default="" label="FLEXI_SHOWCATS" description="FLEXI_SHOWCATS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_vote" type="radio" default="" label="FLEXI_SHOWRATING" description="FLEXI_SHOWRATING_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_favs" type="radio" default="" label="FLEXI_SHOWFAVS" description="FLEXI_SHOWFAVS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>
			<field name="show_tags" type="radio" default="" label="FLEXI_SHOWTAGS" description="FLEXI_SHOWTAGS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_HIDE</option>
				<option value="1">FLEXI_SHOW</option>
			</field>

			<field name="Customblocks" type="separator" default="FLEXI_BLOCKS_CUSTOM_FIELDS" level="level2"/>

			<field name="columnmode" type="radio" default="" label="FLEXI_COLUMN_MODE" description="FLEXI_COLUMN_MODE_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_COLUMN_MODE_FORCE_1_COLS</option>
				<option value="1">FLEXI_COLUMN_MODE_FORCE_2_COLS</option>
				<option value="2">FLEXI_COLUMN_MODE_FORCE_AUTO_COLS</option>
			</field>

			<field name="params_tab_item_container" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_CONTAINER_STYLING" description="" icon_class="icon-checkbox-unchecked" level="tab_open" box_type="1"/>
			<field name="params_tab_item_container_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="item_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="item_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>
			<field name="item_text_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>

			<field name="item_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="item_pad_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_ITEM_PADDINGTOP_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_ITEM_PADDINGRIGHT_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOMT_DESC" min="0" max="80" step="1"/>

			<field name="item_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="item_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="item_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="item_border_size" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC" min="0" max="80" step="1"/>
			<field name="item_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>

			<field name="params_tab_item_title" type="separator" default="FLEXI_TMPL_ITEM_TITLE_TAB" description="" icon_class="icon-checkmark-2" level="tab_open" box_type="1"/>
			<field name="params_tab_item_title_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			<field name="item_title_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="title_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="item_title_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="title_pad_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="item_title_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="title_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>

			<field name="params_tab_labels" type="separator" default="FLEXI_TMPL_LABELS_TAB" description="" icon_class="icon-checkbox" level="tab_open" box_type="1"/>
			<field name="params_tab_labels_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="label_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="label_txt_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="label_bg_color" type="color" cssprep="less" hint="#999999" default="#999999" required="true" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="label_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="label_pad_top" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_left" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="label_pad_right" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_bottom" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="label_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="label_radius" type="number" cssprep="less" hint="3" default="3" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>


			<field name="item_layout_positions_tab" type="separator" default="FLEXI_TMPL_FIELDS_PLACEMENT_POSITIONS" description="" icon_class="icon-grid" level="tab_open" box_type="1"/>			
			<field name="item_layout_positions_tab_info" type="separator" default="FLEXI_TMPL_FIELDS_PLACEMENT_POSITIONS_INFO" description="" level="level2" class="alert alert-info"/>
			
			<field name="layout_pos_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>
			<field name="layout_pos_tab_beforedesc" type="separator" default="FLEXI_TMPL_BLOG_BEFORE_DESC" description="" level="tab_open" box_type="1"/>

			<field name="beforedesc_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="beforedesc_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>
			<field name="beforedesc_txt_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>

			<field name="beforedesc_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="beforedesc_pad_top" type="number" cssprep="less" default="inherit" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_ITEM_PADDINGTOP_DESC" min="0" max="80" step="1"/>
			<field name="beforedesc_pad_left" type="number" cssprep="less" default="inherit" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="beforedesc_pad_right" type="number" cssprep="less" default="inherit" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_ITEM_PADDINGRIGHT_DESC" min="0" max="80" step="1"/>
			<field name="beforedesc_pad_bottom" type="number" cssprep="less" default="inherit" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOMT_DESC" min="0" max="80" step="1"/>

			<field name="beforedesc_margin_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_MARGIN" description="" level="level3"/>
			<field name="beforedesc_margin_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_MARGIN_TOP" description="FLEXI_TMPL_MARGIN_TOP_DESC" min="0" max="80" step="1"/>
			<field name="beforedesc_margin_left" type="number" cssprep="less" hint="8" default="8" required="true" label="FLEXI_TMPL_MARGIN_LEFT" description="FLEXI_TMPL_MARGIN_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="beforedesc_margin_right" type="number" cssprep="less" hint="8" default="8" required="true" label="FLEXI_TMPL_MARGIN_RIGHT" description="FLEXI_TMPL_MARGIN_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="beforedesc_margin_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_MARGIN_BOTTOM" description="FLEXI_TMPL_MARGIN_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="beforedesc_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="beforedesc_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="beforedesc_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="beforedesc_border_size" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC" min="0" max="80" step="1"/>
			<field name="beforedesc_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>

			<field name="layout_pos_tab_desc" type="separator" default="FLEXI_TMPL_BLOG_DESC" description="" icon_class="icon-brush" level="tab_open" box_type="1"/>

			<field name="desc_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="desc_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>
			<field name="desc_txt_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>

			<field name="desc_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="desc_pad_top" type="number" cssprep="less" default="inherit" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_ITEM_PADDINGTOP_DESC" min="0" max="80" step="1"/>
			<field name="desc_pad_left" type="number" cssprep="less" default="inherit" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="desc_pad_right" type="number" cssprep="less" default="inherit" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_ITEM_PADDINGRIGHT_DESC" min="0" max="80" step="1"/>
			<field name="desc_pad_bottom" type="number" cssprep="less" default="inherit" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOMT_DESC" min="0" max="80" step="1"/>

			<field name="desc_margin_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_MARGIN" description="" level="level3"/>
			<field name="desc_margin_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_MARGIN_TOP" description="FLEXI_TMPL_MARGIN_TOP_DESC" min="0" max="80" step="1"/>
			<field name="desc_margin_left" type="number" cssprep="less" hint="8" default="8" required="true" label="FLEXI_TMPL_MARGIN_LEFT" description="FLEXI_TMPL_MARGIN_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="desc_margin_right" type="number" cssprep="less" hint="8" default="8" required="true" label="FLEXI_TMPL_MARGIN_RIGHT" description="FLEXI_TMPL_MARGIN_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="desc_margin_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_MARGIN_BOTTOM" description="FLEXI_TMPL_MARGIN_BOTTOM_DESC" min="0" max="80" step="1"/>
			<field name="desc_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="desc_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="desc_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="desc_border_size" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC" min="0" max="80" step="1"/>
			<field name="desc_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>

			<field name="layout_pos_tab_afterdesc" type="separator" default="FLEXI_TMPL_BLOG_AFTER_DESC" description="" icon_class="icon-brush" level="tab_open" box_type="1"/>

			<field name="afterdesc_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="afterdesc_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>
			<field name="afterdesc_txt_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>

			<field name="afterdesc_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="afterdesc_pad_top" type="number" cssprep="less" default="inherit" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_ITEM_PADDINGTOP_DESC" min="0" max="80" step="1"/>
			<field name="afterdesc_pad_left" type="number" cssprep="less" default="inherit" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="afterdesc_pad_right" type="number" cssprep="less" default="inherit" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_ITEM_PADDINGRIGHT_DESC" min="0" max="80" step="1"/>
			<field name="afterdesc_pad_bottom" type="number" cssprep="less" default="inherit" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOMT_DESC" min="0" max="80" step="1"/>

			<field name="afterdesc_margin_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_MARGIN" description="" level="level3"/>
			<field name="afterdesc_margin_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_MARGIN_TOP" description="FLEXI_TMPL_MARGIN_TOP_DESC" min="0" max="80" step="1"/>
			<field name="afterdesc_margin_left" type="number" cssprep="less" hint="8" default="8" required="true" label="FLEXI_TMPL_MARGIN_LEFT" description="FLEXI_TMPL_MARGIN_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="afterdesc_margin_right" type="number" cssprep="less" hint="8" default="8" required="true" label="FLEXI_TMPL_MARGIN_RIGHT" description="FLEXI_TMPL_MARGIN_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="afterdesc_margin_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_MARGIN_BOTTOM" description="FLEXI_TMPL_MARGIN_BOTTOM_DESC" min="0" max="80" step="1"/>
			<field name="afterdesc_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="afterdesc_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="afterdesc_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="afterdesc_border_size" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC" min="0" max="80" step="1"/>
			<field name="afterdesc_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>

			<field name="layout_pos_tab_customclass" type="separator" default="FLEXI_TMPL_POSITIONS_CSS_CLASSES" description="" icon_class="icon-palette" level="tab_open" box_type="1"/>
			<field name="layout_pos_tab_customclass_info" type="separator" cssprep="1" default="FLEXI_TMPL_POSITIONS_CSS_CLASSES_INFO" description="" level="level2" class="alert alert-info"/>

      <field name="box_class_fields_top" type="text" size="3" hint="group iteminfo" default="" label="FLEXI_TMPL_BLOG_FIELDS_TOP" description=""/>
      <field name="box_class_beforedescription" type="text" size="3" hint="group customblock beforedescription" default="" label="FLEXI_TMPL_BLOG_BEFORE_DESC" description=""/>
      <field name="box_class_description" type="text" size="3" hint="group description" default="" label="FLEXI_TMPL_BLOG_DESC" description=""/>
      <field name="box_class_afterdescription" type="text" size="3" hint="group customblock afterdescription" default="" label="FLEXI_TMPL_BLOG_AFTER_DESC" description=""/>
			<field name="box_class_fields_bottom" type="text" size="3" hint="group itemadditional" default="" label="FLEXI_TMPL_BLOG_FIELDS_BOTTOM" description=""/>

			<field name="layout_pos_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>
			<field name="params_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>

		</fieldset>
	</fields>

	<fieldgroups>
		<group readonly="true">fields_top</group>
		<group>beforedescription</group>
		<group readonly="true">description</group>
		<group>afterdescription</group>
		<group readonly="true">fields_bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<cssitem>
		<file>css/item.css</file>
	</cssitem>
	<jsitem>
	</jsitem>
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:34:"FLEXI_TMPL_BLOG_ITEM_DEFAULT_TITLE";s:11:"description";s:31:"FLEXI_TMPL_BLOG_ITEM_SHORT_DESC";s:10:"attributes";a:6:{i:0;a:1:{s:8:"readonly";s:4:"true";}i:1;a:0:{}i:2;a:1:{s:8:"readonly";s:4:"true";}i:3;a:0:{}i:4;a:1:{s:8:"readonly";s:4:"true";}i:5;a:0:{}}s:9:"positions";a:6:{i:0;s:10:"fields_top";i:1;s:17:"beforedescription";i:2;s:11:"description";i:3;s:16:"afterdescription";i:4;s:13:"fields_bottom";i:5;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:55:"components/com_flexicontent/templates/blog/css/item.css";}s:10:"less_files";a:1:{i:0;s:14:"less/item.less";}}s:9:"core-news";O:8:"stdClass":20:{s:4:"name";s:9:"core-news";s:7:"xmlpath";s:70:"/var/www/html/components/com_flexicontent/templates/core-news/item.xml";s:8:"xmlmtime";i:1614603816;s:4:"view";s:4:"item";s:7:"tmplvar";s:16:".items.core-news";s:5:"thumb";s:56:"components/com_flexicontent/templates/core-news/item.png";s:6:"params";s:9351:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>FLEXIcontent Team</author>
	<website>www.flexicontent.org</website>
	<email>info@flexicontent.org</email>
	<license>GPLv3</license>
	<version>1.0</version>
	<release>15 November 2017</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_CORE-NEWS_ITEM_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_CORE-NEWS_ITEM_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="item_head_break" type="separator" level="level_br"/>

			<!--field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2" /-->
			<field name="htmlmode" type="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
	
			<field name="item_head_break2" type="separator" level="level_br"/>

				<field name="item_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>

					<field name="item_tab_styling" type="separator" default="FLEXI_STYLING" icon_class="icon-palette" level="tab_open" box_type="1"/>

					<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>

					<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
					<field name="title_color" type="color" cssprep="less" default="inherit" label="Title text color" description="Color of title text"/>
					<field name="title_background" type="color" cssprep="less" default="inherit" label="Title background" description="Color of title background"/>
					<field name="title_font_size" type="text" cssprep="less" default="inherit" label="Title font size" description="Size of title text"/>
					<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>

					<field name="label_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_LABEL_STYLING" description="" level="level2"/>
					<field name="label_bg_color" type="color" cssprep="less" default="#999999" label="FLEXI_TMPL_LABEL_BG" description="FLEXI_TMPL_LABEL_BG_DESC"/>
					<field name="label_txt_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_LABEL_TXT_COLOR" description="FLEXI_TMPL_LABEL_TXT_COLOR_DESC"/>
					<field name="label_radius" type="number" cssprep="less" default="3" label="FLEXI_TMPL_LABEL_RADIUS" description="FLEXI_TMPL_LABEL_RADIUS_DESC" min="0" max="80" step="1"/>
			
					<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
					<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
					<field name="tab_bg_color_start" type="color" cssprep="less" default="#3093c7" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
					<field name="tab_bg_color_end" type="color" cssprep="less" default="#1c5a85" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
					<field name="tab_title_color" type="color" cssprep="less" default="#ffffff" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>
			
					<field name="item_tab_placement" type="separator" default="FLEXI_PLACEMENT" icon_class="icon-grid" level="tab_open" box_type="1"/>


					<field name="column_display_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLUMNS_DISPLAY" description="" level="level2"/>
					<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group">
						<option value="">FLEXI_USE_GLOBAL</option>
						<option value="one">FLEXI_1_COL</option>
						<option value="two">FLEXI_2_COLS</option>
					</field>
					<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group">
						<option value="">FLEXI_USE_GLOBAL</option>
						<option value="one">FLEXI_1_COL</option>
						<option value="two">FLEXI_2_COLS</option>
					</field>

					<field name="featured_row_grp" type="separator" default="Featured row" description="" level="level2"/>
					<field name="featured_row_title" type="text" default="" hint="JFeatured" filter="raw" label="Row title" description="Title will be displayed (typically) at the start of the row. This can be a language string"/>

					<field name="featured_row_grp_styles" type="separator" cssprep="1" default="Styles" description="" level="level3"/>
					<field name="featured_row_text_color" type="color" cssprep="less" default="#ffffff" label="Text Color" description="..."/>
					<field name="featured_row_bgcolor" type="color" cssprep="less" default="#B46410" label="Background color" description="..."/>
					<field name="featured_row_font_size" type="text" cssprep="less" default="12px" label="Font size" description="..." class="input-xsmall"/>

					<field name="subtitle_tabs_grp" type="separator" default="SubTitle Tabs" description="" level="level2"/>
					<field name="subtitle_tab_titles" type="textarea" default="" hint="Tab1 ,, Tab2 ,, Tab3 ,, Tab4 ,, Tab5 ,, Tab6 ,, Tab7 ,, Tab8 ,, Tab9 ,, Tab10 ,, Tab11 ,, Tab12" label="Tab titles  (language strings)" description="Tab titles seperated via ,, (double comma)"/>

					<field name="bottom_tabs_grp" type="separator" default="Bottom Tabs" description="" level="level2"/>
					<field name="bottom_tab_titles" type="textarea" default="" hint="Tab1 ,, Tab2 ,, Tab3 ,, Tab4 ,, Tab5 ,, Tab6 ,, Tab7 ,, Tab8 ,, Tab9 ,, Tab10 ,, Tab11 ,, Tab12" label="Tab titles  (language strings)" description="Tab titles seperated via ,, (double comma)"/>

				<field name="item_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>

		</fieldset>
	</fields>

	<fieldgroups>

		<group posrow="slideshow" tcolor="#3A2459" title="Slideshow top">slideshow_top</group>

		<group tcolor="darkcyan" title="After Title row 1">aftertitle1</group>
		<group tcolor="darkcyan" title="After Title row 2">aftertitle2</group>
		<group tcolor="darkcyan" title="After Title row 3">aftertitle3</group>

		<group posrow="aftertitle" tcolor="darkgreen" title="After Title Tab1">aftertitle_tab1</group>
		<group posrow="aftertitle" tcolor="darkgreen" title="After Title Tab2">aftertitle_tab2</group>
		<group posrow="aftertitle" tcolor="darkgreen" title="After Title Tab3">aftertitle_tab3</group>
		<group posrow="aftertitle" tcolor="darkgreen" title="After Title Tab4">aftertitle_tab4</group>
		<group posrow="aftertitle" tcolor="darkgreen" title="After Title Tab5">aftertitle_tab5</group>
		<group posrow="aftertitle" tcolor="darkgreen" title="After Title Tab6">aftertitle_tab6</group>
		<group posrow="aftertitle_wrap2" tcolor="darkgreen" title="After Title Tab7">aftertitle_tab7</group>
		<group posrow="aftertitle_wrap2" tcolor="darkgreen" title="After Title Tab8">aftertitle_tab8</group>
		<group posrow="aftertitle_wrap2" tcolor="darkgreen" title="After Title Tab9">aftertitle_tab9</group>
		<group posrow="aftertitle_wrap2" tcolor="darkgreen" title="After Title Tab10">aftertitle_tab10</group>
		<group posrow="aftertitle_wrap2" tcolor="darkgreen" title="After Title Tab11">aftertitle_tab11</group>
		<group posrow="aftertitle_wrap2" tcolor="darkgreen" title="After Title Tab12">aftertitle_tab12</group>

		<group posrow="img_top" tcolor="#3A2459" title="Image">image</group>
		<group posrow="img_top" tcolor="#3A2459" title="Top">top</group>
		<group posrow="description" tcolor="black" title="Description">description</group>

		<group posrow="featured_row" tcolor="#B46410" title="Featured row info">featured_row_info</group>
		<group posrow="featured_row" tcolor="#B46410" title="Featured row logo">featured_row_logo</group>

		<group posrow="bottom" tcolor="darkgreen" title="Bottom Tab1">bottom_tab1</group>
		<group posrow="bottom" tcolor="darkgreen" title="Bottom Tab2">bottom_tab2</group>
		<group posrow="bottom" tcolor="darkgreen" title="Bottom Tab3">bottom_tab3</group>
		<group posrow="bottom" tcolor="darkgreen" title="Bottom Tab4">bottom_tab4</group>
		<group posrow="bottom" tcolor="darkgreen" title="Bottom Tab5">bottom_tab5</group>
		<group posrow="bottom" tcolor="darkgreen" title="Bottom Tab6">bottom_tab6</group>
		<group posrow="bottom_wrap2" tcolor="darkgreen" title="Bottom Tab7">bottom_tab7</group>
		<group posrow="bottom_wrap2" tcolor="darkgreen" title="Bottom Tab8">bottom_tab8</group>
		<group posrow="bottom_wrap2" tcolor="darkgreen" title="Bottom Tab9">bottom_tab9</group>
		<group posrow="bottom_wrap2" tcolor="darkgreen" title="Bottom Tab10">bottom_tab10</group>
		<group posrow="bottom_wrap2" tcolor="darkgreen" title="Bottom Tab11">bottom_tab11</group>
		<group posrow="bottom_wrap2" tcolor="darkgreen" title="Bottom Tab12">bottom_tab12</group>

		<group tcolor="#6C1A10">bottom</group>

		<group tcolor="black">renderonly</group>

	</fieldgroups>

	<cssitem>
		<file>css/item.css</file>
	</cssitem>
	<jsitem>
	</jsitem>	
</form>
";s:6:"author";s:17:"FLEXIcontent Team";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:21:"info@flexicontent.org";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.0";s:7:"release";s:16:"15 November 2017";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:39:"FLEXI_TMPL_CORE-NEWS_ITEM_DEFAULT_TITLE";s:11:"description";s:36:"FLEXI_TMPL_CORE-NEWS_ITEM_SHORT_DESC";s:10:"attributes";a:35:{i:0;a:3:{s:6:"posrow";s:9:"slideshow";s:6:"tcolor";s:7:"#3A2459";s:5:"title";s:13:"Slideshow top";}i:1;a:2:{s:6:"tcolor";s:8:"darkcyan";s:5:"title";s:17:"After Title row 1";}i:2;a:2:{s:6:"tcolor";s:8:"darkcyan";s:5:"title";s:17:"After Title row 2";}i:3;a:2:{s:6:"tcolor";s:8:"darkcyan";s:5:"title";s:17:"After Title row 3";}i:4;a:3:{s:6:"posrow";s:10:"aftertitle";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:16:"After Title Tab1";}i:5;a:3:{s:6:"posrow";s:10:"aftertitle";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:16:"After Title Tab2";}i:6;a:3:{s:6:"posrow";s:10:"aftertitle";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:16:"After Title Tab3";}i:7;a:3:{s:6:"posrow";s:10:"aftertitle";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:16:"After Title Tab4";}i:8;a:3:{s:6:"posrow";s:10:"aftertitle";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:16:"After Title Tab5";}i:9;a:3:{s:6:"posrow";s:10:"aftertitle";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:16:"After Title Tab6";}i:10;a:3:{s:6:"posrow";s:16:"aftertitle_wrap2";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:16:"After Title Tab7";}i:11;a:3:{s:6:"posrow";s:16:"aftertitle_wrap2";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:16:"After Title Tab8";}i:12;a:3:{s:6:"posrow";s:16:"aftertitle_wrap2";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:16:"After Title Tab9";}i:13;a:3:{s:6:"posrow";s:16:"aftertitle_wrap2";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:17:"After Title Tab10";}i:14;a:3:{s:6:"posrow";s:16:"aftertitle_wrap2";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:17:"After Title Tab11";}i:15;a:3:{s:6:"posrow";s:16:"aftertitle_wrap2";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:17:"After Title Tab12";}i:16;a:3:{s:6:"posrow";s:7:"img_top";s:6:"tcolor";s:7:"#3A2459";s:5:"title";s:5:"Image";}i:17;a:3:{s:6:"posrow";s:7:"img_top";s:6:"tcolor";s:7:"#3A2459";s:5:"title";s:3:"Top";}i:18;a:3:{s:6:"posrow";s:11:"description";s:6:"tcolor";s:5:"black";s:5:"title";s:11:"Description";}i:19;a:3:{s:6:"posrow";s:12:"featured_row";s:6:"tcolor";s:7:"#B46410";s:5:"title";s:17:"Featured row info";}i:20;a:3:{s:6:"posrow";s:12:"featured_row";s:6:"tcolor";s:7:"#B46410";s:5:"title";s:17:"Featured row logo";}i:21;a:3:{s:6:"posrow";s:6:"bottom";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:11:"Bottom Tab1";}i:22;a:3:{s:6:"posrow";s:6:"bottom";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:11:"Bottom Tab2";}i:23;a:3:{s:6:"posrow";s:6:"bottom";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:11:"Bottom Tab3";}i:24;a:3:{s:6:"posrow";s:6:"bottom";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:11:"Bottom Tab4";}i:25;a:3:{s:6:"posrow";s:6:"bottom";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:11:"Bottom Tab5";}i:26;a:3:{s:6:"posrow";s:6:"bottom";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:11:"Bottom Tab6";}i:27;a:3:{s:6:"posrow";s:12:"bottom_wrap2";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:11:"Bottom Tab7";}i:28;a:3:{s:6:"posrow";s:12:"bottom_wrap2";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:11:"Bottom Tab8";}i:29;a:3:{s:6:"posrow";s:12:"bottom_wrap2";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:11:"Bottom Tab9";}i:30;a:3:{s:6:"posrow";s:12:"bottom_wrap2";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:12:"Bottom Tab10";}i:31;a:3:{s:6:"posrow";s:12:"bottom_wrap2";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:12:"Bottom Tab11";}i:32;a:3:{s:6:"posrow";s:12:"bottom_wrap2";s:6:"tcolor";s:9:"darkgreen";s:5:"title";s:12:"Bottom Tab12";}i:33;a:1:{s:6:"tcolor";s:7:"#6C1A10";}i:34;a:1:{s:6:"tcolor";s:5:"black";}}s:9:"positions";a:35:{i:0;s:13:"slideshow_top";i:1;s:11:"aftertitle1";i:2;s:11:"aftertitle2";i:3;s:11:"aftertitle3";i:4;s:15:"aftertitle_tab1";i:5;s:15:"aftertitle_tab2";i:6;s:15:"aftertitle_tab3";i:7;s:15:"aftertitle_tab4";i:8;s:15:"aftertitle_tab5";i:9;s:15:"aftertitle_tab6";i:10;s:15:"aftertitle_tab7";i:11;s:15:"aftertitle_tab8";i:12;s:15:"aftertitle_tab9";i:13;s:16:"aftertitle_tab10";i:14;s:16:"aftertitle_tab11";i:15;s:16:"aftertitle_tab12";i:16;s:5:"image";i:17;s:3:"top";i:18;s:11:"description";i:19;s:17:"featured_row_info";i:20;s:17:"featured_row_logo";i:21;s:11:"bottom_tab1";i:22;s:11:"bottom_tab2";i:23;s:11:"bottom_tab3";i:24;s:11:"bottom_tab4";i:25;s:11:"bottom_tab5";i:26;s:11:"bottom_tab6";i:27;s:11:"bottom_tab7";i:28;s:11:"bottom_tab8";i:29;s:11:"bottom_tab9";i:30;s:12:"bottom_tab10";i:31;s:12:"bottom_tab11";i:32;s:12:"bottom_tab12";i:33;s:6:"bottom";i:34;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:60:"components/com_flexicontent/templates/core-news/css/item.css";}s:10:"less_files";a:1:{i:0;s:14:"less/item.less";}}s:7:"default";O:8:"stdClass":20:{s:4:"name";s:7:"default";s:7:"xmlpath";s:68:"/var/www/html/components/com_flexicontent/templates/default/item.xml";s:8:"xmlmtime";i:1614603817;s:4:"view";s:4:"item";s:7:"tmplvar";s:14:".items.default";s:5:"thumb";s:54:"components/com_flexicontent/templates/default/item.png";s:6:"params";s:25220:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_DEFAULT_ITEM_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_DEFAULT_ITEM_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>

			<!--field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2" /-->

			<field name="htmlmode" type="multilist" subtype="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group group-fcinfo">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>

			<field name="params_above_tabset_spacer" type="separator" default="" level="none" class="fcspacer-16"/>

			<field name="params_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>
			<field name="params_tab_item_container" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_CONTAINER_STYLING" description="" icon_class="icon-checkbox-unchecked" level="tab_open" box_type="1"/>
			<field name="params_tab_item_container_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="item_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="item_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>
			<field name="item_text_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>

			<field name="item_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="item_pad_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_ITEM_PADDINGTOP_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_ITEM_PADDINGRIGHT_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOMT_DESC" min="0" max="80" step="1"/>

			<field name="item_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="item_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="item_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="item_border_size" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC" min="0" max="80" step="1"/>
			<field name="item_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>

			<field name="params_tab_item_title" type="separator" default="FLEXI_TMPL_ITEM_TITLE_TAB" description="" icon_class="icon-checkmark-2" level="tab_open" box_type="1"/>
			<field name="params_tab_item_title_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			<field name="item_title_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="title_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="item_title_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="title_pad_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="item_title_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="title_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>

			<field name="params_tab_labels" type="separator" default="FLEXI_TMPL_LABELS_TAB" description="" icon_class="icon-checkbox" level="tab_open" box_type="1"/>
			<field name="params_tab_labels_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="label_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="label_txt_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="label_bg_color" type="color" cssprep="less" hint="#999999" default="#999999" required="true" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="label_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="label_pad_top" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_left" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="label_pad_right" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_bottom" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="label_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="label_radius" type="number" cssprep="less" hint="3" default="3" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>


			<field name="item_layout_positions_tab" type="separator" default="FLEXI_TMPL_FIELDS_PLACEMENT_POSITIONS" description="" icon_class="icon-grid" level="tab_open" box_type="1"/>			
			<field name="item_layout_positions_tab_info" type="separator" default="FLEXI_TMPL_FIELDS_PLACEMENT_POSITIONS_INFO" description="" level="level2" class="alert alert-info"/>
			
			<field name="layout_pos_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>
			<field name="layout_pos_tab_tabbed_positions" type="separator" default="FLEXI_TMPL_TABBED_POS_TAB" description="" icon_class="" level="tab_open" box_type="1"/>

			<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
			<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
			<field name="tab_bg_color_start" type="color" cssprep="less" hint="#3093c7" default="#3093c7" required="true" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
			<field name="tab_bg_color_end" type="color" cssprep="less" hint="#1c5a85" default="#1c5a85" required="true" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
			<field name="tab_title_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>

			<field name="tab_content_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_CONTENT_BOX" description="" level="level3"/>
			<field name="tab_content_bg_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="tab_content_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC"/>
			<field name="tab_content_border_size_top" type="number" cssprep="less" hint="1" default="1" required="true" label="FLEXI_TMPL_TAB_CONTENT_TOP_SIZE" description="FLEXI_TMPL_TAB_CONTENT_TOP_SIZE_DESC"/>
			<field name="tab_content_border_color_top" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_TAB_CONTENT_TOP_COLOR" description="FLEXI_TMPL_TAB_CONTENT_TOP_COLOR_DESC"/>

			<field name="tabs_labels_grp" type="separator" default="FLEXI_TMPL_TAB_TITLES" description="" level="level2"/>

			<field name="subtitle_tabs_grp" type="separator" default="Subtitle Tabset" description="" level="level3"/>
			<field name="subtitle_tab1_label" type="text" default="" label="Tab 1" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab2_label" type="text" default="" label="Tab 2" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab3_label" type="text" default="" label="Tab 3" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab4_label" type="text" default="" label="Tab 4" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab5_label" type="text" default="" label="Tab 5" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab6_label" type="text" default="" label="Tab 6" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab7_label" type="text" default="" label="Tab 7" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab8_label" type="text" default="" label="Tab 8" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab9_label" type="text" default="" label="Tab 9" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab10_label" type="text" default="" label="Tab 10" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab11_label" type="text" default="" label="Tab 11" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab12_label" type="text" default="" label="Tab 12" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>

			<field name="bottom_tabs_grp" type="separator" default="Bottom Tabset" description="" level="level3"/>
			<field name="bottom_tab1_label" type="text" default="" label="Tab 1" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab2_label" type="text" default="" label="Tab 2" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab3_label" type="text" default="" label="Tab 3" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab4_label" type="text" default="" label="Tab 4" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab5_label" type="text" default="" label="Tab 5" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab6_label" type="text" default="" label="Tab 6" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab7_label" type="text" default="" label="Tab 7" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab8_label" type="text" default="" label="Tab 8" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab9_label" type="text" default="" label="Tab 9" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab10_label" type="text" default="" label="Tab 10" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab11_label" type="text" default="" label="Tab 11" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab12_label" type="text" default="" label="Tab 12" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>

			<field name="layout_pos_tab_top_bottom_positions" type="separator" default="FLEXI_TMPL_TOP_BOTTOM_POS_TAB" description="" icon_class="" level="tab_open" box_type="1"/>

			<field name="column_display_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLUMNS_DISPLAY" description="" level="level2"/>
			<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>

			<field name="column_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="column_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="column_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="column_padding_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="column_pad_top" type="number" cssprep="less" hint="10" default="10" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="column_pad_left" type="number" cssprep="less" hint="10" default="10" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="column_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="column_pad_bottom" type="number" cssprep="less" hint="10" default="10" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="column_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="column_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="column_border_size" type="number" cssprep="less" hint="1" default="1" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC"/>
			<field name="column_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="column_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>

			<field name="layout_pos_tab_customclass" type="separator" default="FLEXI_TMPL_POSITIONS_CSS_CLASSES" description="" icon_class="icon-palette" level="tab_open" box_type="1"/>
			<field name="layout_pos_tab_customclass_info" type="separator" cssprep="1" default="FLEXI_TMPL_POSITIONS_CSS_CLASSES_INFO" description="" level="level2" class="alert alert-info"/>

			<field name="custom_class_grp_subtitle_containers" type="separator" cssprep="1" default="Subtitle" description="" level="level3"/>
      <field name="box_class_subtitle1" type="text" size="3" hint="flexi group lineinfo subtitle1" default="" label="Subtitle 1" description="FLEXI_SUBTITLE1_CLASS_DESC"/>
      <field name="box_class_subtitle2" type="text" size="3" hint="flexi group lineinfo subtitle2" default="" label="Subtitle 2" description="FLEXI_SUBTITLE2_CLASS_DESC"/>
      <field name="box_class_subtitle3" type="text" size="3" hint="flexi group lineinfo subtitle3" default="" label="Subtitle 3" description="FLEXI_SUBTITLE2_CLASS_DESC"/>

			<field name="custom_class_grp_subtitle_tabs" type="separator" cssprep="1" default="Subtitle Tabset" description="" level="level3"/>
			<field name="box_class_subtitle_tab1" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 1" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab2" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 2" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab3" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 3" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab4" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 4" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab5" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 5" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab6" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 6" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab7" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 7" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab8" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 8" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab9" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 9" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab10" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 10" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab11" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 11" description="FLEXI__TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab12" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 12" description="FLEXI_TAB_CLASS_DESC"/>

			<field name="custom_class_grp_content_containers" type="separator" cssprep="1" default="Main Content" description="" level="level3"/>
			<field name="box_class_image" type="text" size="3" hint="flexi group image" default="" label="FLEXI_IMAGE" description="FLEXI_IMAGE_CLASS_DESC"/>
			<field name="box_class_top" type="text" size="3" hint="flexi group infoblock" default="" label="FLEXI_TOP" description="FLEXI_TOP_CLASS_DESC"/>
			<field name="box_class_descr" type="text" size="3" hint="flexi group description" default="" label="FLEXI_DESCRIPTION" description="FLEXI_DESCRIPTION_CLASS_DESC"/>

			<field name="custom_class_grp_bottom_tabs" type="separator" cssprep="1" default="Bottom Tabset" description="" level="level3"/>
			<field name="box_class_bottom_tab1" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 1" description="FLEXI_TAB1_CLASS_DESC"/>
			<field name="box_class_bottom_tab2" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 2" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab3" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 3" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab4" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 4" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab5" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 5" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab6" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 6" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab7" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 7" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab8" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 8" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab9" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 9" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab10" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 10" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab11" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 11" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab12" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 12" description="FLEXI_TAB_CLASS_DESC"/>

			<field name="custom_class_grp_bottom_container" type="separator" cssprep="1" default="Bottom" description="" level="level3"/>
			<field name="box_class_bottom" type="text" size="3" hint="flexi group infoblock" default="" label="FLEXI_BOTTOM" description="FLEXI_BOTTOMFIELD_CLASS_DESC"/>

			<field name="layout_pos_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>
			<field name="params_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>

		</fieldset>
	</fields>

	<fieldgroups>
		<group>subtitle1</group>
		<group>subtitle2</group>
		<group>subtitle3</group>
		<group posrow="subtitle">subtitle_tab1</group>
		<group posrow="subtitle">subtitle_tab2</group>
		<group posrow="subtitle">subtitle_tab3</group>
		<group posrow="subtitle">subtitle_tab4</group>
		<group posrow="subtitle">subtitle_tab5</group>
		<group posrow="subtitle">subtitle_tab6</group>
		<group posrow="subtitle_wrap2">subtitle_tab7</group>
		<group posrow="subtitle_wrap2">subtitle_tab8</group>
		<group posrow="subtitle_wrap2">subtitle_tab9</group>
		<group posrow="subtitle_wrap2">subtitle_tab10</group>
		<group posrow="subtitle_wrap2">subtitle_tab11</group>
		<group posrow="subtitle_wrap2">subtitle_tab12</group>
		<group posrow="img_top">image</group>
		<group posrow="img_top">top</group>
		<group>description</group>
		<group posrow="bottom">bottom_tab1</group>
		<group posrow="bottom">bottom_tab2</group>
		<group posrow="bottom">bottom_tab3</group>
		<group posrow="bottom">bottom_tab4</group>
		<group posrow="bottom">bottom_tab5</group>
		<group posrow="bottom">bottom_tab6</group>
		<group posrow="bottom_wrap2">bottom_tab7</group>
		<group posrow="bottom_wrap2">bottom_tab8</group>
		<group posrow="bottom_wrap2">bottom_tab9</group>
		<group posrow="bottom_wrap2">bottom_tab10</group>
		<group posrow="bottom_wrap2">bottom_tab11</group>
		<group posrow="bottom_wrap2">bottom_tab12</group>
		<group>bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<cssitem>
		<file>css/item.css</file>
	</cssitem>
	<jsitem>
	</jsitem>
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:37:"FLEXI_TMPL_DEFAULT_ITEM_DEFAULT_TITLE";s:11:"description";s:34:"FLEXI_TMPL_DEFAULT_ITEM_SHORT_DESC";s:10:"attributes";a:32:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:1:{s:6:"posrow";s:8:"subtitle";}i:4;a:1:{s:6:"posrow";s:8:"subtitle";}i:5;a:1:{s:6:"posrow";s:8:"subtitle";}i:6;a:1:{s:6:"posrow";s:8:"subtitle";}i:7;a:1:{s:6:"posrow";s:8:"subtitle";}i:8;a:1:{s:6:"posrow";s:8:"subtitle";}i:9;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:10;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:11;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:12;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:13;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:14;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:15;a:1:{s:6:"posrow";s:7:"img_top";}i:16;a:1:{s:6:"posrow";s:7:"img_top";}i:17;a:0:{}i:18;a:1:{s:6:"posrow";s:6:"bottom";}i:19;a:1:{s:6:"posrow";s:6:"bottom";}i:20;a:1:{s:6:"posrow";s:6:"bottom";}i:21;a:1:{s:6:"posrow";s:6:"bottom";}i:22;a:1:{s:6:"posrow";s:6:"bottom";}i:23;a:1:{s:6:"posrow";s:6:"bottom";}i:24;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:25;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:26;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:27;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:28;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:29;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:30;a:0:{}i:31;a:0:{}}s:9:"positions";a:32:{i:0;s:9:"subtitle1";i:1;s:9:"subtitle2";i:2;s:9:"subtitle3";i:3;s:13:"subtitle_tab1";i:4;s:13:"subtitle_tab2";i:5;s:13:"subtitle_tab3";i:6;s:13:"subtitle_tab4";i:7;s:13:"subtitle_tab5";i:8;s:13:"subtitle_tab6";i:9;s:13:"subtitle_tab7";i:10;s:13:"subtitle_tab8";i:11;s:13:"subtitle_tab9";i:12;s:14:"subtitle_tab10";i:13;s:14:"subtitle_tab11";i:14;s:14:"subtitle_tab12";i:15;s:5:"image";i:16;s:3:"top";i:17;s:11:"description";i:18;s:11:"bottom_tab1";i:19;s:11:"bottom_tab2";i:20;s:11:"bottom_tab3";i:21;s:11:"bottom_tab4";i:22;s:11:"bottom_tab5";i:23;s:11:"bottom_tab6";i:24;s:11:"bottom_tab7";i:25;s:11:"bottom_tab8";i:26;s:11:"bottom_tab9";i:27;s:12:"bottom_tab10";i:28;s:12:"bottom_tab11";i:29;s:12:"bottom_tab12";i:30;s:6:"bottom";i:31;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:58:"components/com_flexicontent/templates/default/css/item.css";}s:10:"less_files";a:1:{i:0;s:14:"less/item.less";}}s:3:"faq";O:8:"stdClass":20:{s:4:"name";s:3:"faq";s:7:"xmlpath";s:64:"/var/www/html/components/com_flexicontent/templates/faq/item.xml";s:8:"xmlmtime";i:1614603819;s:4:"view";s:4:"item";s:7:"tmplvar";s:10:".items.faq";s:5:"thumb";s:50:"components/com_flexicontent/templates/faq/item.png";s:6:"params";s:25212:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_FAQ_ITEM_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_FAQ_ITEM_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>

			<!--field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2" /-->

			<field name="htmlmode" type="multilist" subtype="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group group-fcinfo">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>

			<field name="params_above_tabset_spacer" type="separator" default="" level="none" class="fcspacer-16"/>

			<field name="params_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>
			<field name="params_tab_item_container" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_CONTAINER_STYLING" description="" icon_class="icon-checkbox-unchecked" level="tab_open" box_type="1"/>
			<field name="params_tab_item_container_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="item_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="item_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>
			<field name="item_text_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>

			<field name="item_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="item_pad_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_ITEM_PADDINGTOP_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_ITEM_PADDINGRIGHT_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOMT_DESC" min="0" max="80" step="1"/>

			<field name="item_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="item_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="item_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="item_border_size" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC" min="0" max="80" step="1"/>
			<field name="item_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>

			<field name="params_tab_item_title" type="separator" default="FLEXI_TMPL_ITEM_TITLE_TAB" description="" icon_class="icon-checkmark-2" level="tab_open" box_type="1"/>
			<field name="params_tab_item_title_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			<field name="item_title_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="title_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="item_title_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="title_pad_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="item_title_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="title_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>

			<field name="params_tab_labels" type="separator" default="FLEXI_TMPL_LABELS_TAB" description="" icon_class="icon-checkbox" level="tab_open" box_type="1"/>
			<field name="params_tab_labels_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="label_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="label_txt_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="label_bg_color" type="color" cssprep="less" hint="#999999" default="#999999" required="true" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="label_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="label_pad_top" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_left" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="label_pad_right" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_bottom" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="label_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="label_radius" type="number" cssprep="less" hint="3" default="3" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>


			<field name="item_layout_positions_tab" type="separator" default="FLEXI_TMPL_FIELDS_PLACEMENT_POSITIONS" description="" icon_class="icon-grid" level="tab_open" box_type="1"/>			
			<field name="item_layout_positions_tab_info" type="separator" default="FLEXI_TMPL_FIELDS_PLACEMENT_POSITIONS_INFO" description="" level="level2" class="alert alert-info"/>
			
			<field name="layout_pos_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>
			<field name="layout_pos_tab_tabbed_positions" type="separator" default="FLEXI_TMPL_TABBED_POS_TAB" description="" icon_class="" level="tab_open" box_type="1"/>

			<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
			<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
			<field name="tab_bg_color_start" type="color" cssprep="less" hint="#3093c7" default="#3093c7" required="true" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
			<field name="tab_bg_color_end" type="color" cssprep="less" hint="#1c5a85" default="#1c5a85" required="true" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
			<field name="tab_title_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>

			<field name="tab_content_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_CONTENT_BOX" description="" level="level3"/>
			<field name="tab_content_bg_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="tab_content_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC"/>
			<field name="tab_content_border_size_top" type="number" cssprep="less" hint="1" default="1" required="true" label="FLEXI_TMPL_TAB_CONTENT_TOP_SIZE" description="FLEXI_TMPL_TAB_CONTENT_TOP_SIZE_DESC"/>
			<field name="tab_content_border_color_top" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_TAB_CONTENT_TOP_COLOR" description="FLEXI_TMPL_TAB_CONTENT_TOP_COLOR_DESC"/>

			<field name="tabs_labels_grp" type="separator" default="FLEXI_TMPL_TAB_TITLES" description="" level="level2"/>

			<field name="subtitle_tabs_grp" type="separator" default="Subtitle Tabset" description="" level="level3"/>
			<field name="subtitle_tab1_label" type="text" default="" label="Tab 1" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab2_label" type="text" default="" label="Tab 2" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab3_label" type="text" default="" label="Tab 3" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab4_label" type="text" default="" label="Tab 4" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab5_label" type="text" default="" label="Tab 5" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab6_label" type="text" default="" label="Tab 6" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab7_label" type="text" default="" label="Tab 7" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab8_label" type="text" default="" label="Tab 8" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab9_label" type="text" default="" label="Tab 9" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab10_label" type="text" default="" label="Tab 10" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab11_label" type="text" default="" label="Tab 11" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab12_label" type="text" default="" label="Tab 12" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>

			<field name="bottom_tabs_grp" type="separator" default="Bottom Tabset" description="" level="level3"/>
			<field name="bottom_tab1_label" type="text" default="" label="Tab 1" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab2_label" type="text" default="" label="Tab 2" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab3_label" type="text" default="" label="Tab 3" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab4_label" type="text" default="" label="Tab 4" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab5_label" type="text" default="" label="Tab 5" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab6_label" type="text" default="" label="Tab 6" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab7_label" type="text" default="" label="Tab 7" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab8_label" type="text" default="" label="Tab 8" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab9_label" type="text" default="" label="Tab 9" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab10_label" type="text" default="" label="Tab 10" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab11_label" type="text" default="" label="Tab 11" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab12_label" type="text" default="" label="Tab 12" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>

			<field name="layout_pos_tab_top_bottom_positions" type="separator" default="FLEXI_TMPL_TOP_BOTTOM_POS_TAB" description="" icon_class="" level="tab_open" box_type="1"/>

			<field name="column_display_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLUMNS_DISPLAY" description="" level="level2"/>
			<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>

			<field name="column_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="column_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="column_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="column_padding_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="column_pad_top" type="number" cssprep="less" hint="10" default="10" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="column_pad_left" type="number" cssprep="less" hint="10" default="10" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="column_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="column_pad_bottom" type="number" cssprep="less" hint="10" default="10" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="column_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="column_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="column_border_size" type="number" cssprep="less" hint="1" default="1" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC"/>
			<field name="column_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="column_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>

			<field name="layout_pos_tab_customclass" type="separator" default="FLEXI_TMPL_POSITIONS_CSS_CLASSES" description="" icon_class="icon-palette" level="tab_open" box_type="1"/>
			<field name="layout_pos_tab_customclass_info" type="separator" cssprep="1" default="FLEXI_TMPL_POSITIONS_CSS_CLASSES_INFO" description="" level="level2" class="alert alert-info"/>

			<field name="custom_class_grp_subtitle_containers" type="separator" cssprep="1" default="Subtitle" description="" level="level3"/>
      <field name="box_class_subtitle1" type="text" size="3" hint="flexi group lineinfo subtitle1" default="" label="Subtitle 1" description="FLEXI_SUBTITLE1_CLASS_DESC"/>
      <field name="box_class_subtitle2" type="text" size="3" hint="flexi group lineinfo subtitle2" default="" label="Subtitle 2" description="FLEXI_SUBTITLE2_CLASS_DESC"/>
      <field name="box_class_subtitle3" type="text" size="3" hint="flexi group lineinfo subtitle3" default="" label="Subtitle 3" description="FLEXI_SUBTITLE2_CLASS_DESC"/>

			<field name="custom_class_grp_subtitle_tabs" type="separator" cssprep="1" default="Subtitle Tabset" description="" level="level3"/>
			<field name="box_class_subtitle_tab1" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 1" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab2" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 2" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab3" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 3" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab4" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 4" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab5" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 5" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab6" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 6" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab7" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 7" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab8" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 8" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab9" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 9" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab10" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 10" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab11" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 11" description="FLEXI__TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab12" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 12" description="FLEXI_TAB_CLASS_DESC"/>

			<field name="custom_class_grp_content_containers" type="separator" cssprep="1" default="Main Content" description="" level="level3"/>
			<field name="box_class_image" type="text" size="3" hint="flexi group image" default="" label="FLEXI_IMAGE" description="FLEXI_IMAGE_CLASS_DESC"/>
			<field name="box_class_top" type="text" size="3" hint="flexi group infoblock" default="" label="FLEXI_TOP" description="FLEXI_TOP_CLASS_DESC"/>
			<field name="box_class_descr" type="text" size="3" hint="flexi group description" default="" label="FLEXI_DESCRIPTION" description="FLEXI_DESCRIPTION_CLASS_DESC"/>

			<field name="custom_class_grp_bottom_tabs" type="separator" cssprep="1" default="Bottom Tabset" description="" level="level3"/>
			<field name="box_class_bottom_tab1" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 1" description="FLEXI_TAB1_CLASS_DESC"/>
			<field name="box_class_bottom_tab2" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 2" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab3" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 3" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab4" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 4" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab5" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 5" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab6" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 6" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab7" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 7" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab8" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 8" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab9" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 9" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab10" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 10" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab11" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 11" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab12" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 12" description="FLEXI_TAB_CLASS_DESC"/>

			<field name="custom_class_grp_bottom_container" type="separator" cssprep="1" default="Bottom" description="" level="level3"/>
			<field name="box_class_bottom" type="text" size="3" hint="flexi group infoblock" default="" label="FLEXI_BOTTOM" description="FLEXI_BOTTOMFIELD_CLASS_DESC"/>

			<field name="layout_pos_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>
			<field name="params_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>

		</fieldset>
	</fields>

	<fieldgroups>
		<group>subtitle1</group>
		<group>subtitle2</group>
		<group>subtitle3</group>
		<group posrow="subtitle">subtitle_tab1</group>
		<group posrow="subtitle">subtitle_tab2</group>
		<group posrow="subtitle">subtitle_tab3</group>
		<group posrow="subtitle">subtitle_tab4</group>
		<group posrow="subtitle">subtitle_tab5</group>
		<group posrow="subtitle">subtitle_tab6</group>
		<group posrow="subtitle_wrap2">subtitle_tab7</group>
		<group posrow="subtitle_wrap2">subtitle_tab8</group>
		<group posrow="subtitle_wrap2">subtitle_tab9</group>
		<group posrow="subtitle_wrap2">subtitle_tab10</group>
		<group posrow="subtitle_wrap2">subtitle_tab11</group>
		<group posrow="subtitle_wrap2">subtitle_tab12</group>
		<group posrow="img_top">image</group>
		<group posrow="img_top">top</group>
		<group>description</group>
		<group posrow="bottom">bottom_tab1</group>
		<group posrow="bottom">bottom_tab2</group>
		<group posrow="bottom">bottom_tab3</group>
		<group posrow="bottom">bottom_tab4</group>
		<group posrow="bottom">bottom_tab5</group>
		<group posrow="bottom">bottom_tab6</group>
		<group posrow="bottom_wrap2">bottom_tab7</group>
		<group posrow="bottom_wrap2">bottom_tab8</group>
		<group posrow="bottom_wrap2">bottom_tab9</group>
		<group posrow="bottom_wrap2">bottom_tab10</group>
		<group posrow="bottom_wrap2">bottom_tab11</group>
		<group posrow="bottom_wrap2">bottom_tab12</group>
		<group>bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<cssitem>
		<file>css/item.css</file>
	</cssitem>
	<jsitem>
	</jsitem>
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:33:"FLEXI_TMPL_FAQ_ITEM_DEFAULT_TITLE";s:11:"description";s:30:"FLEXI_TMPL_FAQ_ITEM_SHORT_DESC";s:10:"attributes";a:32:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:1:{s:6:"posrow";s:8:"subtitle";}i:4;a:1:{s:6:"posrow";s:8:"subtitle";}i:5;a:1:{s:6:"posrow";s:8:"subtitle";}i:6;a:1:{s:6:"posrow";s:8:"subtitle";}i:7;a:1:{s:6:"posrow";s:8:"subtitle";}i:8;a:1:{s:6:"posrow";s:8:"subtitle";}i:9;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:10;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:11;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:12;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:13;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:14;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:15;a:1:{s:6:"posrow";s:7:"img_top";}i:16;a:1:{s:6:"posrow";s:7:"img_top";}i:17;a:0:{}i:18;a:1:{s:6:"posrow";s:6:"bottom";}i:19;a:1:{s:6:"posrow";s:6:"bottom";}i:20;a:1:{s:6:"posrow";s:6:"bottom";}i:21;a:1:{s:6:"posrow";s:6:"bottom";}i:22;a:1:{s:6:"posrow";s:6:"bottom";}i:23;a:1:{s:6:"posrow";s:6:"bottom";}i:24;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:25;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:26;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:27;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:28;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:29;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:30;a:0:{}i:31;a:0:{}}s:9:"positions";a:32:{i:0;s:9:"subtitle1";i:1;s:9:"subtitle2";i:2;s:9:"subtitle3";i:3;s:13:"subtitle_tab1";i:4;s:13:"subtitle_tab2";i:5;s:13:"subtitle_tab3";i:6;s:13:"subtitle_tab4";i:7;s:13:"subtitle_tab5";i:8;s:13:"subtitle_tab6";i:9;s:13:"subtitle_tab7";i:10;s:13:"subtitle_tab8";i:11;s:13:"subtitle_tab9";i:12;s:14:"subtitle_tab10";i:13;s:14:"subtitle_tab11";i:14;s:14:"subtitle_tab12";i:15;s:5:"image";i:16;s:3:"top";i:17;s:11:"description";i:18;s:11:"bottom_tab1";i:19;s:11:"bottom_tab2";i:20;s:11:"bottom_tab3";i:21;s:11:"bottom_tab4";i:22;s:11:"bottom_tab5";i:23;s:11:"bottom_tab6";i:24;s:11:"bottom_tab7";i:25;s:11:"bottom_tab8";i:26;s:11:"bottom_tab9";i:27;s:12:"bottom_tab10";i:28;s:12:"bottom_tab11";i:29;s:12:"bottom_tab12";i:30;s:6:"bottom";i:31;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:54:"components/com_flexicontent/templates/faq/css/item.css";}s:10:"less_files";a:1:{i:0;s:14:"less/item.less";}}s:12:"items-tabbed";O:8:"stdClass":20:{s:4:"name";s:12:"items-tabbed";s:7:"xmlpath";s:73:"/var/www/html/components/com_flexicontent/templates/items-tabbed/item.xml";s:8:"xmlmtime";i:1614603820;s:4:"view";s:4:"item";s:7:"tmplvar";s:19:".items.items-tabbed";s:5:"thumb";s:59:"components/com_flexicontent/templates/items-tabbed/item.png";s:6:"params";s:25228:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_ITEMSTABBED_ITEM_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_ITEMSTABBED_ITEM_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>

			<!--field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2" /-->

			<field name="htmlmode" type="multilist" subtype="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group group-fcinfo">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>

			<field name="params_above_tabset_spacer" type="separator" default="" level="none" class="fcspacer-16"/>

			<field name="params_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>
			<field name="params_tab_item_container" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_CONTAINER_STYLING" description="" icon_class="icon-checkbox-unchecked" level="tab_open" box_type="1"/>
			<field name="params_tab_item_container_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="item_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="item_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>
			<field name="item_text_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>

			<field name="item_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="item_pad_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_ITEM_PADDINGTOP_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_ITEM_PADDINGRIGHT_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOMT_DESC" min="0" max="80" step="1"/>

			<field name="item_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="item_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="item_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="item_border_size" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC" min="0" max="80" step="1"/>
			<field name="item_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>

			<field name="params_tab_item_title" type="separator" default="FLEXI_TMPL_ITEM_TITLE_TAB" description="" icon_class="icon-checkmark-2" level="tab_open" box_type="1"/>
			<field name="params_tab_item_title_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			<field name="item_title_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="title_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="item_title_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="title_pad_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="item_title_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="title_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>

			<field name="params_tab_labels" type="separator" default="FLEXI_TMPL_LABELS_TAB" description="" icon_class="icon-checkbox" level="tab_open" box_type="1"/>
			<field name="params_tab_labels_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="label_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="label_txt_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="label_bg_color" type="color" cssprep="less" hint="#999999" default="#999999" required="true" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="label_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="label_pad_top" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_left" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="label_pad_right" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_bottom" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="label_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="label_radius" type="number" cssprep="less" hint="3" default="3" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>


			<field name="item_layout_positions_tab" type="separator" default="FLEXI_TMPL_FIELDS_PLACEMENT_POSITIONS" description="" icon_class="icon-grid" level="tab_open" box_type="1"/>			
			<field name="item_layout_positions_tab_info" type="separator" default="FLEXI_TMPL_FIELDS_PLACEMENT_POSITIONS_INFO" description="" level="level2" class="alert alert-info"/>
			
			<field name="layout_pos_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>
			<field name="layout_pos_tab_tabbed_positions" type="separator" default="FLEXI_TMPL_TABBED_POS_TAB" description="" icon_class="" level="tab_open" box_type="1"/>

			<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
			<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
			<field name="tab_bg_color_start" type="color" cssprep="less" hint="#3093c7" default="#3093c7" required="true" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
			<field name="tab_bg_color_end" type="color" cssprep="less" hint="#1c5a85" default="#1c5a85" required="true" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
			<field name="tab_title_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>

			<field name="tab_content_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_CONTENT_BOX" description="" level="level3"/>
			<field name="tab_content_bg_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="tab_content_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC"/>
			<field name="tab_content_border_size_top" type="number" cssprep="less" hint="1" default="1" required="true" label="FLEXI_TMPL_TAB_CONTENT_TOP_SIZE" description="FLEXI_TMPL_TAB_CONTENT_TOP_SIZE_DESC"/>
			<field name="tab_content_border_color_top" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_TAB_CONTENT_TOP_COLOR" description="FLEXI_TMPL_TAB_CONTENT_TOP_COLOR_DESC"/>

			<field name="tabs_labels_grp" type="separator" default="FLEXI_TMPL_TAB_TITLES" description="" level="level2"/>

			<field name="subtitle_tabs_grp" type="separator" default="Subtitle Tabset" description="" level="level3"/>
			<field name="subtitle_tab1_label" type="text" default="" label="Tab 1" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab2_label" type="text" default="" label="Tab 2" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab3_label" type="text" default="" label="Tab 3" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab4_label" type="text" default="" label="Tab 4" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab5_label" type="text" default="" label="Tab 5" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab6_label" type="text" default="" label="Tab 6" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab7_label" type="text" default="" label="Tab 7" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab8_label" type="text" default="" label="Tab 8" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab9_label" type="text" default="" label="Tab 9" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab10_label" type="text" default="" label="Tab 10" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab11_label" type="text" default="" label="Tab 11" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab12_label" type="text" default="" label="Tab 12" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>

			<field name="bottom_tabs_grp" type="separator" default="Bottom Tabset" description="" level="level3"/>
			<field name="bottom_tab1_label" type="text" default="" label="Tab 1" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab2_label" type="text" default="" label="Tab 2" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab3_label" type="text" default="" label="Tab 3" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab4_label" type="text" default="" label="Tab 4" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab5_label" type="text" default="" label="Tab 5" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab6_label" type="text" default="" label="Tab 6" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab7_label" type="text" default="" label="Tab 7" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab8_label" type="text" default="" label="Tab 8" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab9_label" type="text" default="" label="Tab 9" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab10_label" type="text" default="" label="Tab 10" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab11_label" type="text" default="" label="Tab 11" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab12_label" type="text" default="" label="Tab 12" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>

			<field name="layout_pos_tab_top_bottom_positions" type="separator" default="FLEXI_TMPL_TOP_BOTTOM_POS_TAB" description="" icon_class="" level="tab_open" box_type="1"/>

			<field name="column_display_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLUMNS_DISPLAY" description="" level="level2"/>
			<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>

			<field name="column_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="column_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="column_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="column_padding_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="column_pad_top" type="number" cssprep="less" hint="10" default="10" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="column_pad_left" type="number" cssprep="less" hint="10" default="10" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="column_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="column_pad_bottom" type="number" cssprep="less" hint="10" default="10" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="column_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="column_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="column_border_size" type="number" cssprep="less" hint="1" default="1" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC"/>
			<field name="column_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="column_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>

			<field name="layout_pos_tab_customclass" type="separator" default="FLEXI_TMPL_POSITIONS_CSS_CLASSES" description="" icon_class="icon-palette" level="tab_open" box_type="1"/>
			<field name="layout_pos_tab_customclass_info" type="separator" cssprep="1" default="FLEXI_TMPL_POSITIONS_CSS_CLASSES_INFO" description="" level="level2" class="alert alert-info"/>

			<field name="custom_class_grp_subtitle_containers" type="separator" cssprep="1" default="Subtitle" description="" level="level3"/>
      <field name="box_class_subtitle1" type="text" size="3" hint="flexi group lineinfo subtitle1" default="" label="Subtitle 1" description="FLEXI_SUBTITLE1_CLASS_DESC"/>
      <field name="box_class_subtitle2" type="text" size="3" hint="flexi group lineinfo subtitle2" default="" label="Subtitle 2" description="FLEXI_SUBTITLE2_CLASS_DESC"/>
      <field name="box_class_subtitle3" type="text" size="3" hint="flexi group lineinfo subtitle3" default="" label="Subtitle 3" description="FLEXI_SUBTITLE2_CLASS_DESC"/>

			<field name="custom_class_grp_subtitle_tabs" type="separator" cssprep="1" default="Subtitle Tabset" description="" level="level3"/>
			<field name="box_class_subtitle_tab1" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 1" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab2" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 2" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab3" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 3" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab4" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 4" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab5" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 5" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab6" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 6" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab7" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 7" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab8" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 8" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab9" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 9" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab10" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 10" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab11" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 11" description="FLEXI__TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab12" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 12" description="FLEXI_TAB_CLASS_DESC"/>

			<field name="custom_class_grp_content_containers" type="separator" cssprep="1" default="Main Content" description="" level="level3"/>
			<field name="box_class_image" type="text" size="3" hint="flexi group image" default="" label="FLEXI_IMAGE" description="FLEXI_IMAGE_CLASS_DESC"/>
			<field name="box_class_top" type="text" size="3" hint="flexi group infoblock" default="" label="FLEXI_TOP" description="FLEXI_TOP_CLASS_DESC"/>
			<field name="box_class_descr" type="text" size="3" hint="flexi group description" default="" label="FLEXI_DESCRIPTION" description="FLEXI_DESCRIPTION_CLASS_DESC"/>

			<field name="custom_class_grp_bottom_tabs" type="separator" cssprep="1" default="Bottom Tabset" description="" level="level3"/>
			<field name="box_class_bottom_tab1" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 1" description="FLEXI_TAB1_CLASS_DESC"/>
			<field name="box_class_bottom_tab2" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 2" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab3" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 3" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab4" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 4" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab5" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 5" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab6" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 6" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab7" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 7" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab8" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 8" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab9" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 9" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab10" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 10" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab11" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 11" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab12" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 12" description="FLEXI_TAB_CLASS_DESC"/>

			<field name="custom_class_grp_bottom_container" type="separator" cssprep="1" default="Bottom" description="" level="level3"/>
			<field name="box_class_bottom" type="text" size="3" hint="flexi group infoblock" default="" label="FLEXI_BOTTOM" description="FLEXI_BOTTOMFIELD_CLASS_DESC"/>

			<field name="layout_pos_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>
			<field name="params_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>

		</fieldset>
	</fields>

	<fieldgroups>
		<group>subtitle1</group>
		<group>subtitle2</group>
		<group>subtitle3</group>
		<group posrow="subtitle">subtitle_tab1</group>
		<group posrow="subtitle">subtitle_tab2</group>
		<group posrow="subtitle">subtitle_tab3</group>
		<group posrow="subtitle">subtitle_tab4</group>
		<group posrow="subtitle">subtitle_tab5</group>
		<group posrow="subtitle">subtitle_tab6</group>
		<group posrow="subtitle_wrap2">subtitle_tab7</group>
		<group posrow="subtitle_wrap2">subtitle_tab8</group>
		<group posrow="subtitle_wrap2">subtitle_tab9</group>
		<group posrow="subtitle_wrap2">subtitle_tab10</group>
		<group posrow="subtitle_wrap2">subtitle_tab11</group>
		<group posrow="subtitle_wrap2">subtitle_tab12</group>
		<group posrow="img_top">image</group>
		<group posrow="img_top">top</group>
		<group>description</group>
		<group posrow="bottom">bottom_tab1</group>
		<group posrow="bottom">bottom_tab2</group>
		<group posrow="bottom">bottom_tab3</group>
		<group posrow="bottom">bottom_tab4</group>
		<group posrow="bottom">bottom_tab5</group>
		<group posrow="bottom">bottom_tab6</group>
		<group posrow="bottom_wrap2">bottom_tab7</group>
		<group posrow="bottom_wrap2">bottom_tab8</group>
		<group posrow="bottom_wrap2">bottom_tab9</group>
		<group posrow="bottom_wrap2">bottom_tab10</group>
		<group posrow="bottom_wrap2">bottom_tab11</group>
		<group posrow="bottom_wrap2">bottom_tab12</group>
		<group>bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<cssitem>
		<file>css/item.css</file>
	</cssitem>
	<jsitem>
	</jsitem>
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:41:"FLEXI_TMPL_ITEMSTABBED_ITEM_DEFAULT_TITLE";s:11:"description";s:38:"FLEXI_TMPL_ITEMSTABBED_ITEM_SHORT_DESC";s:10:"attributes";a:32:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:1:{s:6:"posrow";s:8:"subtitle";}i:4;a:1:{s:6:"posrow";s:8:"subtitle";}i:5;a:1:{s:6:"posrow";s:8:"subtitle";}i:6;a:1:{s:6:"posrow";s:8:"subtitle";}i:7;a:1:{s:6:"posrow";s:8:"subtitle";}i:8;a:1:{s:6:"posrow";s:8:"subtitle";}i:9;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:10;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:11;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:12;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:13;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:14;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:15;a:1:{s:6:"posrow";s:7:"img_top";}i:16;a:1:{s:6:"posrow";s:7:"img_top";}i:17;a:0:{}i:18;a:1:{s:6:"posrow";s:6:"bottom";}i:19;a:1:{s:6:"posrow";s:6:"bottom";}i:20;a:1:{s:6:"posrow";s:6:"bottom";}i:21;a:1:{s:6:"posrow";s:6:"bottom";}i:22;a:1:{s:6:"posrow";s:6:"bottom";}i:23;a:1:{s:6:"posrow";s:6:"bottom";}i:24;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:25;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:26;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:27;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:28;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:29;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:30;a:0:{}i:31;a:0:{}}s:9:"positions";a:32:{i:0;s:9:"subtitle1";i:1;s:9:"subtitle2";i:2;s:9:"subtitle3";i:3;s:13:"subtitle_tab1";i:4;s:13:"subtitle_tab2";i:5;s:13:"subtitle_tab3";i:6;s:13:"subtitle_tab4";i:7;s:13:"subtitle_tab5";i:8;s:13:"subtitle_tab6";i:9;s:13:"subtitle_tab7";i:10;s:13:"subtitle_tab8";i:11;s:13:"subtitle_tab9";i:12;s:14:"subtitle_tab10";i:13;s:14:"subtitle_tab11";i:14;s:14:"subtitle_tab12";i:15;s:5:"image";i:16;s:3:"top";i:17;s:11:"description";i:18;s:11:"bottom_tab1";i:19;s:11:"bottom_tab2";i:20;s:11:"bottom_tab3";i:21;s:11:"bottom_tab4";i:22;s:11:"bottom_tab5";i:23;s:11:"bottom_tab6";i:24;s:11:"bottom_tab7";i:25;s:11:"bottom_tab8";i:26;s:11:"bottom_tab9";i:27;s:12:"bottom_tab10";i:28;s:12:"bottom_tab11";i:29;s:12:"bottom_tab12";i:30;s:6:"bottom";i:31;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:63:"components/com_flexicontent/templates/items-tabbed/css/item.css";}s:10:"less_files";a:1:{i:0;s:14:"less/item.less";}}s:12:"presentation";O:8:"stdClass":20:{s:4:"name";s:12:"presentation";s:7:"xmlpath";s:73:"/var/www/html/components/com_flexicontent/templates/presentation/item.xml";s:8:"xmlmtime";i:1614603821;s:4:"view";s:4:"item";s:7:"tmplvar";s:19:".items.presentation";s:5:"thumb";s:59:"components/com_flexicontent/templates/presentation/item.png";s:6:"params";s:25230:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_PRESENTATION_ITEM_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_PRESENTATION_ITEM_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>

			<!--field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2" /-->

			<field name="htmlmode" type="multilist" subtype="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group group-fcinfo">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>

			<field name="params_above_tabset_spacer" type="separator" default="" level="none" class="fcspacer-16"/>

			<field name="params_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>
			<field name="params_tab_item_container" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_CONTAINER_STYLING" description="" icon_class="icon-checkbox-unchecked" level="tab_open" box_type="1"/>
			<field name="params_tab_item_container_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="item_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="item_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>
			<field name="item_text_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>

			<field name="item_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="item_pad_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_ITEM_PADDINGTOP_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_ITEM_PADDINGRIGHT_DESC" min="0" max="80" step="1"/>
			<field name="item_pad_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOMT_DESC" min="0" max="80" step="1"/>

			<field name="item_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="item_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="item_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="item_border_size" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC" min="0" max="80" step="1"/>
			<field name="item_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>

			<field name="params_tab_item_title" type="separator" default="FLEXI_TMPL_ITEM_TITLE_TAB" description="" icon_class="icon-checkmark-2" level="tab_open" box_type="1"/>
			<field name="params_tab_item_title_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			<field name="item_title_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="title_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="item_title_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="title_pad_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="item_title_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="title_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>

			<field name="params_tab_labels" type="separator" default="FLEXI_TMPL_LABELS_TAB" description="" icon_class="icon-checkbox" level="tab_open" box_type="1"/>
			<field name="params_tab_labels_info" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level2" class="alert alert-info"/>

			<field name="label_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="label_txt_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="label_bg_color" type="color" cssprep="less" hint="#999999" default="#999999" required="true" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="label_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="label_pad_top" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_left" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="label_pad_right" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_bottom" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="label_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="label_radius" type="number" cssprep="less" hint="3" default="3" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>


			<field name="item_layout_positions_tab" type="separator" default="FLEXI_TMPL_FIELDS_PLACEMENT_POSITIONS" description="" icon_class="icon-grid" level="tab_open" box_type="1"/>			
			<field name="item_layout_positions_tab_info" type="separator" default="FLEXI_TMPL_FIELDS_PLACEMENT_POSITIONS_INFO" description="" level="level2" class="alert alert-info"/>
			
			<field name="layout_pos_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>
			<field name="layout_pos_tab_tabbed_positions" type="separator" default="FLEXI_TMPL_TABBED_POS_TAB" description="" icon_class="" level="tab_open" box_type="1"/>

			<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
			<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
			<field name="tab_bg_color_start" type="color" cssprep="less" hint="#3093c7" default="#3093c7" required="true" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
			<field name="tab_bg_color_end" type="color" cssprep="less" hint="#1c5a85" default="#1c5a85" required="true" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
			<field name="tab_title_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>

			<field name="tab_content_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_CONTENT_BOX" description="" level="level3"/>
			<field name="tab_content_bg_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="tab_content_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC"/>
			<field name="tab_content_border_size_top" type="number" cssprep="less" hint="1" default="1" required="true" label="FLEXI_TMPL_TAB_CONTENT_TOP_SIZE" description="FLEXI_TMPL_TAB_CONTENT_TOP_SIZE_DESC"/>
			<field name="tab_content_border_color_top" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_TAB_CONTENT_TOP_COLOR" description="FLEXI_TMPL_TAB_CONTENT_TOP_COLOR_DESC"/>

			<field name="tabs_labels_grp" type="separator" default="FLEXI_TMPL_TAB_TITLES" description="" level="level2"/>

			<field name="subtitle_tabs_grp" type="separator" default="Subtitle Tabset" description="" level="level3"/>
			<field name="subtitle_tab1_label" type="text" default="" label="Tab 1" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab2_label" type="text" default="" label="Tab 2" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab3_label" type="text" default="" label="Tab 3" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab4_label" type="text" default="" label="Tab 4" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab5_label" type="text" default="" label="Tab 5" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab6_label" type="text" default="" label="Tab 6" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab7_label" type="text" default="" label="Tab 7" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab8_label" type="text" default="" label="Tab 8" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab9_label" type="text" default="" label="Tab 9" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab10_label" type="text" default="" label="Tab 10" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab11_label" type="text" default="" label="Tab 11" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="subtitle_tab12_label" type="text" default="" label="Tab 12" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>

			<field name="bottom_tabs_grp" type="separator" default="Bottom Tabset" description="" level="level3"/>
			<field name="bottom_tab1_label" type="text" default="" label="Tab 1" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab2_label" type="text" default="" label="Tab 2" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab3_label" type="text" default="" label="Tab 3" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab4_label" type="text" default="" label="Tab 4" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab5_label" type="text" default="" label="Tab 5" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab6_label" type="text" default="" label="Tab 6" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab7_label" type="text" default="" label="Tab 7" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab8_label" type="text" default="" label="Tab 8" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab9_label" type="text" default="" label="Tab 9" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab10_label" type="text" default="" label="Tab 10" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab11_label" type="text" default="" label="Tab 11" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>
			<field name="bottom_tab12_label" type="text" default="" label="Tab 12" description="FLEXI_TMPL_LABEL_IS_LANG_STRING"/>

			<field name="layout_pos_tab_top_bottom_positions" type="separator" default="FLEXI_TMPL_TOP_BOTTOM_POS_TAB" description="" icon_class="" level="tab_open" box_type="1"/>

			<field name="column_display_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLUMNS_DISPLAY" description="" level="level2"/>
			<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>

			<field name="column_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="column_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="column_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="column_padding_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="column_pad_top" type="number" cssprep="less" hint="10" default="10" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="column_pad_left" type="number" cssprep="less" hint="10" default="10" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="column_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="column_pad_bottom" type="number" cssprep="less" hint="10" default="10" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="column_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="column_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="column_border_size" type="number" cssprep="less" hint="1" default="1" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC"/>
			<field name="column_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="column_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>

			<field name="layout_pos_tab_customclass" type="separator" default="FLEXI_TMPL_POSITIONS_CSS_CLASSES" description="" icon_class="icon-palette" level="tab_open" box_type="1"/>
			<field name="layout_pos_tab_customclass_info" type="separator" cssprep="1" default="FLEXI_TMPL_POSITIONS_CSS_CLASSES_INFO" description="" level="level2" class="alert alert-info"/>

			<field name="custom_class_grp_subtitle_containers" type="separator" cssprep="1" default="Subtitle" description="" level="level3"/>
      <field name="box_class_subtitle1" type="text" size="3" hint="flexi group lineinfo subtitle1" default="" label="Subtitle 1" description="FLEXI_SUBTITLE1_CLASS_DESC"/>
      <field name="box_class_subtitle2" type="text" size="3" hint="flexi group lineinfo subtitle2" default="" label="Subtitle 2" description="FLEXI_SUBTITLE2_CLASS_DESC"/>
      <field name="box_class_subtitle3" type="text" size="3" hint="flexi group lineinfo subtitle3" default="" label="Subtitle 3" description="FLEXI_SUBTITLE2_CLASS_DESC"/>

			<field name="custom_class_grp_subtitle_tabs" type="separator" cssprep="1" default="Subtitle Tabset" description="" level="level3"/>
			<field name="box_class_subtitle_tab1" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 1" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab2" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 2" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab3" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 3" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab4" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 4" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab5" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 5" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab6" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 6" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab7" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 7" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab8" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 8" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab9" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 9" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab10" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 10" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab11" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 11" description="FLEXI__TAB_CLASS_DESC"/>
			<field name="box_class_subtitle_tab12" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 12" description="FLEXI_TAB_CLASS_DESC"/>

			<field name="custom_class_grp_content_containers" type="separator" cssprep="1" default="Main Content" description="" level="level3"/>
			<field name="box_class_image" type="text" size="3" hint="flexi group image" default="" label="FLEXI_IMAGE" description="FLEXI_IMAGE_CLASS_DESC"/>
			<field name="box_class_top" type="text" size="3" hint="flexi group infoblock" default="" label="FLEXI_TOP" description="FLEXI_TOP_CLASS_DESC"/>
			<field name="box_class_descr" type="text" size="3" hint="flexi group description" default="" label="FLEXI_DESCRIPTION" description="FLEXI_DESCRIPTION_CLASS_DESC"/>

			<field name="custom_class_grp_bottom_tabs" type="separator" cssprep="1" default="Bottom Tabset" description="" level="level3"/>
			<field name="box_class_bottom_tab1" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 1" description="FLEXI_TAB1_CLASS_DESC"/>
			<field name="box_class_bottom_tab2" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 2" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab3" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 3" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab4" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 4" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab5" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 5" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab6" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 6" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab7" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 7" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab8" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 8" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab9" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 9" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab10" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 10" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab11" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 11" description="FLEXI_TAB_CLASS_DESC"/>
			<field name="box_class_bottom_tab12" type="text" size="3" hint="flexi lineinfo" default="" label="Tab 12" description="FLEXI_TAB_CLASS_DESC"/>

			<field name="custom_class_grp_bottom_container" type="separator" cssprep="1" default="Bottom" description="" level="level3"/>
			<field name="box_class_bottom" type="text" size="3" hint="flexi group infoblock" default="" label="FLEXI_BOTTOM" description="FLEXI_BOTTOMFIELD_CLASS_DESC"/>

			<field name="layout_pos_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>
			<field name="params_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>

		</fieldset>
	</fields>

	<fieldgroups>
		<group>subtitle1</group>
		<group>subtitle2</group>
		<group>subtitle3</group>
		<group posrow="subtitle">subtitle_tab1</group>
		<group posrow="subtitle">subtitle_tab2</group>
		<group posrow="subtitle">subtitle_tab3</group>
		<group posrow="subtitle">subtitle_tab4</group>
		<group posrow="subtitle">subtitle_tab5</group>
		<group posrow="subtitle">subtitle_tab6</group>
		<group posrow="subtitle_wrap2">subtitle_tab7</group>
		<group posrow="subtitle_wrap2">subtitle_tab8</group>
		<group posrow="subtitle_wrap2">subtitle_tab9</group>
		<group posrow="subtitle_wrap2">subtitle_tab10</group>
		<group posrow="subtitle_wrap2">subtitle_tab11</group>
		<group posrow="subtitle_wrap2">subtitle_tab12</group>
		<group posrow="img_top">image</group>
		<group posrow="img_top">top</group>
		<group>description</group>
		<group posrow="bottom">bottom_tab1</group>
		<group posrow="bottom">bottom_tab2</group>
		<group posrow="bottom">bottom_tab3</group>
		<group posrow="bottom">bottom_tab4</group>
		<group posrow="bottom">bottom_tab5</group>
		<group posrow="bottom">bottom_tab6</group>
		<group posrow="bottom_wrap2">bottom_tab7</group>
		<group posrow="bottom_wrap2">bottom_tab8</group>
		<group posrow="bottom_wrap2">bottom_tab9</group>
		<group posrow="bottom_wrap2">bottom_tab10</group>
		<group posrow="bottom_wrap2">bottom_tab11</group>
		<group posrow="bottom_wrap2">bottom_tab12</group>
		<group>bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<cssitem>
		<file>css/item.css</file>
	</cssitem>
	<jsitem>
	</jsitem>
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:42:"FLEXI_TMPL_PRESENTATION_ITEM_DEFAULT_TITLE";s:11:"description";s:39:"FLEXI_TMPL_PRESENTATION_ITEM_SHORT_DESC";s:10:"attributes";a:32:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:1:{s:6:"posrow";s:8:"subtitle";}i:4;a:1:{s:6:"posrow";s:8:"subtitle";}i:5;a:1:{s:6:"posrow";s:8:"subtitle";}i:6;a:1:{s:6:"posrow";s:8:"subtitle";}i:7;a:1:{s:6:"posrow";s:8:"subtitle";}i:8;a:1:{s:6:"posrow";s:8:"subtitle";}i:9;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:10;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:11;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:12;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:13;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:14;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:15;a:1:{s:6:"posrow";s:7:"img_top";}i:16;a:1:{s:6:"posrow";s:7:"img_top";}i:17;a:0:{}i:18;a:1:{s:6:"posrow";s:6:"bottom";}i:19;a:1:{s:6:"posrow";s:6:"bottom";}i:20;a:1:{s:6:"posrow";s:6:"bottom";}i:21;a:1:{s:6:"posrow";s:6:"bottom";}i:22;a:1:{s:6:"posrow";s:6:"bottom";}i:23;a:1:{s:6:"posrow";s:6:"bottom";}i:24;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:25;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:26;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:27;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:28;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:29;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:30;a:0:{}i:31;a:0:{}}s:9:"positions";a:32:{i:0;s:9:"subtitle1";i:1;s:9:"subtitle2";i:2;s:9:"subtitle3";i:3;s:13:"subtitle_tab1";i:4;s:13:"subtitle_tab2";i:5;s:13:"subtitle_tab3";i:6;s:13:"subtitle_tab4";i:7;s:13:"subtitle_tab5";i:8;s:13:"subtitle_tab6";i:9;s:13:"subtitle_tab7";i:10;s:13:"subtitle_tab8";i:11;s:13:"subtitle_tab9";i:12;s:14:"subtitle_tab10";i:13;s:14:"subtitle_tab11";i:14;s:14:"subtitle_tab12";i:15;s:5:"image";i:16;s:3:"top";i:17;s:11:"description";i:18;s:11:"bottom_tab1";i:19;s:11:"bottom_tab2";i:20;s:11:"bottom_tab3";i:21;s:11:"bottom_tab4";i:22;s:11:"bottom_tab5";i:23;s:11:"bottom_tab6";i:24;s:11:"bottom_tab7";i:25;s:11:"bottom_tab8";i:26;s:11:"bottom_tab9";i:27;s:12:"bottom_tab10";i:28;s:12:"bottom_tab11";i:29;s:12:"bottom_tab12";i:30;s:6:"bottom";i:31;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:63:"components/com_flexicontent/templates/presentation/css/item.css";}s:10:"less_files";a:1:{i:0;s:14:"less/item.less";}}}s:8:"category";O:8:"stdClass":6:{s:4:"blog";O:8:"stdClass":20:{s:4:"name";s:4:"blog";s:7:"xmlpath";s:69:"/var/www/html/components/com_flexicontent/templates/blog/category.xml";s:8:"xmlmtime";i:1614603811;s:4:"view";s:8:"category";s:7:"tmplvar";s:14:".category.blog";s:5:"thumb";s:55:"components/com_flexicontent/templates/blog/category.png";s:6:"params";s:27377:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_BLOG_CATEGORY_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_BLOG_CATEGORY_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>

			<!--field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2" /-->

			<field name="htmlmode" type="multilist" subtype="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group group-fcinfo">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>

			<field name="params_above_tabset_spacer" type="separator" default="" level="none" class="fcspacer-16"/>

			<field name="params_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>
			<field name="params_tab_items_lead" type="separator" default="FLEXI_TMPL_FEATURED_ITEMS" description="" icon_class="icon-list" level="tab_open" box_type="1"/>
			<field name="leadingitems_sep" type="separator" default="FLEXI_TMPL_FEATURED_ITEMS_INFO" description="" level="level2" class="alert alert-info"/>

			<field name="lead_num" type="text" size="3" default="" label="FLEXI_LEADING_NUM" description="FLEXI_LEADING_NUM_DESC"/>
			<field name="lead_cols" type="radio" default="" label="FLEXI_MAX_ITEM_COLS_RESPONSIVE" description="FLEXI_MAX_ITEM_COLS_RESPONSIVE_DESC" class="btn-group group-fcsuccess">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="1">FLEXI_1_COL</option>
				<option value="2">FLEXI_2_COLS</option>
				<option value="3">FLEXI_3_COLS</option>
				<option value="4">FLEXI_4_COLS</option>
			</field>
			<field name="lead_placement" type="radio" default="" label="FLEXI_ITEMS_PLACEMENT" description="FLEXI_ITEMS_PLACEMENT_DESC" class="btn-group group-fcsuccess">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_DEFAULT</option>
				<option value="1">FLEXI_AS_MASONRY_TILES</option>
			</field>

			<field name="lead_link_to_popup" type="radio" default="" label="Open items in popup" description="Items will be opened in a modal popup window" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>

			<field name="lead_catblock_sep" type="separator" default="(sub) Category block, at (sub-)category start" description="Enable to show (sub-)category information when next (sub-)category starts" level="level2"/>
			<field name="lead_catblock_sep_msg" type="separator" default="Warning: this makes sense, if you order your items by their category (1st level order), (2nd level order can be anything e.g. title)" description="" level="level3"/>
			<field name="lead_catblock" type="radio" default="" label="FLEXI_ENABLE" description=" " class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="lead_catblock_title" type="radio" default="" label="FLEXI_SHOW_CAT_TITLE" description="FLEXI_SHOW_CAT_TITLE_DESC" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>

			<field name="leadingitems_text_sep" type="separator" default="FLEXI_TEXT" description="FLEXI_TEXT_DESC" level="level2"/>
			<field name="lead_use_description" type="radio" default="" label="FLEXI_DISPLAY_DESCRIPTION" description="FLEXI_DISPLAY_DESCRIPTION_DESC" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="lead_strip_html" type="radio" default="" label="FLEXI_STRIP_N_CUT" description="FLEXI_STRIP_N_CUT_DESC" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES_FORCE_READ_MORE</option>
				<option value="2">FLEXI_YES_IF_NEEDED</option>
			</field>
			<field name="lead_cut_text" type="text" size="4" default="" label="FLEXI_CUT_INTRO" description="FLEXI_CUT_INTRO_DESC"/>
			<field name="leadingitems_img_sep" type="separator" default="FLEXI_IMAGE" description="FLEXI_IMAGE_DESC" level="level2"/>
			<field name="lead_use_image" type="radio" default="" label="FLEXI_USE_IMAGE" description="FLEXI_USE_IMAGE_DESC" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="lead_image" type="fcimage" default="" label="FLEXI_IMAGE_SOURCE" description="FLEXI_IMAGE_SOURCE_DESC"/>
			<field name="lead_position" type="radio" default="" label="FLEXI_IMAGE_POSITION" description="FLEXI_IMAGE_POSITION_DESC" class="btn-group group-fcsuccess">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_IMAGE_LEFT</option>
				<option value="1">FLEXI_IMAGE_RIGHT</option>
			</field>
			<field name="lead_link_image" type="radio" default="" label="FLEXI_LINK_IMAGE" description="FLEXI_LINK_IMAGE_DESC" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="lead_link_image_to" type="radio" default="" label="Link to" description="If you are using an image field then you may use the custom link add to the image" class="btn-group group-fcsuccess">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_ITEM</option>
				<option value="1">Custom link (image field)</option>
			</field>
			<field name="lead_image_size" type="radio" default="" label="FLEXI_INTRO_IMAGE_SIZE" description="FLEXI_INTRO_IMAGE_SIZE_DESC" class="btn-group group-fcsuccess">
				<option value="">FLEXI_USE_PARAMS</option>
				<option value="s">FLEXI_SMALL</option>
				<option value="m">FLEXI_MEDIUM</option>
				<option value="l">FLEXI_LARGE</option>
				<option value="o">FLEXI_ORIGINAL</option>
			</field>
			<field name="lead_width" type="text" size="4" default="" label="FLEXI_IMAGE_WIDTH" description="FLEXI_IMAGE_WIDTH"/>
			<field name="lead_height" type="text" size="4" default="" label="FLEXI_IMAGE_HEIGHT" description="FLEXI_IMAGE_HEIGHT"/>
			<field name="lead_method" type="radio" default="" label="FLEXI_PROCESSING_METHOD" description="FLEXI_PROCESSING_METHOD" class="btn-group group-fcsuccess">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_SCALE</option>
				<option value="1">FLEXI_CROP</option>
			</field>
			<field name="lead_default_images" type="textarea" default="" label="FLEXI_TMPL_BLOG_DEFAULT_IMAGES" description="FLEXI_TMPL_BLOG_DEFAULT_IMAGES_DESC"/>

			<field name="lead_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level1"/>
			<field name="afterdesc_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="lead_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="lead_txt_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>

			<field name="lead_padding_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="lead_pad_top" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="lead_pad_left" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="lead_pad_right" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="lead_pad_bottom" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="lead_margin_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_MARGIN" description="" level="level3"/>
			<field name="lead_margin_top" type="number" cssprep="less" hint="32" default="32" required="true" label="FLEXI_TMPL_MARGIN_TOP" description="FLEXI_TMPL_MARGIN_TOP_DESC" min="0" max="80" step="1"/>
			<field name="lead_margin_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_MARGIN_LEFT" description="FLEXI_TMPL_MARGIN_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="lead_margin_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_MARGIN_RIGHT" description="FLEXI_TMPL_MARGIN_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="lead_margin_bottom" type="number" cssprep="less" hint="32" default="32" required="true" label="FLEXI_TMPL_MARGIN_BOTTOM" description="FLEXI_TMPL_MARGIN_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="lead_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="lead_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="lead_border_size" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_SIZE" description="FLEXI_TMPL_BORDER_SIZE_DESC" min="0" max="80" step="1"/>
			<field name="lead_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_TYPE_DESC">
			<option value="solid">FLEXI_SOLID</option>
			<option value="dotted">FLEXI_DOTTED</option>
			<option value="dashed">FLEXI_DASHED</option>
			<option value="double">FLEXI_DOUBLE</option>
			<option value="groove">FLEXI_GROOVE</option>
			<option value="ridge">FLEXI_RIDGE</option>
			<option value="inset">FLEXI_INSET</option>
			<option value="outset">FLEXI_OUTSET</option>
			</field>
			<field name="lead_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_SIZE_COLOR_DESC" min="0" max="80" step="1"/>


			<field name="params_tab_items_standard" type="separator" default="FLEXI_TMPL_STANDARD_ITEMS" description="" icon_class="icon-list" level="tab_open" box_type="1"/>
			<field name="introitems_sep" type="separator" default="FLEXI_TMPL_STANDARD_ITEMS_INFO" description="" level="level2" class="alert alert-info"/>

			<field name="intro_cols" type="radio" default="" label="FLEXI_MAX_ITEM_COLS_RESPONSIVE" description="FLEXI_MAX_ITEM_COLS_RESPONSIVE_DESC" class="btn-group group-fcsuccess">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="1">FLEXI_1_COL</option>
				<option value="2">FLEXI_2_COLS</option>
				<option value="3">FLEXI_3_COLS</option>
				<option value="4">FLEXI_4_COLS</option>
			</field>
			<field name="intro_placement" type="radio" default="" label="FLEXI_ITEMS_PLACEMENT" description="FLEXI_ITEMS_PLACEMENT_DESC" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_DEFAULT</option>
				<option value="1">FLEXI_AS_MASONRY_TILES</option>
			</field>
			<field name="intro_link_to_popup" type="radio" default="" label="Open items in popup" description="Items will be opened in a modal popup window" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>

			<field name="intro_catblock_sep" type="separator" default="(sub) Category block, at (sub-)category start" description="Enable to show (sub-)category information when next (sub-)category starts" level="level2"/>
			<field name="intro_catblock_sep_msg" type="separator" default="Warning: this makes sense, if you order your items by their category (1st level order), (2nd level order can be anything e.g. title)" description="" level="level3"/>
			<field name="intro_catblock" type="radio" default="" label="FLEXI_ENABLE" description=" " class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="intro_catblock_title" type="radio" default="" label="FLEXI_SHOW_CAT_TITLE" description="FLEXI_SHOW_CAT_TITLE_DESC" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>

			<field name="introitems_text_sep" type="separator" default="FLEXI_TEXT" description="FLEXI_TEXT_DESC" level="level2"/>
			<field name="intro_use_description" type="radio" default="" label="FLEXI_DISPLAY_DESCRIPTION" description="FLEXI_DISPLAY_DESCRIPTION_DESC" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="intro_strip_html" type="radio" default="" label="FLEXI_STRIP_N_CUT" description="FLEXI_STRIP_N_CUT_DESC" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES_FORCE_READ_MORE</option>
				<option value="2">FLEXI_YES_IF_NEEDED</option>
			</field>
			<field name="intro_cut_text" type="text" size="4" default="" label="FLEXI_CUT_INTRO" description="FLEXI_CUT_INTRO_DESC"/>
			<field name="introitems_img_sep" type="separator" default="FLEXI_IMAGE" description="FLEXI_IMAGE_DESC" level="level2"/>
			<field name="intro_use_image" type="radio" default="" label="FLEXI_USE_IMAGE" description="FLEXI_USE_IMAGE_DESC" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="intro_image" type="fcimage" default="" label="FLEXI_IMAGE_SOURCE" description="FLEXI_IMAGE_SOURCE_DESC"/>
			<field name="intro_position" type="radio" default="" label="FLEXI_IMAGE_POSITION" description="FLEXI_IMAGE_POSITION_DESC" class="btn-group group-fcsuccess">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_IMAGE_LEFT</option>
				<option value="1">FLEXI_IMAGE_RIGHT</option>
			</field>
			<field name="intro_link_image" type="radio" default="" label="FLEXI_LINK_IMAGE" description="FLEXI_LINK_IMAGE_DESC" class="btn-group group-fcmethod fcoffactive">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="intro_link_image_to" type="radio" default="" label="Link to" description="If you are using an image field then you may use the custom link add to the image" class="btn-group group-fcsuccess">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_ITEM</option>
				<option value="1">Custom link (image field)</option>
			</field>
			<field name="intro_image_size" type="radio" default="" label="FLEXI_INTRO_IMAGE_SIZE" description="FLEXI_INTRO_IMAGE_SIZE_DESC" class="btn-group group-fcsuccess">
				<option value="">FLEXI_USE_PARAMS</option>
				<option value="s">FLEXI_SMALL</option>
				<option value="m">FLEXI_MEDIUM</option>
				<option value="l">FLEXI_LARGE</option>
				<option value="o">FLEXI_ORIGINAL</option>
			</field>
			<field name="intro_width" type="text" size="4" default="" label="FLEXI_IMAGE_WIDTH" description="FLEXI_IMAGE_WIDTH"/>
			<field name="intro_height" type="text" size="4" default="" label="FLEXI_IMAGE_HEIGHT" description="FLEXI_IMAGE_HEIGHT"/>
			<field name="intro_method" type="radio" default="" label="FLEXI_PROCESSING_METHOD" description="FLEXI_PROCESSING_METHOD" class="btn-group group-fcsuccess">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_SCALE</option>
				<option value="1">FLEXI_CROP</option>
			</field>
			<field name="intro_default_images" type="textarea" default="" label="FLEXI_TMPL_BLOG_DEFAULT_IMAGES" description="FLEXI_TMPL_BLOG_DEFAULT_IMAGES_DESC"/>

			<field name="intro_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_STYLING" description="" level="level1"/>
			<field name="afterdesc_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="intro_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="intro_txt_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>

			<field name="intro_padding_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="intro_pad_top" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="intro_pad_left" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="intro_pad_right" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="intro_pad_bottom" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="intro_margin_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_MARGIN" description="" level="level3"/>
			<field name="intro_margin_top" type="number" cssprep="less" hint="32" default="32" required="true" label="FLEXI_TMPL_MARGIN_TOP" description="FLEXI_TMPL_MARGIN_TOP_DESC" min="0" max="80" step="1"/>
			<field name="intro_margin_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_MARGIN_LEFT" description="FLEXI_TMPL_MARGIN_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="intro_margin_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_MARGIN_RIGHT" description="FLEXI_TMPL_MARGIN_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="intro_margin_bottom" type="number" cssprep="less" hint="32" default="32" required="true" label="FLEXI_TMPL_MARGIN_BOTTOM" description="FLEXI_TMPL_MARGIN_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="intro_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="intro_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>
			<field name="intro_border_size" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_SIZE" description="FLEXI_TMPL_BORDER_SIZE_DESC" min="0" max="80" step="1"/>
			<field name="intro_border_type" type="list" cssprep="less" hint="solid" default="solid" required="true" label="FLEXI_TMPL_BORDER_TYPE" description="FLEXI_TMPL_BORDER_RADIUS_TYPE_DESC">
				<option value="solid">FLEXI_SOLID</option>
				<option value="dotted">FLEXI_DOTTED</option>
				<option value="dashed">FLEXI_DASHED</option>
				<option value="double">FLEXI_DOUBLE</option>
				<option value="groove">FLEXI_GROOVE</option>
				<option value="ridge">FLEXI_RIDGE</option>
				<option value="inset">FLEXI_INSET</option>
				<option value="outset">FLEXI_OUTSET</option>
			</field>
			<field name="intro_border_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_SIZE_COLOR" min="0" max="80" step="1"/>


			<field name="params_tab_item_title" type="separator" default="FLEXI_TMPL_ITEM_TITLE_TAB" description="" icon_class="icon-checkmark-2" level="tab_open" box_type="1"/>
			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="item_title_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="title_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="item_title_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="title_pad_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="item_title_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="title_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>


			<field name="params_tab_labels" type="separator" default="FLEXI_TMPL_LABELS_TAB" description="" icon_class="icon-checkbox" level="tab_open" box_type="1"/>

			<field name="label_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_LABEL_STYLING" description="" level="level2"/>

			<field name="label_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="label_txt_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="label_bg_color" type="color" cssprep="less" hint="#999999" default="#999999" required="true" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="label_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="label_pad_top" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_left" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="label_pad_right" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_bottom" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="label_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="label_radius" type="number" cssprep="less" hint="3" default="3" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>


			<field name="params_tab_customclasses" type="separator" default="FLEXI_TMPL_POSITIONS_CSS_CLASSES" description="" icon_class="icon-brush" level="tab_open" box_type="1"/>
			<field name="custom_class_grp" type="separator" cssprep="1" default="FLEXI_TMPL_POSITIONS_CSS_CLASSES_INFO" description="" level="level2" class="alert alert-info"/>

			<field name="box_class_above-description-line1" type="text" size="3" hint="lineinfo line1" default="" label="FLEXI_TMPL_BLOG_ABOVE_DESC1" description=""/>
			<field name="box_class_above-description-line1-nolabel" type="text" size="3" hint="lineinfo line1" default="" label="FLEXI_TMPL_BLOG_ABOVE_DESC1_NOLBL" description=""/>
			<field name="box_class_above-description-line2" type="text" size="3" hint="lineinfo line2" default="" label="FLEXI_TMPL_BLOG_ABOVE_DESC2" description=""/>
			<field name="box_class_above-description-line2-nolabel" type="text" size="3" hint="lineinfo line2" default="" label="FLEXI_TMPL_BLOG_ABOVE_DESC2_NOLBL" description=""/>
			<field name="box_class_under-description-line2" type="text" size="3" hint="lineinfo line3" default="" label="FLEXI_TMPL_BLOG_UNDER_DESC1" description=""/>
			<field name="box_class_under-description-line1-nolabel" type="text" size="3" hint="lineinfo line3" default="" label="FLEXI_TMPL_BLOG_UNDER_DESC1_NOLBL" description=""/>
			<field name="box_class_under-description-line2" type="text" size="3" hint="lineinfo line4" default="" label="FLEXI_TMPL_BLOG_UNDER_DESC2" description=""/>
			<field name="box_class_under-description-line2-nolabel" type="text" size="3" hint="lineinfo line4" default="" label="FLEXI_TMPL_BLOG_UNDER_DESC2_NOLBL" description=""/>


		<field name="params_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>
		</fieldset>
	</fields>
	<fieldgroups>
		<group>above-description-line1</group>
		<group>above-description-line1-nolabel</group>
		<group>above-description-line2</group>
		<group>above-description-line2-nolabel</group>
		<group>under-description-line1</group>
		<group>under-description-line1-nolabel</group>
		<group>under-description-line2</group>
		<group>under-description-line2-nolabel</group>
		<group>renderonly</group>
	</fieldgroups>
	<csscategory>
		<file>css/category.css</file>
	</csscategory>
	<jscategory>
	</jscategory>
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:38:"FLEXI_TMPL_BLOG_CATEGORY_DEFAULT_TITLE";s:11:"description";s:35:"FLEXI_TMPL_BLOG_CATEGORY_SHORT_DESC";s:10:"attributes";a:9:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:0:{}i:4;a:0:{}i:5;a:0:{}i:6;a:0:{}i:7;a:0:{}i:8;a:0:{}}s:9:"positions";a:9:{i:0;s:23:"above-description-line1";i:1;s:31:"above-description-line1-nolabel";i:2;s:23:"above-description-line2";i:3;s:31:"above-description-line2-nolabel";i:4;s:23:"under-description-line1";i:5;s:31:"under-description-line1-nolabel";i:6;s:23:"under-description-line2";i:7;s:31:"under-description-line2-nolabel";i:8;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:59:"components/com_flexicontent/templates/blog/css/category.css";}s:10:"less_files";a:1:{i:0;s:18:"less/category.less";}}s:9:"core-news";O:8:"stdClass":20:{s:4:"name";s:9:"core-news";s:7:"xmlpath";s:74:"/var/www/html/components/com_flexicontent/templates/core-news/category.xml";s:8:"xmlmtime";i:1614603814;s:4:"view";s:8:"category";s:7:"tmplvar";s:19:".category.core-news";s:5:"thumb";s:60:"components/com_flexicontent/templates/core-news/category.png";s:6:"params";s:27539:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>FLEXIcontent Team</author>
	<website>www.flexicontent.org</website>
	<email>info@flexicontent.org</email>
	<license>GPLv3</license>
	<version>1.0</version>
	<release>15 November 2017</release>
	<microdata_support>1</microdata_support>
	
	<defaulttitle>FLEXI_TMPL_CORE-NEWS_CATEGORY_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_CORE-NEWS_CATEGORY_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="items_sets_head_break" type="separator" level="level_br"/>

			<field name="lead_num" type="text" size="3" default="" label="# Featured" description="Number of featured items. Note effects items until featured number of items is reached, then all remains items in current and in next pages will be shown with 'standard' configuration" class="input-small"/>

			<!--field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2" /-->
			<field name="htmlmode" type="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
	
			<field name="items_sets_head_break2" type="separator" level="level_br"/>
			<field name="content_display_options_head_break" type="separator" level="level_br"/>

			<field name="items_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>


				<field name="items_tab_content_display_options" type="separator" default="FLEXI_COMMON" icon_class="icon-screen" level="tab_open" box_type="1"/>

					<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>

					<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
					<field name="title_color" type="color" cssprep="less" default="inherit" label="Title text color" description="Color of title text"/>
					<field name="title_background" type="color" cssprep="less" default="inherit" label="Title background" description="Color of title background"/>
					<field name="title_font_size" type="text" cssprep="less" default="inherit" label="Title font size" description="Size of title text"/>

					<field name="label_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_LABEL_STYLING" description="" level="level2"/>
					<field name="label_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_LABEL_BG" description="FLEXI_TMPL_LABEL_BG_DESC"/>
					<field name="label_txt_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_LABEL_TXT_COLOR" description="FLEXI_TMPL_LABEL_TXT_COLOR_DESC"/>
					<field name="label_radius" type="number" cssprep="less" default="3" label="FLEXI_TMPL_LABEL_RADIUS" description="FLEXI_TMPL_LABEL_RADIUS_DESC" min="0" max="80" step="1"/>

					<field name="readon_styling_grp" type="separator" default="Readon styling" description="" level="level2"/>
					<field name="readon_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_LABEL_BG" description="FLEXI_TMPL_LABEL_BG_DESC"/>
					<field name="readon_txt_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_LABEL_TXT_COLOR" description="FLEXI_TMPL_LABEL_TXT_COLOR_DESC"/>
					<field name="readon_font_size" type="text" cssprep="less" default="inherit" label="Title font size" description="Size of title text"/>
					<field name="readon_type" type="radio" default="" label="Readon type" description="FLEXI_MAX_ITEM_COLS_RESPONSIVE_DESC">
						<option value="">FLEXI_USE_GLOBAL</option>
						<option value="0">FLEXI_TEXT</option>
						<option value="1">FLEXI_IMAGE</option>
					</field>
					<field name="readon_image" type="media" default="" label="Read more image" description="Select image to use instead of read more, this is maybe useful if your website is not multilingual"/>
	
				<field name="items_tab_featured" type="separator" default="Featured items" icon_class="icon-list" level="tab_open" box_type="1"/>
				<field name="items_tabset_featured_start" type="separator" default="ITEMS_FEATURED_TABSET" level="tabset_start"/>

					<field name="items_tab_featured_placement" type="separator" default="FLEXI_PLACEMENT" icon_class="icon-grid" level="tab_open" box_type="1"/>

						<field name="items_featured_basic" type="separator" default="FLEXI_BASIC" icon_class="icon-cog" level="level2"/>
						<field name="item_columns_feat" type="list" default="" hint="1" label="FLEXI_MAX_ITEM_COLS_RESPONSIVE" description="FLEXI_MAX_ITEM_COLS_RESPONSIVE_DESC">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
						</field>
						<field name="item_placement_feat" type="radio" default="" hint="0" label="FLEXI_ITEMS_PLACEMENT" description="FLEXI_ITEMS_PLACEMENT_DESC" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_CLEARED</option>
							<option value="1">FLEXI_AS_MASONRY_TILES</option>
						</field>
						<field name="lead_link_to_popup" type="radio" default="" hint="0" label="Open items in popup" description="Items will be opened in a modal popup window" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="1">FLEXI_YES</option>
						</field>
						<field name="hl_items_onnav_feat" type="radio" default="" hint="0" label="Highlight items" description="Highlight currently 'active' and 'hovered' items by adding CSS classes" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="2">On Hover</option>
						</field>
			
						<field name="featured_content_image_placement" type="separator" default="Content / image placement" level="level2"/>
						<field name="content_layout_feat" type="list" default="" hint="3" label="Content Placement &lt;br/&gt; &lt;small&gt; in regards to image &lt;/small&gt;" description="Select to placement content next, or above/below (cleared) or over (ovelayed) the item image. Note: overlayed will crop content that does not fit from the bottom part" class="">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">Floated (Right)</option>
							<option value="1">Floated (Left)</option>
							<option value="2">Cleared (Above)</option>
							<option value="3">Cleared (Below)</option>
							<option value="4">Overlayed (Top)</option>
							<option value="5">Overlayed (Bottom)</option>
							<option value="6">Overlayed (Full)</option>
						</field>
						<field name="content_display_feat" type="radio" default="" hint="0" label="Content visible &lt;br/&gt; &lt;small&gt; for overlayed &lt;/small&gt;" description="Select how image is fitted into the container" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">Always visible</option>
							<!--option value="1">On mouse over / item active</option-->
							<option value="2">On mouse over</option>
						</field>
						<field name="img_fit_feat" type="radio" default="" hint="1" label="Image fit &lt;br/&gt; &lt;small&gt; for cleared / overlayed &lt;/small&gt;" description="Select how image is fitted into the container" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">Auto-Fit</option>
							<option value="1">Auto-Fit and Stretch</option>
						</field>
	
					<field name="items_tab_featured_styling" type="separator" default="FLEXI_STYLING" icon_class="icon-palette" level="tab_open" box_type="1"/>
			
						<field name="featured_items_box_css" type="separator" cssprep="1" default="Items list box" level="level2"/>
						<field name="box_background_color_feat" type="color" cssprep="less" default="inherit" label="background color" description="Items container's background color" class="input-small"/>
						<field name="box_padding_top_bottom_feat" type="text" cssprep="less" default="8px" label="padding top/bottom" description="Items container's padding applied at top and bottom of the items" class="input-small"/>
						<field name="box_padding_left_right_feat" type="text" cssprep="less" default="12px" label="padding left/right" description="Items container's padding applied at left and right of the items" class="input-small"/>
						<field name="box_margin_top_bottom_feat" type="text" cssprep="less" default="4px" label="margin top/bottom" description="Items container's margin applied at top and bottom of the items" class="input-small"/>
						<field name="box_margin_left_right_feat" type="text" cssprep="less" default="4px" label="margin left/right" description="Items container's margin applied at left and right of the items" class="input-small"/>
			
						<field name="featured_item_box_css" type="separator" cssprep="1" default="Item box" level="level2"/>
						<field name="ibox_background_color_feat" type="color" cssprep="less" default="inherit" label="background color" description="This is the background color applied at each item" class="input-small"/>
						<field name="ibox_padding_top_bottom_feat" type="text" cssprep="less" default="8px" label="padding top/bottom" description="This is the padding applied at top and bottom of the items" class="input-small"/>
						<field name="ibox_padding_left_right_feat" type="text" cssprep="less" default="12px" label="padding left/right" description="This is the padding applied at left and right of the items" class="input-small"/>
						<field name="ibox_border_width_feat" type="text" cssprep="less" default="1px" label="border width" description="This is the border width applied around the items" class="input-small"/>
						<field name="ibox_margin_top_bottom_feat" type="text" cssprep="less" default="4px" label="margin top/bottom" description="This is the margin applied at top and bottom of the items" class="input-small"/>
						<field name="ibox_margin_left_right_feat" type="text" cssprep="less" default="4px" label="margin left/right" description="This is the margin applied at left and right of the items" class="input-small"/>
			
					<field name="items_tab_featured_fields" type="separator" default="FLEXI_FIELDS" icon_class="icon-list" level="tab_open" box_type="1"/>
			
						<field name="lead_catblock_sep" type="separator" default="(sub) Category block, at (sub-)category start" description="Enable to show (sub-)category information when next (sub-)category starts" level="level2"/>
						<field name="lead_catblock_sep_msg" type="separator" default="Warning: this makes sense, if you order your items by their category (1st level order), (2nd level order can be anything e.g. title)" description="" level="level3" class="alert alert-info fcpadded"/>
						<field name="lead_catblock" type="radio" default="" label="FLEXI_ENABLE" description=" " class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="1">FLEXI_YES</option>
						</field>
						<field name="lead_catblock_title" type="radio" default="" label="FLEXI_SHOW_CAT_TITLE" description="FLEXI_SHOW_CAT_TITLE_DESC" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="1">FLEXI_YES</option>
						</field>
						
						<field name="leadingitems_text_sep" type="separator" default="FLEXI_TEXT" description="FLEXI_TEXT_DESC" level="level2"/>
						<field name="lead_use_description" type="radio" default="" label="FLEXI_DISPLAY_DESCRIPTION" description="FLEXI_DISPLAY_DESCRIPTION_DESC" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="1">FLEXI_YES</option>
						</field>
						<field name="lead_strip_html" type="radio" default="" label="FLEXI_STRIP_N_CUT" description="FLEXI_STRIP_N_CUT_DESC" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="1">FLEXI_YES_FORCE_READ_MORE</option>
							<option value="2">FLEXI_YES_IF_NEEDED</option>
						</field>
						<field name="lead_cut_text" type="text" size="4" default="" label="FLEXI_CUT_INTRO" description="FLEXI_CUT_INTRO_DESC"/>
						<field name="leadingitems_img_sep" type="separator" default="FLEXI_IMAGE" description="FLEXI_IMAGE_DESC" level="level2"/>
						<field name="lead_use_image" type="radio" default="" label="FLEXI_USE_IMAGE" description="FLEXI_USE_IMAGE_DESC" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="1">FLEXI_YES</option>
						</field>
						<field name="lead_image" type="fcimage" default="" label="FLEXI_IMAGE_SOURCE" description="FLEXI_IMAGE_SOURCE_DESC"/>
						<field name="lead_position" type="radio" default="" label="FLEXI_IMAGE_POSITION" description="FLEXI_IMAGE_POSITION_DESC" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_IMAGE_LEFT</option>
							<option value="1">FLEXI_IMAGE_RIGHT</option>
						</field>		
						<field name="lead_link_image" type="radio" default="" label="FLEXI_LINK_IMAGE" description="FLEXI_LINK_IMAGE_DESC" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="1">FLEXI_YES</option>
						</field>
						<field name="lead_link_image_to" type="radio" default="" label="Link to" description="If you are using an image field then you may use the custom link add to the image" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_ITEM</option>
							<option value="1">Custom link (image field)</option>
						</field>
						<field name="lead_image_size" type="radio" default="" label="FLEXI_INTRO_IMAGE_SIZE" description="FLEXI_INTRO_IMAGE_SIZE_DESC" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_PARAMS</option>
							<option value="s">FLEXI_SMALL</option>
							<option value="m">FLEXI_MEDIUM</option>
							<option value="l">FLEXI_LARGE</option>
							<option value="o">FLEXI_ORIGINAL</option>
						</field>
						<field name="lead_width" type="text" size="4" default="" label="FLEXI_IMAGE_WIDTH" description="FLEXI_IMAGE_WIDTH"/>
						<field name="lead_height" type="text" size="4" default="" label="FLEXI_IMAGE_HEIGHT" description="FLEXI_IMAGE_HEIGHT"/>
						<field name="lead_method" type="radio" default="" label="FLEXI_PROCESSING_METHOD" description="FLEXI_PROCESSING_METHOD" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_SCALE</option>
							<option value="1">FLEXI_CROP</option>
						</field>
						<field name="lead_default_images" type="textarea" default="" label="FLEXI_TMPL_CORE-NEWS_DEFAULT_IMAGES" description="FLEXI_TMPL_CORE-NEWS_DEFAULT_IMAGES_DESC"/>

				<field name="items_tabset_featured_end" type="separator" default="ITEMS_FEATURED_TABSET" level="tabset_close"/>


				<field name="items_tab_standard" type="separator" default="Standard items" icon_class="icon-list" level="tab_open" box_type="1"/>	
				<field name="items_tabset_standard_start" type="separator" default="ITEMS_STANDARD_TABSET" level="tabset_start"/>

					<field name="items_tab_standard_placement" type="separator" default="FLEXI_PLACEMENT" icon_class="icon-grid" level="tab_open" box_type="1"/>
		
						<field name="items_standard_basic" type="separator" default="FLEXI_BASIC" icon_class="icon-cog" level="level2"/>
						<field name="item_columns" type="list" default="" hint="2" label="FLEXI_MAX_ITEM_COLS_RESPONSIVE" description="FLEXI_MAX_ITEM_COLS_RESPONSIVE_DESC">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
						</field>
						<field name="item_placement" type="radio" default="" hint="1" label="FLEXI_ITEMS_PLACEMENT" description="FLEXI_ITEMS_PLACEMENT_DESC" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_CLEARED</option>
							<option value="1">FLEXI_AS_MASONRY_TILES</option>
						</field>
						<field name="intro_link_to_popup" type="radio" default="" hint="0" label="Open items in popup" description="Items will be opened in a modal popup window" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="1">FLEXI_YES</option>
						</field>
						<field name="hl_items_onnav" type="radio" default="" hint="0" label="Highlight items" description="Highlight currently 'active' and 'hovered' items by adding CSS classes" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="2">On Hover</option>
						</field>
			
						<field name="standard_content_image_placement" type="separator" default="Content / image placement" level="level2"/>
						<field name="content_layout" type="list" default="" hint="3" label="Content Placement &lt;br/&gt; &lt;small&gt; in regards to image &lt;/small&gt;" description="Select to placement content next, or above/below (cleared) or over (ovelayed) the item image. Note: overlayed will crop content that does not fit from the bottom part" class="">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">Floated (Right)</option>
							<option value="1">Floated (Left)</option>
							<option value="2">Cleared (Above)</option>
							<option value="3">Cleared (Below)</option>
							<option value="4">Overlayed (Top)</option>
							<option value="5">Overlayed (Bottom)</option>
							<option value="6">Overlayed (Full)</option>
						</field>
						<field name="content_display" type="radio" default="" hint="0" label="Content visible &lt;br/&gt; &lt;small&gt; for overlayed &lt;/small&gt;" description="Select how image is fitted into the container" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">Always visible</option>
							<!--option value="1">On mouse over / item active</option-->
							<option value="2">On mouse over</option>
						</field>
						<field name="img_fit" type="radio" default="" hint="1" label="Image fit &lt;br/&gt; &lt;small&gt; for cleared / overlayed &lt;/small&gt;" description="Select how image is fitted into the container" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">Auto-Fit</option>
							<option value="1">Auto-Fit and Stretch</option>
						</field>

					<field name="items_tab_standard_styling" type="separator" default="FLEXI_STYLING" icon_class="icon-palette" level="tab_open" box_type="1"/>

						<field name="standard_items_box_css" type="separator" cssprep="1" default="Items list box" level="level2"/>
						<field name="box_background_color" type="color" cssprep="less" default="inherit" label="background color" description="Items container's background color" class="input-small"/>
						<field name="box_padding_top_bottom" type="text" cssprep="less" default="8px" label="padding top/bottom" description="Items container's padding applied at top and bottom of the items" class="input-small"/>
						<field name="box_padding_left_right" type="text" cssprep="less" default="12px" label="padding left/right" description="Items container's padding applied at left and right of the items" class="input-small"/>
						<field name="box_margin_top_bottom" type="text" cssprep="less" default="4px" label="margin top/bottom" description="Items container's margin applied at top and bottom of the items" class="input-small"/>
						<field name="box_margin_left_right" type="text" cssprep="less" default="4px" label="margin left/right" description="Items container's margin applied at left and right of the items" class="input-small"/>
			
						<field name="standard_item_box_css" type="separator" cssprep="1" default="Item box" level="level2"/>
						<field name="ibox_background_color" type="color" cssprep="less" default="inherit" label="background color" description="This is the background color applied at each item" class="input-small"/>
						<field name="ibox_padding_top_bottom" type="text" cssprep="less" default="8px" label="padding top/bottom" description="This is the padding applied at top and bottom of the items" class="input-small"/>
						<field name="ibox_padding_left_right" type="text" cssprep="less" default="12px" label="padding left/right" description="This is the padding applied at left and right of the items" class="input-small"/>
						<field name="ibox_border_width" type="text" cssprep="less" default="1px" label="border width" description="This is the border width applied around the items" class="input-small"/>
						<field name="ibox_margin_top_bottom" type="text" cssprep="less" default="4px" label="margin top/bottom" description="This is the margin applied at top and bottom of the items" class="input-small"/>
						<field name="ibox_margin_left_right" type="text" cssprep="less" default="4px" label="margin left/right" description="This is the margin applied at left and right of the items" class="input-small"/>
			
					<field name="items_tab_standard_fields" type="separator" default="FLEXI_FIELDS" icon_class="icon-list" level="tab_open" box_type="1"/>
						
						<field name="intro_catblock_sep" type="separator" default="(sub) Category block, at (sub-)category start" description="Enable to show (sub-)category information when next (sub-)category starts" level="level2"/>
						<field name="intro_catblock_sep_msg" type="separator" default="Warning: this makes sense, if you order your items by their category (1st level order), (2nd level order can be anything e.g. title)" description="" level="level3" class="alert alert-info fcpadded"/>
						<field name="intro_catblock" type="radio" default="" label="FLEXI_ENABLE" description=" " class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="1">FLEXI_YES</option>
						</field>
						<field name="intro_catblock_title" type="radio" default="" label="FLEXI_SHOW_CAT_TITLE" description="FLEXI_SHOW_CAT_TITLE_DESC" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="1">FLEXI_YES</option>
						</field>
						
						<field name="introitems_text_sep" type="separator" default="FLEXI_TEXT" description="FLEXI_TEXT_DESC" level="level2"/>
						<field name="intro_use_description" type="radio" default="" label="FLEXI_DISPLAY_DESCRIPTION" description="FLEXI_DISPLAY_DESCRIPTION_DESC" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="1">FLEXI_YES</option>
						</field>
						<field name="intro_strip_html" type="radio" default="" label="FLEXI_STRIP_N_CUT" description="FLEXI_STRIP_N_CUT_DESC" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="1">FLEXI_YES_FORCE_READ_MORE</option>
							<option value="2">FLEXI_YES_IF_NEEDED</option>
						</field>
						<field name="intro_cut_text" type="text" size="4" default="" label="FLEXI_CUT_INTRO" description="FLEXI_CUT_INTRO_DESC"/>
						<field name="introitems_img_sep" type="separator" default="FLEXI_IMAGE" description="FLEXI_IMAGE_DESC" level="level2"/>
						<field name="intro_use_image" type="radio" default="" label="FLEXI_USE_IMAGE" description="FLEXI_USE_IMAGE_DESC" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="1">FLEXI_YES</option>
						</field>
						<field name="intro_image" type="fcimage" default="" label="FLEXI_IMAGE_SOURCE" description="FLEXI_IMAGE_SOURCE_DESC"/>
						<field name="intro_position" type="radio" default="" label="FLEXI_IMAGE_POSITION" description="FLEXI_IMAGE_POSITION_DESC" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_IMAGE_LEFT</option>
							<option value="1">FLEXI_IMAGE_RIGHT</option>
						</field>		
						<field name="intro_link_image" type="radio" default="" label="FLEXI_LINK_IMAGE" description="FLEXI_LINK_IMAGE_DESC" class="btn-group">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_NO</option>
							<option value="1">FLEXI_YES</option>
						</field>
						<field name="intro_link_image_to" type="radio" default="" label="Link to" description="If you are using an image field then you may use the custom link add to the image" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_ITEM</option>
							<option value="1">Custom link (image field)</option>
						</field>
						<field name="intro_image_size" type="radio" default="" label="FLEXI_INTRO_IMAGE_SIZE" description="FLEXI_INTRO_IMAGE_SIZE_DESC" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_PARAMS</option>
							<option value="s">FLEXI_SMALL</option>
							<option value="m">FLEXI_MEDIUM</option>
							<option value="l">FLEXI_LARGE</option>
							<option value="o">FLEXI_ORIGINAL</option>
						</field>
						<field name="intro_width" type="text" size="4" default="" label="FLEXI_IMAGE_WIDTH" description="FLEXI_IMAGE_WIDTH"/>
						<field name="intro_height" type="text" size="4" default="" label="FLEXI_IMAGE_HEIGHT" description="FLEXI_IMAGE_HEIGHT"/>
						<field name="intro_method" type="radio" default="" label="FLEXI_PROCESSING_METHOD" description="FLEXI_PROCESSING_METHOD" class="btn-group group-fcinfo">
							<option value="">FLEXI_USE_GLOBAL</option>
							<option value="0">FLEXI_SCALE</option>
							<option value="1">FLEXI_CROP</option>
						</field>
						<field name="intro_default_images" type="textarea" default="" label="FLEXI_TMPL_CORE-NEWS_DEFAULT_IMAGES" description="FLEXI_TMPL_CORE-NEWS_DEFAULT_IMAGES_DESC"/>

				<field name="items_tabset_standard_end" type="separator" default="ITEMS_FEATURED_TABSET" level="tabset_close"/>


			<field name="items_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close" box_type="1"/>

		</fieldset>
	</fields>

	<fieldgroups>
		<group>above-description-line1</group>
		<group>above-description-line1-nolabel</group>
		<group>above-description-line2</group>
		<group>above-description-line2-nolabel</group>
		<group>under-description-line1</group>
		<group>under-description-line1-nolabel</group>
		<group>under-description-line2</group>
		<group>under-description-line2-nolabel</group>
		<group>renderonly</group>
	</fieldgroups>
	<csscategory>
		<file>css/category.css</file>
	</csscategory>
	<jscategory>
	</jscategory>	
</form>
";s:6:"author";s:17:"FLEXIcontent Team";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:21:"info@flexicontent.org";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.0";s:7:"release";s:16:"15 November 2017";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:43:"FLEXI_TMPL_CORE-NEWS_CATEGORY_DEFAULT_TITLE";s:11:"description";s:40:"FLEXI_TMPL_CORE-NEWS_CATEGORY_SHORT_DESC";s:10:"attributes";a:9:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:0:{}i:4;a:0:{}i:5;a:0:{}i:6;a:0:{}i:7;a:0:{}i:8;a:0:{}}s:9:"positions";a:9:{i:0;s:23:"above-description-line1";i:1;s:31:"above-description-line1-nolabel";i:2;s:23:"above-description-line2";i:3;s:31:"above-description-line2-nolabel";i:4;s:23:"under-description-line1";i:5;s:31:"under-description-line1-nolabel";i:6;s:23:"under-description-line2";i:7;s:31:"under-description-line2-nolabel";i:8;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:64:"components/com_flexicontent/templates/core-news/css/category.css";}s:10:"less_files";a:1:{i:0;s:18:"less/category.less";}}s:7:"default";O:8:"stdClass":20:{s:4:"name";s:7:"default";s:7:"xmlpath";s:72:"/var/www/html/components/com_flexicontent/templates/default/category.xml";s:8:"xmlmtime";i:1614603817;s:4:"view";s:8:"category";s:7:"tmplvar";s:17:".category.default";s:5:"thumb";s:58:"components/com_flexicontent/templates/default/category.png";s:6:"params";s:9659:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_DEFAULT_CATEGORY_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_DEFAULT_CATEGORY_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>

			<!--field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2" /-->

			<field name="htmlmode" type="multilist" subtype="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group group-fcinfo">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>

			<field name="item_tabset_start" type="separator" default="ITEM_TABSET" level="tabset_start"/>

			<field name="item_tab_standard" type="separator" default="FLEXI_TMPL_BASIC_TAB" description="" icon_class="icon-list" level="tab_open" box_type="1"/>

			<field name="disp_params" type="separator" default="FLEXI_DISPLAY" level="level1"/>
			<field name="show_field_labels_row" type="radio" default="" label="FLEXI_SHOW_LABELS_ROW" description="FLEXI_SHOW_LABELS_ROW_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="customize_titlecol_header" type="radio" default="" label="FLEXI_CUSTOMIZE_TITLE_COLUMN_HEADER" description="FLEXI_CUSTOMIZE_TITLE_COLUMN_HEADER_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>
			<field name="titlecol_header_text" type="text" default="" label="FLEXI_TITLE_COLUMN_HEADER_TEXT" description="FLEXI_TITLE_COLUMN_HEADER_TEXT_DESC"/>
			<field name="togglable_table_cols" type="radio" default="" label="FLEXI_TMPL_DEFAULT_TOGGLABLE_TABLE_COLS" description="FLEXI_TMPL_DEFAULT_TOGGLABLE_TABLE_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_NO</option>
				<option value="1">FLEXI_YES</option>
			</field>

			<field name="item_tab_title" type="separator" default="FLEXI_TMPL_ITEM_TITLE_TAB" description="" icon_class="icon-brush" level="tab_open" box_type="1"/>

			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>

			<field name="item_title_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="title_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="item_title_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="title_pad_top" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_left" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_right" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="title_pad_bottom" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="item_title_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="title_border_radius" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>

			<field name="item_tab_label" type="separator" default="FLEXI_TMPL_LABELS_TAB" description="" icon_class="icon-brush" level="tab_open" box_type="1"/>

			<field name="label_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_LABEL_STYLING" description="" level="level2"/>

			<field name="label_colors_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_COLORS" description="" level="level3"/>
			<field name="label_txt_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="label_bg_color" type="color" cssprep="less" hint="#999999" default="#999999" required="true" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="label_pad_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_PADDING" description="" level="level3"/>
			<field name="label_pad_top" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_TOP" description="FLEXI_TMPL_PADDING_TOP_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_left" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_LEFT" description="FLEXI_TMPL_PADDING_LEFT_DESC" min="10" max="80" step="1"/>
			<field name="label_pad_right" type="number" cssprep="less" hint="4" default="4" required="true" label="FLEXI_TMPL_PADDING_RIGHT" description="FLEXI_TMPL_PADDING_RIGHT_DESC" min="0" max="80" step="1"/>
			<field name="label_pad_bottom" type="number" cssprep="less" hint="2" default="2" required="true" label="FLEXI_TMPL_PADDING_BOTTOM" description="FLEXI_TMPL_PADDING_BOTTOM_DESC" min="0" max="80" step="1"/>

			<field name="label_border_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_BORDER" description="" level="level3"/>
			<field name="label_radius" type="number" cssprep="less" hint="3" default="3" required="true" label="FLEXI_TMPL_BORDER_RADIUS" description="FLEXI_TMPL_BORDER_RADIUS_DESC" min="0" max="80" step="1"/>


			<field name="item_tab_th" type="separator" default="FLEXI_TMPL_TH_TAB" description="" icon_class="icon-brush" level="tab_open" box_type="1"/>

			<field name="th_options_grp" type="separator" default="FLEXI_TMPL_TH_OPTION" level="level2"/>
			<field name="th_txt_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_COLOR" description="FLEXI_TMPL_COLOR_DESC"/>
			<field name="th_bg_color" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_BACKGROUND" description="FLEXI_TMPL_BACKGROUND_DESC"/>

			<field name="item_tab_td" type="separator" default="FLEXI_TMPL_TD_TAB" description="" icon_class="icon-brush" level="tab_open" box_type="1"/>

			<field name="td_options_grp" type="separator" default="FLEXI_TMPL_TD_OPTION" level="level2"/>

			<field name="td_border_color" type="color" cssprep="less" hint="#dadada" default="#dadada" required="true" label="FLEXI_TMPL_BORDER_COLOR" description="FLEXI_TMPL_BORDER_COLOR_DESC"/>
			<field name="td_border_size" type="number" cssprep="less" hint="0" default="0" required="true" label="FLEXI_TMPL_BORDER_WIDTH" description="FLEXI_TMPL_BORDER_WIDTH_DESC" min="0" max="80" step="1"/>
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="td_txt_align" type="radio" cssprep="less" default="inherit" label="FLEXI_TMPL_TXT_ALIGN" description="FLEXI_TMPL_TXT_ALIGN_DESC" filter="int" class="btn-group btn-group-yesno">
				<option value="inherit">Inherit</option>
				<option value="left">Left</option>
				<option value="right">Right</option>
				<option value="center">Center</option>
			</field>

			<field name="table_color_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABLE_STYLING" description="" level="level2"/>
			<field name="table_row0_bg_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_TABLE_ROW0_BG" description="FLEXI_TMPL_TABLE_ROW0_BG_DESC"/>
			<field name="table_row1_bg_color" type="color" cssprep="less" hint="#f7f7f7" default="#f7f7f7" required="true" label="FLEXI_TMPL_TABLE_ROW1_BG" description="FLEXI_TMPL_TABLE_ROW0_BG_DESC"/>
			<field name="table_value_color" type="color" cssprep="less" hint="#555555" default="#555555" required="true" label="FLEXI_TMPL_TABLE_TEXT_COLOR" description="FLEXI_TMPL_TABLE_TEXT_COLOR_DESC"/>

			<field name="td_bg_hoverbgcolor" type="color" cssprep="less" default="inherit" label="FLEXI_TMPL_HOVER_BG_COLOR" description="FLEXI_TMPL_HOVER_BG_COLOR_DESC"/>

			<field name="item_tabset_end" type="separator" default="ITEM_TABSET" level="tabset_close"/>

		</fieldset>
	</fields>
	
	<fieldgroups>
		<group>table</group>
		<group>renderonly</group>
	</fieldgroups>
	<csscategory>
		<file>css/category.css</file>
	</csscategory>
	<jscategory>
	</jscategory>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:41:"FLEXI_TMPL_DEFAULT_CATEGORY_DEFAULT_TITLE";s:11:"description";s:38:"FLEXI_TMPL_DEFAULT_CATEGORY_SHORT_DESC";s:10:"attributes";a:2:{i:0;a:0:{}i:1;a:0:{}}s:9:"positions";a:2:{i:0;s:5:"table";i:1;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:62:"components/com_flexicontent/templates/default/css/category.css";}s:10:"less_files";a:1:{i:0;s:18:"less/category.less";}}s:3:"faq";O:8:"stdClass":20:{s:4:"name";s:3:"faq";s:7:"xmlpath";s:68:"/var/www/html/components/com_flexicontent/templates/faq/category.xml";s:8:"xmlmtime";i:1614603818;s:4:"view";s:8:"category";s:7:"tmplvar";s:13:".category.faq";s:5:"thumb";s:54:"components/com_flexicontent/templates/faq/category.png";s:6:"params";s:2827:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>
	
	<defaulttitle>FLEXI_TMPL_FAQ_CATEGORY_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_FAQ_CATEGORY_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="disp_params" type="separator" default="FLEXI_CATEGORY_INFO" level="level2"/>
			<field name="descr_cut_text" type="text" size="3" default="" label="FLEXI_CATDESCR_MAXLEN" description="FLEXI_CATDESCR_MAXLEN_DESC"/>
			
			<field name="subcat_conf" type="separator" default="FLEXI_SUBCATEGORIES" level="level2"/>
			<field name="descr_cut_text_subcat" type="text" size="3" default="" label="FLEXI_CATDESCR_MAXLEN" description="FLEXI_CATDESCR_MAXLEN_DESC"/>
			<field name="tmpl_cols" type="radio" default="" label="FLEXI_SUBCAT_COLS" description="FLEXI_SUBCAT_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="1">FLEXI_1_COL</option>
				<option value="2">FLEXI_2_COLS</option>
				<option value="3">FLEXI_3_COLS</option>
				<option value="4">FLEXI_4_COLS</option>
			</field>
			<field name="cols_placement" type="radio" default="" label="FLEXI_TMPL_FAQ_COLS_PLACEMENT" description="FLEXI_TMPL_FAQ_COLS_PLACEMENT_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_CLEARED</option>
				<option value="1">FLEXI_AS_MASONRY_TILES</option>
			</field>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="htmlmode" type="multilist" subtype="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group group-fcinfo">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
			
		</fieldset>
	</fields>
	
	<fieldgroups>
		<group readonly="true">subcategory_title</group>
		<group readonly="true">subcategory_description</group>
		<group>aftertitle</group>
		<group>aftertitle_nolabel</group>
		<group>aftertitle2</group>
		<group>aftertitle_nolabel2</group>
		<group>aftertitle3</group>
		<group>aftertitle_nolabel3</group>
	</fieldgroups>
	<csscategory>
		<file>css/category.css</file>
	</csscategory>
	<jscategory>
	</jscategory>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:37:"FLEXI_TMPL_FAQ_CATEGORY_DEFAULT_TITLE";s:11:"description";s:34:"FLEXI_TMPL_FAQ_CATEGORY_SHORT_DESC";s:10:"attributes";a:8:{i:0;a:1:{s:8:"readonly";s:4:"true";}i:1;a:1:{s:8:"readonly";s:4:"true";}i:2;a:0:{}i:3;a:0:{}i:4;a:0:{}i:5;a:0:{}i:6;a:0:{}i:7;a:0:{}}s:9:"positions";a:8:{i:0;s:17:"subcategory_title";i:1;s:23:"subcategory_description";i:2;s:10:"aftertitle";i:3;s:18:"aftertitle_nolabel";i:4;s:11:"aftertitle2";i:5;s:19:"aftertitle_nolabel2";i:6;s:11:"aftertitle3";i:7;s:19:"aftertitle_nolabel3";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:58:"components/com_flexicontent/templates/faq/css/category.css";}s:10:"less_files";a:1:{i:0;s:18:"less/category.less";}}s:12:"items-tabbed";O:8:"stdClass":20:{s:4:"name";s:12:"items-tabbed";s:7:"xmlpath";s:77:"/var/www/html/components/com_flexicontent/templates/items-tabbed/category.xml";s:8:"xmlmtime";i:1614603819;s:4:"view";s:8:"category";s:7:"tmplvar";s:22:".category.items-tabbed";s:5:"thumb";s:63:"components/com_flexicontent/templates/items-tabbed/category.png";s:6:"params";s:3526:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_ITEMSTABBED_CATEGORY_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_ITEMSTABBED_CATEGORY_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="Title color" description="Color of title"/>
			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			
			<field name="field_cols_grp" type="separator" cssprep="1" default="Field columns" description="" level="level2"/>
			<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			
			<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
			<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
			<field name="tab_bg_color_start" type="color" cssprep="less" hint="#3093c7" default="#3093c7" required="true" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
			<field name="tab_bg_color_end" type="color" cssprep="less" hint="#1c5a85" default="#1c5a85" required="true" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
			<field name="tab_title_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="htmlmode" type="multilist" subtype="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group group-fcinfo">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
			
		</fieldset>
	</fields>
	
	<fieldgroups>
		<group>subtitle1</group>
		<group>subtitle2</group>
		<group>subtitle3</group>
		<group posrow="img_top">image</group>
		<group posrow="img_top">top</group>
		<group>description</group>
		<group>bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<csscategory>
		<file>css/category.css</file>
	</csscategory>
	<jscategory>
	</jscategory>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:45:"FLEXI_TMPL_ITEMSTABBED_CATEGORY_DEFAULT_TITLE";s:11:"description";s:42:"FLEXI_TMPL_ITEMSTABBED_CATEGORY_SHORT_DESC";s:10:"attributes";a:8:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:1:{s:6:"posrow";s:7:"img_top";}i:4;a:1:{s:6:"posrow";s:7:"img_top";}i:5;a:0:{}i:6;a:0:{}i:7;a:0:{}}s:9:"positions";a:8:{i:0;s:9:"subtitle1";i:1;s:9:"subtitle2";i:2;s:9:"subtitle3";i:3;s:5:"image";i:4;s:3:"top";i:5;s:11:"description";i:6;s:6:"bottom";i:7;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:67:"components/com_flexicontent/templates/items-tabbed/css/category.css";}s:10:"less_files";a:1:{i:0;s:18:"less/category.less";}}s:12:"presentation";O:8:"stdClass":20:{s:4:"name";s:12:"presentation";s:7:"xmlpath";s:77:"/var/www/html/components/com_flexicontent/templates/presentation/category.xml";s:8:"xmlmtime";i:1614603820;s:4:"view";s:8:"category";s:7:"tmplvar";s:22:".category.presentation";s:5:"thumb";s:63:"components/com_flexicontent/templates/presentation/category.png";s:6:"params";s:9382:"<?xml version="1.0" encoding="utf-8"?>
<form>
	<author>Emmanuel Danan, George Papadakis</author>
	<website>www.flexicontent.org</website>
	<email>emmanuel@vistamedia.fr</email>
	<license>GPLv3</license>
	<version>1.2</version>
	<release>20 May 2014</release>
	<microdata_support>1</microdata_support>

	<defaulttitle>FLEXI_TMPL_PRESENTATION_CATEGORY_DEFAULT_TITLE</defaulttitle>
	<description>FLEXI_TMPL_PRESENTATION_CATEGORY_SHORT_DESC</description>

	<fields name="attribs">
		<fieldset name="attribs" addfieldpath="/administrator/components/com_flexicontent/elements">

			<field name="custom_layout_title" type="text" size="3" not_inherited="1" default="" label="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE" description="FLEXI_LAYOUT_CUSTOM_DISPLAY_TITLE_DESC"/>
			
			<field name="title_grp" type="separator" cssprep="1" default="FLEXI_TMPL_ITEM_TITLE" description="" level="level2"/>
			<field name="title_color" type="color" cssprep="less" default="inherit" label="Title color" description="Color of title"/>
			<field name="title_cut_text" type="text" size="3" default="" label="FLEXI_TITLE_MAXLEN" description="FLEXI_TITLE_MAXLEN_DESC"/>
			
			<field name="field_cols_grp" type="separator" cssprep="1" default="Field columns" description="" level="level2"/>
			<field name="top_cols" type="radio" default="" label="FLEXI_ITEM_TOP_COLS" description="FLEXI_ITEM_TOP_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			<field name="bottom_cols" type="radio" default="" label="FLEXI_ITEM_BOTTOM_COLS" description="FLEXI_ITEM_BOTTOM_COLS_DESC" class="btn-group btn-group-yesno">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="one">FLEXI_1_COL</option>
				<option value="two">FLEXI_2_COLS</option>
			</field>
			
			<field name="tab_styling_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_STYLING" description="" level="level2"/>
			<field name="tab_handles_grp" type="separator" cssprep="1" default="FLEXI_TMPL_TABS_HANDLES" description="" level="level3"/>
			<field name="tab_bg_color_start" type="color" cssprep="less" hint="#3093c7" default="#3093c7" required="true" label="FLEXI_TMPL_TAB_BG_START" description="FLEXI_TMPL_TAB_BG_START_DESC"/>
			<field name="tab_bg_color_end" type="color" cssprep="less" hint="#1c5a85" default="#1c5a85" required="true" label="FLEXI_TMPL_TAB_BG_END" description="FLEXI_TMPL_TAB_BG_END_DESC"/>
			<field name="tab_title_color" type="color" cssprep="less" hint="#ffffff" default="#ffffff" required="true" label="FLEXI_TMPL_TAB_TITLE_COLOR" description="FLEXI_TMPL_TAB_TITLE_COLOR_DESC"/>
			
			<field name="subtitle_tabs_grp" type="separator" default="SubTitle Tabs" description="" level="level2"/>
			<field name="subtitle_tab1_label" type="text" default="" label="Label for Tab 1" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab2_label" type="text" default="" label="Label for Tab 2" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab3_label" type="text" default="" label="Label for Tab 3" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab4_label" type="text" default="" label="Label for Tab 4" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab5_label" type="text" default="" label="Label for Tab 5" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab6_label" type="text" default="" label="Label for Tab 6" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab7_label" type="text" default="" label="Label for Tab 7" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab8_label" type="text" default="" label="Label for Tab 8" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab9_label" type="text" default="" label="Label for Tab 9" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab10_label" type="text" default="" label="Label for Tab 10" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab11_label" type="text" default="" label="Label for Tab 11" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="subtitle_tab12_label" type="text" default="" label="Label for Tab 12" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			
			<field name="bottom_tabs_grp" type="separator" default="Bottom Tabs" description="" level="level2"/>
			<field name="bottom_tab1_label" type="text" default="" label="Label for Tab 1" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab2_label" type="text" default="" label="Label for Tab 2" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab3_label" type="text" default="" label="Label for Tab 3" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab4_label" type="text" default="" label="Label for Tab 4" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab5_label" type="text" default="" label="Label for Tab 5" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab6_label" type="text" default="" label="Label for Tab 6" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab7_label" type="text" default="" label="Label for Tab 7" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab8_label" type="text" default="" label="Label for Tab 8" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab9_label" type="text" default="" label="Label for Tab 9" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab10_label" type="text" default="" label="Label for Tab 10" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab11_label" type="text" default="" label="Label for Tab 11" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			<field name="bottom_tab12_label" type="text" default="" label="Label for Tab 12" description="The text for this label is filter via JText (you can add to your ini language files)"/>
			
			<field name="templatehtmlmode" type="separator" default="FLEXI_TEMPLATE_HTML_MODE" level="level2"/>
			<field name="htmlmode" type="multilist" subtype="radio" default="" label="FLEXI_HTML_MODE" description="FLEXI_HTML_MODE_DESC" filter="int" class="btn-group group-fcinfo">
				<option value="">FLEXI_USE_GLOBAL</option>
				<option value="0">FLEXI_XHTML</option>
				<option value="1">FLEXI_HTML5</option>
			</field>
			
		</fieldset>
	</fields>
	
	<fieldgroups>
		<group>subtitle1</group>
		<group>subtitle2</group>
		<group>subtitle3</group>
		<group posrow="subtitle">subtitle_tab1</group>
		<group posrow="subtitle">subtitle_tab2</group>
		<group posrow="subtitle">subtitle_tab3</group>
		<group posrow="subtitle">subtitle_tab4</group>
		<group posrow="subtitle">subtitle_tab5</group>
		<group posrow="subtitle">subtitle_tab6</group>
		<group posrow="subtitle_wrap2">subtitle_tab7</group>
		<group posrow="subtitle_wrap2">subtitle_tab8</group>
		<group posrow="subtitle_wrap2">subtitle_tab9</group>
		<group posrow="subtitle_wrap2">subtitle_tab10</group>
		<group posrow="subtitle_wrap2">subtitle_tab11</group>
		<group posrow="subtitle_wrap2">subtitle_tab12</group>
		<group posrow="img_top">image</group>
		<group posrow="img_top">top</group>
		<group>description</group>
		<group posrow="bottom">bottom_tab1</group>
		<group posrow="bottom">bottom_tab2</group>
		<group posrow="bottom">bottom_tab3</group>
		<group posrow="bottom">bottom_tab4</group>
		<group posrow="bottom">bottom_tab5</group>
		<group posrow="bottom">bottom_tab6</group>
		<group posrow="bottom_wrap2">bottom_tab7</group>
		<group posrow="bottom_wrap2">bottom_tab8</group>
		<group posrow="bottom_wrap2">bottom_tab9</group>
		<group posrow="bottom_wrap2">bottom_tab10</group>
		<group posrow="bottom_wrap2">bottom_tab11</group>
		<group posrow="bottom_wrap2">bottom_tab12</group>
		<group>bottom</group>
		<group>renderonly</group>
	</fieldgroups>
	<csscategory>
		<file>css/category.css</file>
	</csscategory>
	<jscategory>
	</jscategory>	
</form>
";s:6:"author";s:32:"Emmanuel Danan, George Papadakis";s:7:"website";s:20:"www.flexicontent.org";s:5:"email";s:22:"emmanuel@vistamedia.fr";s:7:"license";s:5:"GPLv3";s:7:"version";s:3:"1.2";s:7:"release";s:11:"20 May 2014";s:17:"microdata_support";s:1:"1";s:12:"defaulttitle";s:46:"FLEXI_TMPL_PRESENTATION_CATEGORY_DEFAULT_TITLE";s:11:"description";s:43:"FLEXI_TMPL_PRESENTATION_CATEGORY_SHORT_DESC";s:10:"attributes";a:32:{i:0;a:0:{}i:1;a:0:{}i:2;a:0:{}i:3;a:1:{s:6:"posrow";s:8:"subtitle";}i:4;a:1:{s:6:"posrow";s:8:"subtitle";}i:5;a:1:{s:6:"posrow";s:8:"subtitle";}i:6;a:1:{s:6:"posrow";s:8:"subtitle";}i:7;a:1:{s:6:"posrow";s:8:"subtitle";}i:8;a:1:{s:6:"posrow";s:8:"subtitle";}i:9;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:10;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:11;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:12;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:13;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:14;a:1:{s:6:"posrow";s:14:"subtitle_wrap2";}i:15;a:1:{s:6:"posrow";s:7:"img_top";}i:16;a:1:{s:6:"posrow";s:7:"img_top";}i:17;a:0:{}i:18;a:1:{s:6:"posrow";s:6:"bottom";}i:19;a:1:{s:6:"posrow";s:6:"bottom";}i:20;a:1:{s:6:"posrow";s:6:"bottom";}i:21;a:1:{s:6:"posrow";s:6:"bottom";}i:22;a:1:{s:6:"posrow";s:6:"bottom";}i:23;a:1:{s:6:"posrow";s:6:"bottom";}i:24;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:25;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:26;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:27;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:28;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:29;a:1:{s:6:"posrow";s:12:"bottom_wrap2";}i:30;a:0:{}i:31;a:0:{}}s:9:"positions";a:32:{i:0;s:9:"subtitle1";i:1;s:9:"subtitle2";i:2;s:9:"subtitle3";i:3;s:13:"subtitle_tab1";i:4;s:13:"subtitle_tab2";i:5;s:13:"subtitle_tab3";i:6;s:13:"subtitle_tab4";i:7;s:13:"subtitle_tab5";i:8;s:13:"subtitle_tab6";i:9;s:13:"subtitle_tab7";i:10;s:13:"subtitle_tab8";i:11;s:13:"subtitle_tab9";i:12;s:14:"subtitle_tab10";i:13;s:14:"subtitle_tab11";i:14;s:14:"subtitle_tab12";i:15;s:5:"image";i:16;s:3:"top";i:17;s:11:"description";i:18;s:11:"bottom_tab1";i:19;s:11:"bottom_tab2";i:20;s:11:"bottom_tab3";i:21;s:11:"bottom_tab4";i:22;s:11:"bottom_tab5";i:23;s:11:"bottom_tab6";i:24;s:11:"bottom_tab7";i:25;s:11:"bottom_tab8";i:26;s:11:"bottom_tab9";i:27;s:12:"bottom_tab10";i:28;s:12:"bottom_tab11";i:29;s:12:"bottom_tab12";i:30;s:6:"bottom";i:31;s:10:"renderonly";}s:3:"css";O:8:"stdClass":1:{s:1:"0";s:67:"components/com_flexicontent/templates/presentation/css/category.css";}s:10:"less_files";a:1:{i:0;s:18:"less/category.less";}}}}s:6:"output";s:0:"";}