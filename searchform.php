<form role="search" method="get" class="input-group" action="<?php echo home_url( '/' ); ?>">
    
    <input type="text" class="form-control"
       placeholder="<?php _e( 'Search …', 'xtra-link' ) ?>"
       value="<?php echo get_search_query() ?>" name="s"
       title="<?php _e( 'Search for:', 'xtra-link' ) ?>" required/>

               <span class="input-group-btn">
                   <button class="btn btn-default" type="submit">
                       <span class="glyphicon glyphicon-search"></span>
                   </button>
               </span>
</form>
