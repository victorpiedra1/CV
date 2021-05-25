<?


/*
include_once 'app/Models/Job.php';
include_once 'app/Models/Project.php';
include_once 'lib1/Project.php';
*/

use App\Models\{Job,Project};



$job1 = new Job('PHP DEVELEPERS','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into');
$job1->visible = true;
$job1->meses = 25;

$job2 = new Job('JAVASCRIPT DEVELEPERS','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into');
$job2->visible = true;
$job2->meses = 20;

$job3 = new Job('ARDUINO DEVELEPERS','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into');
$job3->visible = true;
$job3->meses = 18;

$job4 = new Job('SQL DEVELOPERS','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into');
$job4->visible = true;
$job4->meses = 20;


$project1  = new Project ('Mi proyecto 1', 'Esta es una descripción muy corta del proyecto 1');
$project1->meses = 18;
$jobs = [
            $job1,         
            $job2,
            $job3,
            $job4
        ];

$projects = [
            $project1
];
    

    function Myfunction ($dato){
        //var_dump($dato); $jobs[$valor]
        echo '<ul class="lista-titulo">';
        echo '<li class="tamaño">' .$dato->getTitle(). '</li>';
        echo '</ul>';
        echo '<p class="lista-titulo">' .$dato->getDescription(). '</p>';
        echo '<div>';
        echo '<h6 class="lista-titulo">Conocimientos</h6>';
        echo '<ul class="lista-titulo">';
        echo '<li class="lista-titulo">Lorem Ipsum is simply dummy text of the printing and typesettin</li>';
        echo '<li class="lista-titulo">Lorem Ipsum is simply dummy text of the printing and typesettin</li>';
        echo '<li class="lista-titulo">Lorem Ipsum is simply dummy text of the printing and typesettin</li>';
        echo '<li class="lista-titulo">Lorem Ipsum is simply dummy text of the printing and typesettin</li>';
        echo '</ul>';
        echo '<h6 class="lista-titulo">' .'Experiencia: ' .$dato->getConversion(). '</h6>';
        echo '</div>';
  
    // ¿Qué es PHP?
    // Sintaxis de PHP
    // Variables y tipos de datos
    // Arrays en PHP (Cómo se crea y como se accede)
    // Ciclos While, Do While y For
    // Funciones
    // Incuir archivos (Los 4 metodos que vimos)
    // POO (clases, metodos)
    // Proximamente(Herencias, Interfaces, Herramientas PSR y PHPFIG, Bases de datos)
    }  
