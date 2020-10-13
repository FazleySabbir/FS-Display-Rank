<?php

	class qa_html_theme_layer extends qa_html_theme_base {

	public function post_meta_who($post, $class)
	{
	if (qa_opt('fs_display_rank_enable')) {
	$text="";
		$text.=qa_opt('fs_display_rank_level') && !empty($post['raw']['level']) ? ' ('.qa_user_level_string($post['raw']['level']).')' : '';
		if (qa_opt('fs_display_rank_asker') && isset($post['raw']['parentid']) && $post['raw']['userid'] == $this->content['q_view']['raw']['userid']) {
				$text.=" (Asker)";
				}
		$post['who']['data'].=$text;
		}
		
	qa_html_theme_base::post_meta_who($post, $class);
	
	
	}
	}

