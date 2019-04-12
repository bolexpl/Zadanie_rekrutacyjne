<?php

namespace App\Controller;

use App\Entity\Survey;
use App\Repository\SurveyRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;

class SurveyController extends Controller
{

    private $surveyReporitory;
    private $session;

    /**
     * SurveyController constructor.
     * @param $surveyReporitory
     */
    public function __construct(SurveyRepository $surveyReporitory)
    {
        $this->surveyReporitory = $surveyReporitory;
        $this->session = new Session();
    }

    /**
     * @Route("/", name="app_homepage")
     */
    public function home()
    {
        $usr = $this->getUser();

        $surveys = $this->getDoctrine()
            ->getRepository(Survey::class)
            ->findBy(['user' => $usr]);

        $checker = $this->get('security.authorization_checker');

        if ($checker->isGranted('ROLE_ADMIN')) {
            return $this->render('home.html.twig');

        } elseif (count($surveys) > 0) {
            return $this->render('home.html.twig', ['msg' => 'Masz już zapisaną ankietę']);

        } elseif ($checker->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirectToRoute('app_add');

        } else {
            return $this->redirectToRoute('app_login');

        }
    }

    /**
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     * @Route("/add", name="app_add")
     * @param Request $request
     * @return Response
     */
    public function add(Request $request)
    {
        $form = $this->createFormBuilder(null)
            ->add('firstname', TextType::class, ['label' => 'Imię'])
            ->add('lastname', TextType::class, ['label' => 'Nazwisko'])
            ->add('send', SubmitType::class, ['label' => 'Dalej'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $data = $form->getData();

            $this->session->set('firstname', $data['firstname']);
            $this->session->set('lastname', $data['lastname']);

            return $this->redirectToRoute('app_add2');
        }

        return $this->render(
            'surveys/new_survey.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @IsGranted("IS_AUTHENTICATED_FULLY")
     * @Route("/add2", name="app_add2")
     * @param Request $request
     * @return Response
     */
    public function add2(Request $request)
    {
        $form = $this->createFormBuilder(null)
            ->add('age', IntegerType::class, ['label' => 'Wiek'])
            ->add('send', SubmitType::class, ['label' => 'Wyślij'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted()
            && $form->isValid()
            && $this->session->has('firstname')) {

            $data = $form->getData();

            $survey = new Survey();
            $survey->setFirstName($this->session->get('firstname'));
            $survey->setLastName($this->session->get('lastname'));
            $survey->setAge($data['age']);

            $usr = $this->getUser();
            $survey->setUser($usr);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($survey);
            $entityManager->flush();

            $this->session->remove('firstname');
            $this->session->remove('lastname');

            return $this->render(
                'home.html.twig',
                ['msg' => 'Zapisano dane ankiety']
            );
        }

        return $this->render(
            'surveys/new_survey.html.twig',
            array('form' => $form->createView())
        );
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/list/",
     *     defaults={"page" = 1,"limit"= 10, "sort" = "lastname", "direction" = "asc"},
     *     name="app_surveys")
     * @Route("/list/{page}/{limit}/{sort}/{direction}",
     *     requirements={"page"="\d+", "limit"="\d+"},
     *     name="app_surveys2")
     * @param int $page
     * @param $limit
     * @param $sort
     * @param $direction
     * @return Response
     */
    public function list($page, $limit, $sort, $direction)
    {
        $surveys = $this->surveyReporitory->getAllSurveys($page, $limit, $sort, $direction);

        $maxPages = ceil($surveys->count() / $limit);

        if ($page > $maxPages) {
            $surveys = $this->surveyReporitory->getAllSurveys(1, $limit, $sort, $direction);
            $maxPages = ceil($surveys->count() / $limit);
            $thisPage = 1;
        } else {
            $thisPage = $page;
        }

        return $this->render(
            'surveys/list.html.twig',
            compact('surveys', 'maxPages', 'thisPage', 'limit', 'sort', 'direction')
        );
    }

    /**
     * Metoda w celach testowych
     *
     * @Route("/gen", name="app_gen")
     */
    public function generateSurveys()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $usr = $this->getUser();

        for ($i = 0; $i < 50; $i++) {
            $survey = new Survey();
            $survey->setUser($usr);
            $survey->setFirstName("test imię nr.".$i);
            $survey->setLastName("test nazwisko nr.".$i);
            $survey->setAge(12 + $i);

            $entityManager->persist($survey);
            $entityManager->flush();
        }

        return new Response("wygenerowano");
    }
}
