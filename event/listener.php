<?php
/**
 *
 * @package scrollBtn
 * @copyright (c) 2014
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace scalolaz\phpbb3_scrollBtn\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
	/** @var \phpbb\template\template */
	protected $template;
	
	/** @var \phpbb\user */
	protected $user;
	
	/** @var \phpbb\db\driver\driver_interface */
	protected $db;
	
	/** @var string */
	protected $phpbb_root_path;
	protected $php_ext;
	
	/**
	* Constructor
	* 
	* @param \phpbb\template\template $template
	* @param \phpbb\user $user
	*/
	
	public function __construct(\phpbb\template\template $template, \phpbb\user $user, \phpbb\db\driver\driver_interface $db, $phpbb_root_path, $php_ext)
	{
		$this->template = $template;
		$this->user = $user;
		$this->db = $db;
		$this->phpbb_root_path = $phpbb_root_path;
		$this->php_ext = $php_ext;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'					=> 'load_language_on_setup',
		);
	}
   
   	public function load_language_on_setup($event) {
	/*
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'tatiana5/profile_side_switcher',
			'lang_set' => 'profile_side_switcher',
		);
		$event['lang_set_ext'] = $lang_set_ext;
		
		$this->template->assign_vars(array(
			'S_PSS_LEFT'	=> $this->user->data['allow_pss_left'],
		));
	*/
	}
	
    public function page_header_before($event)
    {
     //   $this->user->add_lang_ext('scalolaz/phpbb3_scrollBtn', 'scroll_btn');

     //   $this->template->assign_vars(array(
	//	
	//	));    
    }
  
  
}
