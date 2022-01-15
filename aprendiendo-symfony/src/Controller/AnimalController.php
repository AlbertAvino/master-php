<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Animal;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;

use App\Form\AnimalType;

use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Email;

class AnimalController extends AbstractController
{ 
    public function validarEmail($email){
        $validator = Validation::createValidator();
        $errores = $validator->validate($email, [
           new Email() 
        ]);
        
        if (count($errores)!=0){
            echo "el dato no se ha validado correctamente";
            foreach($errores as $error){
                echo $error->getMessage().'<br/>';
            }
            
        }else{
            echo "El email si se ha validado correctamente";
        }
        
        die();
    }
    
    public function crearAnimal(Request $request){
        $animal = new Animal;
        $form = $this->createForm(AnimalType::class, $animal);
                       
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
          $em = $this->getDoctrine()->getManager();
          $em->persist($animal);
          $em->flush();
          
          // sesion flash
          $session = new Session();
          
          $session->getFlashBag()->add('message','Animal creado');
          
          return $this->redirectToRoute('crear_animal');
        }
        
        return $this->render('animal/crear-animal.html.twig',
                ['form' =>$form->createView()]);
    }
    
    
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);
        
        $animales = $animal_repo->findAll();
        
        $animal = $animal_repo->findBy([
            'raza'=> 'africana'
        ],[
            'id' => 'DESC'
        ]);
        //var_dump($animal);
        // query buider
//        
//        $qb = $animal_repo->createQueryBuilder('a')
//                            //->andWhere("a.raza = :raza")
//                            //->setParameter('raza','americana')
//                            ->orderBy('a.id','DESC')
//                            ->getQuery();
//        $resultset = $qb->execute();
//        //var_dump($resultset);
        
        // DQL
        $dql = "Select a from App\Entity\Animal a WHERE a.raza = 'americana'";
        $query = $em->createQuery($dql);
        $resultset = $query->execute();
        
        
        // SQL 
        $cnn = $this->getDoctrine()->getConnection();
        $sql = "Select * from animales order by id desc";
        $prepare = $cnn->prepare($sql);
        $prepare->execute();
        $resultset = $prepare->fetchAll();
        //var_dump($resultset);
        
        // repositorio 
        $animals = $animal_repo->getAnimalsOrderById('DESC');
        var_dump($animals);
        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animales' => $animales,
            
        ]);
    }
    
    public function save(){
        
        // guardar en una tabla de bbdd
        // creem el entity manager
        $entityManager = $this->getDoctrine()->getManager();
        //creem l'objecte
        $animal = new Animal();
        $animal->setTipo('Avestruz');
        $animal->setColor('verde');
        $animal->setRaza('africana');
        // guardar objecte en doctrine
        $entityManager->persist($animal);
        
        // volcar dades a la taula
        $entityManager->flush();
        
        return new response('El animal guardado tiene el id :'.$animal->getId() );
        
    }
    public function animal(Animal $animal){
    /*        
    // cargar repositori
        
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);
        //consulta
        $animal = $animal_repo->find($id);
        
        // comprovar si el resultat es correcte
    */      
        if(!$animal){
            $message = 'El animal no existe';
        }
        else{
            $message = 'El animal elegido es : '.$animal->getTipo().' - '.$animal->getRaza();
        }
        
        return new Response($message);
    }
    
    public function update($id){
        // cargar doctrine
        $doctrine = $this->getDoctrine();
        // cargar entity manager
        $em = $doctrine->getManager();
        // cargar el repo de la entidad
        $animal_repo = $em->getRepository(Animal::class);
        // Find para sacar el objeto
        $animal = $animal_repo->find($id);
        // comprovar si el objeto me llega
        if (!$animal){
            $message = 'El animal no exite en la bbdd';
        }else{
            // asignarle los valores al objeto
            $animal->setTipo("Perro $id");
            $animal->setColor('rojo');
            // persistir el objeto doctrine
            $em->persist($animal);
            // guardar en la bbdd
            $em->flush();
            $message = 'Has actualizado el animal : '.$animal->getId();
        }
        // respuesta
        return new Response($message);
    }
    
    public function delete(Animal $animal){
        $em = $this->getDoctrine()->getManager();
        if($animal && is_object($animal)){
            $em->remove($animal);
            $em->flush();
            $message = "Animal borrado correctamente";        
        }else {
            $message = "Animal no borrado";        
        }
        
        
        return new Response($message);
    }
}
