<?php

namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
	public function topMenu(FactoryInterface $factory, array $options)
	{
		$menu = $factory->createItem('root', array(
			'childrenAttributes'	=> array(
				'class'	=> 'nav navbar-nav navbar-right'
			)
		));

		$menu->addChild('Dashboard', array('route' => 'homepage'));
		$menu->addChild('Settings', array('uri'	=> '#'));
		$menu->addChild('Profile', array('uri'	=> '#'));
		$menu->addChild('Help', array('uri'	=> '#'));
		$menu->addChild('Logout', array('route' => 'fos_user_security_logout'));
		
		return $menu;
	}
	
	public function sidebarMenu(FactoryInterface $factory, array $option)
	{
		$menu = $factory->createItem('root', array(
			'childrenAttributes'	=> array(
				'class'	=> 'nav-sidebar'
			)
		));
		
		$menu->addChild('Administration', array(
			'label'	=> 'Administracja',
			'route'	=> 'homepage',
		));
			$menu['Administration']->addChild('Users', array(
				'label'	=> 'Użytkownicy',
				'route'	=>	'app_administration_users'
			));
			$menu['Administration']->addChild('Dictionary', array(
				'label'	=> 'Dane słownikowe',
				'route'	=> 'homepage'
			));
				$menu['Administration']['Dictionary']->addChild('Places', array(
					'label'	=> 'Miejsca',
					'route'	=> 'app_administration_dictionary_places'
				));
				$menu['Administration']['Dictionary']->addChild('Place types', array(
					'label'	=> 'Typy miejsc',
					'route'	=> 'app_administration_dictionary_place_types'
				));
		
		return $menu;
	}
}