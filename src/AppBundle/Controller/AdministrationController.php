<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use AppBundle\Entity\User;
use AppBundle\Form\UserType;

class AdministrationController extends Controller
{
	/**
	 * @Route("administration/users", name="app_administration_users")
	 * @Template()
	 */
	public function usersAction()
	{
		$em = $this->getDoctrine()->getManager();
		$users = $em->getRepository('AppBundle:User')->findAll();
		
		return $this->render('AppBundle:Administration:users.html.twig', array(
			'users'	=> $users
		));
	}
	
	/**
	 * @Route("administration/user/modal/new", name="app_administration_user_modal_new")
	 * @Template()
	 */
	public function userModalNewAction()
	{
		$user = new User();
		
		$form = $this->createForm(new UserType(), $user);
		
		return $this->render('AppBundle:Administration:userModal.html.twig', array(
			'form'	=> $form->createView(),
			'title'	=> 'Nowy użytkownik'
		));
	}
	
	/**
	 * @Route("administration/user/modal/edit/{id}", name="app_administration_user_modal_edit")
	 * @Template()
	 * 
	 * @param integer $id user id
	 */
	public function userModalEditAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('AppBundle:User')->find($id);
		
		$form = $this->createForm(new UserType(), $user);
		
		return $this->render('AppBundle:Administration:userModal.html.twig', array(
			'form'	=> $form->createView(),
			'title'	=> 'Użytkownik '.$user->getUsername()
		));
	}
}
