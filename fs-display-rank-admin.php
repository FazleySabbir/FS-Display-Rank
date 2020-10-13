<?php
	class fs_display_rank_admin {

		function option_default($option) {
			switch($option) {
				case 'fs_display_rank_level':
					return true;
				case 'fs_display_rank_asker':
				    return true;
				default:
					return null;				
			}
			
		}
		
		function allow_template($template)
		{
			return ($template!='admin');
		}	   
			
		function admin_form(&$qa_content)
		{				
			
			$ok = null;
			
			if (qa_clicked('fs_display_rank_save')) {
				
				
				
					qa_opt('fs_display_rank_enable',(bool)qa_post_text('fs_display_rank_enable'));
					qa_opt('fs_display_rank_level',(bool)qa_post_text('fs_display_rank_level'));
					qa_opt('fs_display_rank_asker',(bool)qa_post_text('fs_display_rank_asker'));
					
					
					$ok = 'Settings Saved.';
				
			}
			
			$fields = array();
			
			$fields[] = array(
				'label' => 'Enable FS Display Rank Plugin',
				'tags' => 'NAME="fs_display_rank_enable"',
				'value' => qa_opt('fs_display_rank_enable'),
				'type' => 'checkbox',
			);
			
			$fields[] = array(
				'label' => 'Show user level after name',
				'tags' => 'NAME="fs_display_rank_level"',
				'value' => qa_opt('fs_display_rank_level'),
				'type' => 'checkbox',
				'note' => 'If this box is checked, the level name of the user will be shown after name.',
			);
			$fields[] = array(
				'label' => 'Show (Asker) badge after name in question page',
				'tags' => 'NAME="fs_display_rank_asker"',
				'value' => qa_opt('fs_display_rank_asker'),
				'type' => 'checkbox',
				'note' => 'If this box is checked, the badge (Asker) will be shown after name of answer or comment if he is the asker of the question.',
			);
			
			
		  

			return array(		   
				'ok' => $ok ? $ok : null,
			
				
				'fields' => $fields,
			 
				'buttons' => array(
					array(
						'label' => 'Save',
						'tags' => 'NAME="fs_display_rank_save"',
						'note' => 'Developed by <a href="https://github.com/FazleySabbir">Fazley Sabbir</a>',
					)
				),
			);
		}
	}

