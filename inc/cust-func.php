<?php

// WP QUERY PAGINATION
function pag_link($query,$paged) {

  $big = 999999999; // need an unlikely integer

   $args = array(
  	// 'base'               => '%_%',
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  	'format'             => '?paged=%#%',
  	'total' => $query->max_num_pages,
  	'current' => max( 1, $paged ),
  	'show_all'           => false,
  	'end_size'           => 1,
  	'mid_size'           => 4,
  	'prev_next'          => true,
  	'prev_text'          => __('« Prev', 'xtra-link'),
  	'next_text'          => __('Next »', 'xtra-link'),
  	'type'               => 'plain',
  	'add_args'           => false,
  	'add_fragment'       => '',
    'before_page_number' => '<li>',
    'after_page_number' => '</li>'
  );

      echo paginate_links($args);
}

// Cust excerpt_length
function custom_excerpt_length( $length ) {
    return (is_home()) ? 40 : 20;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return sprintf( '<p><a href="%1$s"><i class="fa fa-link"></i>%2$s</a></p>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'xtra-link' )
    );
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

//Comments Template
add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );
function bootstrap3_comment_form_fields( $fields ) {
		$commenter = wp_get_current_commenter();

		$req      = get_option( 'require_name_email' );
		$aria_req = ( $req ? " aria-required='true'" : '' );
		$html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;

		$fields   =  array(
				'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name', 'xtra-link' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
										'<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
				'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email', 'xtra-link' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
										'<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
				'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website', 'xtra-link' ) . '</label> ' .
										'<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>'
		);

		return $fields;
}

//Comments Textarea
add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );
function bootstrap3_comment_form( $args ) {
		$args['comment_field'] = '<div class="form-group comment-form-comment">
						<label for="comment">' . __( 'Comment', 'xtra-link' ) . '</label>
						<textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
				</div>';
		$args['class_submit'] = 'btn btn-default'; // since WP 4.1

		return $args;
}