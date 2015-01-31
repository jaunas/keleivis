<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use AppBundle\Entity\Place;
use AppBundle\Form\PlaceType as PlaceForm;
use AppBundle\Entity\PlaceType;
use AppBundle\Form\PlaceTypeType;

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
	 * @Route("administration/user/modal/info/{id}", name="app_administration_user_modal_info")
	 * @Template()
	 * 
	 * @param integer $id user id
	 */
	public function userModalInfoAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('AppBundle:User')->find($id);
		
		return $this->render('AppBundle:Administration:userModalInfo.html.twig', array(
			'user'	=> $user
		));
	}
	
//	/**
//	 * @Route("administration/user/modal/roles/{id}", name="app_administration_user_modal_roles")
//	 * @Template()
//	 * 
//	 * @param Request $request
//	 * @param integer $id user id
//	 */
//	public function userModalRolesAction(Request $request, $id)
//	{
//		$em = $this->getDoctrine()->getManager();
//		$user = $em->getRepository('AppBundle:User')->find($id);
//		
//		$form = $this->createForm(new UserRoleType(), $user, array(
//			'action'	=> $this->generateUrl('app_administration_user_modal_roles', array('id'=>$id))
//		));
//
//		if ($request->isMethod('POST')) {
//			$form->bind($request);
//			if ($form->isValid()) {
//				$em->persist($user);
//				$em->flush();
//				
//				return new JsonResponse(array(
//					'success'	=> true
//				));
//			}
//		}
//		
//		return $this->render('AppBundle:administration:userModalRole.html.twig', array(
//			'form'	=> $form->createView()
//		));
//	}
	
	/**
	 * @Route("administration/user/modal/delete/{id}", name="app_administration_user_modal_delete")
	 * @Template()
	 * 
	 * @param integer $id user id
	 */
	public function userModalDeleteAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('AppBundle:User')->find($id);
		
		return $this->render('AppBundle:administration:userModalDelete.html.twig', array(
			'user'	=> $user
		));
	}
	
	/**
	 * @Route("administration/user/delete/{id}", name="app_administration_user_delete")
	 * @Template()
	 * 
	 * @param integer $id user id
	 */
	public function userDeleteAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('AppBundle:User')->find($id);
		
		$em->remove($user);
		$em->flush();
		
		return new JsonResponse(array(
			'success'	=> true
		));
	}
	
	/**
	 * @Route("administration/dictionary/places", name="app_administration_dictionary_places")
	 * @Template()
	 */
	public function dictionaryPlacesAction()
	{
		$em = $this->getDoctrine()->getManager();
		$places = $em->getRepository('AppBundle:Place')->findAll();
		
		return $this->render('AppBundle:Administration:dictionaryPlaces.html.twig', array(
			'places'	=> $places
		));
	}
	
	/**
	 * @Route("administration/dictionary/place/modal/add", name="app_administration_dictionary_place_add")
	 * @Template()
	 */
	public function dictionaryPlaceModalAddAction()
	{
		$place = new Place();
		
		$form = $this->createForm(new PlaceForm(), $place);
		
		return $this->render('AppBundle:Administration:dictionaryPlaceModalForm.html.twig', array(
			'form'	=> $form->createView()
		));
	}
	
	/**
	 * @Route("administration/dictionary/placeTypes", name="app_administration_dictionary_place_types")
	 * @Template()
	 */
	public function dictionaryPlaceTypesAction()
	{
		$em = $this->getDoctrine()->getManager();
		$placeTypes = $em->getRepository('AppBundle:PlaceType')->findAll();
		
		return $this->render('AppBundle:Administration:dictionaryPlaceTypes.html.twig', array(
			'placeTypes'	=> $placeTypes
		));
	}
	
	/**
	 * @Route("administration/dictionary/placeTypes/table", name="app_administration_dictionary_place_types_table")
	 * @Template()
	 */
	public function dictionaryPlaceTypesTableAction()
	{
		$em = $this->getDoctrine()->getManager();
		$placeTypes = $em->getRepository('AppBundle:PlaceType')->findAll();
		
		return $this->render('AppBundle:Administration:dictionaryPlaceTypesTable.html.twig', array(
			'placeTypes'	=> $placeTypes
		));
	}
	
	/**
	 * @Route("administration/dictionary/placeType/{id}", name="app_administration_dictionary_place_type")
	 * @Template()
	 * 
	 * @param Request $request
	 * @param integer $id user id
	 */
	public function dictionaryPlaceTypeAction(Request $request, $id = 0)
	{
		$em = $this->getDoctrine()->getManager();
		
		if ($id) {
			$placeType = $em->getRepository('AppBundle:PlaceType')->find($id);
		} else {
			$placeType = new PlaceType();
		}
		
		$form = $this->createForm(new PlaceTypeType(), $placeType, array(
			'action'	=> $this->generateUrl('app_administration_dictionary_place_type', array('id'=>$id)),
			'method'	=> 'POST',
			'attr'		=> array(
				'refresh_path' => $this->generateUrl('app_administration_dictionary_place_types_table')
			)
		));
		
		if ($request->isMethod('POST')) {
			$form->bind($request);

			if ($form->isValid()) {
				$em->persist($placeType);
				$em->flush();

				return new JsonResponse(array(
						'success'	=> true
					));
			}
		}
		
		return $this->render('AppBundle:Administration:dictionaryPlaceTypeModalForm.html.twig', array(
			'form'		=> $form->createView(),
			'action'	=> $id ? 'edit' : 'add'
		));
	}
}
