<?php

class CleanCommentsWalker
{
    public function start_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= '<ul class="children">' . "\n";
    }
    
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
        $output .= "</ul><!-- .children -->\n";
    }
    
    protected function comment($comment, $depth, $args)
    {
        $classes = implode(' ', get_comment_class()) . ($comment->comment_author_email == get_the_author_meta('email') ? ' author-comment' : '');
        echo '<li id="comment-' . get_comment_ID() . '" class="' . $classes . ' media">' . "\n";
        echo '<div class="media-left">' . get_avatar($comment, 64, '', get_comment_author(), array('class' => 'media-object')) . "</div>\n";
        echo '<div class="media-body">';
        echo '<span class="meta media-heading">Автор: ' . get_comment_author() . "\n";
        
        echo ' ' . get_comment_author_url();
        echo ' Добавлено ' . get_comment_date('F j, Y в H:i') . "\n";
        if ('0' == $comment->comment_approved) {
            echo '<br><em class="comment-awaiting-moderation">Ваш комментарий будет опубликован после проверки модератором.</em>' . "\n";
        }
        echo "</span>";
        comment_text() . "\n";
        $reply_link_args = array(
            'depth'      => $depth,
            'reply_text' => 'Ответить',
            'login_text' => 'Вы должны быть залогинены'
        );
        echo get_comment_reply_link(array_merge($args, $reply_link_args));
        echo '</div>' . "\n";
    }
    
    public function end_el(&$output, $comment, $depth = 0, $args = array())
    {
        $output .= "</li><!-- #comment-## -->\n";
    }
}