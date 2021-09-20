<?php
/**
 * Custom Search form
 *
 * fashionate theme
 */
?>
<form method="get" class="search-form custom-search" action="<?php echo esc_url( home_url( '/' )); ?>">

    <input type="search" class="search-field " placeholder="<?php esc_attr_e('Search', 'fashionate');?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php esc_attr_e('Search for:', 'fashionate');?>" />


    <button type="submit" class="fa fa-search search-submit">	</button>
</form>
